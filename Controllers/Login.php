<?php

namespace Login\Controllers;
use App\Controllers\BaseController;
use Login\Models\Login_model;


class Login extends BaseController {
    
    public function __construct() {
        $db = db_connect();
        $this->Login_model = new Login_model();
        $view = \Config\Services::renderer();
        $this->session = \Config\Services::session();
        $this->session->start();

    }
    public function index()
    {
        $view = \Config\Services::renderer();
        // $data['mast_data'] = $this->Login_model->get_masterdetail();
        $viewName = 'Login\Views\login';
        $data['title'] = 'TNPCB - LIMS';
        $this->_setRenderSection($view, 'content' ,$viewName,$data);
        return $view->render('template12');

    }  


     public function menu1(){
        $view = \Config\Services::renderer();
        $data['mast_data'] = $this->Login_model->get_masterdetail();
        $viewName = 'Login\Views\menu1';
        $data['title'] = 'TNPCB - LIMS';
        $this->_setRenderSection($view, 'content' ,$viewName,$data);
        return $view->render('template');
     }

      public function menu2(){
        $view = \Config\Services::renderer();
        $data['mast_data'] = $this->Login_model->get_masterdetail();
        $viewName = 'Login\Views\menu2';
        $data['title'] = 'TNPCB - LIMS';
        $this->_setRenderSection($view, 'content' ,$viewName,$data);
        return $view->render('template');
     }

      public function menu3(){
        $view = \Config\Services::renderer();
        $data['mast_data'] = $this->Login_model->get_masterdetail();
        $viewName = 'Login\Views\menu3';
        $data['title'] = 'TNPCB - LIMS';
        $this->_setRenderSection($view, 'content' ,$viewName,$data);
        return $view->render('template');
     }



    public function getRealUserIp() {
        //    echo"<pre>";print_r($_SERVER);exit;
        switch (true) {
            case (!empty($_SERVER['HTTP_X_REAL_IP'])):
                return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])):
                return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default:
                return $_SERVER['REMOTE_ADDR'];
        }
    }
    public function checklogin()
    {
         
        $user_ip = $this->getRealUserIp();
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // echo"<pre>";print_r($_POST);exit;
        $loginDetails = $this->Login_model->check_Login($user_name,$password);
        // echo"<pre>";print_r($loginDetails);exit;
            if ($loginDetails == 0) {
                $this->Login_model->login_history($user_ip, $_POST, 1); 
                session()->setFlashData("message_name","Incorrect Username/Password. Please try again");
                return redirect()->to(base_url());
            } else if ($loginDetails['status'] == '') {
                $this->Login_model->login_history($user_ip, $_POST, 2); 
                session()->set_flashdata('message_name', 'Your Username/Password is incorrect. Please try again');
                return redirect()->to(base_url());
            } else if ($loginDetails['status'] != 1) {
                $this->Login_model->login_history($user_ip, $_POST, 5); 
                session()->setFlashData("message_name","Your Account has been deactivated");
                return redirect()->to(base_url());
            } else if (empty($loginDetails)) {
                $this->Login_model->login_history($user_ip, $_POST, 6); 
                session()->set_flashdata('message_name', 'Your Username/Password is incorrect. Please try again');
                return redirect()->to(base_url());
            } else if (!empty($loginDetails)){
                if(($loginDetails['user_img'])){
                    $user_img = $loginDetails['user_img'];
                }else{
                    $user_img = 'uploads/no_image.png';
                }

                $user_data = [
                    'user_id'           => $loginDetails['user_id'],
                    'user_group_id'     => $loginDetails['user_group_id'],
                    'user_role_id'      => $loginDetails['user_role_id'],
                    'username'          => $loginDetails['user_name'],
                    // 'region'            => $loginDetails['region'],
                    'name'              => ucwords($loginDetails['first_name'].' '.$loginDetails['last_name']),
                    'email'             => $loginDetails['email'],
                    'phone_no'          => $loginDetails['phone_no'],
                    'user_img'          => $user_img,
                    'user_access'       => $loginDetails['permission'],
                    'user_pln_type'     => '',
                    'logged_in'         => 1,
                ];
                // echo '<pre>';print_r($user_img);exit;
                //get settings values
                $sessionDetails = get_session_settings();
                //echo '<pre>';print_r($sessionDetails);exit;
                foreach ($sessionDetails as $ds) {
                    $_SESSION[$ds['key']] = $ds['value'];
                }
                // echo '<pre>';print_r($_SESSION);exit;

                setcookie('user_id', $user_data['user_id'], time() + (86400 * 30), "/");
                $this->session->set($user_data);
                $this->Login_model->login_history($user_ip, $_POST, 7); 
                if($loginDetails['user_group_id'] < 5){
                    return redirect()->route($loginDetails['root_path']);
                }else{
                    return redirect()->route('Statusdashboard');
                }
            }else{
                $this->session->set_flashdata('message_name', 'Your Username/Password is incorrect. Please try again');
                return redirect()->route('Login');
            }


    } 

    public function logout(){
        // echo '1';exit;
        $this->session->destroy();
        // $session->destroy();
        return redirect()->route('login');
    }

    private function _setRenderSection($viewRenderer, $sectionName , $viewName, $data = []) {
        $viewRenderer->section($sectionName);
        echo view($viewName,$data);
        $viewRenderer->endSection($sectionName);
    }

    public function get_user(){
        $otp_id = $this->request->getPost('otp_val');
        $user_details = $this->Login_model->get_user_details($otp_id);

        $rand_number = rand(111111, 999999);
         $number["otp_number"] = $rand_number;
         $number["mobile_number"] =  $user_details['phone_no'];
         $this->Login_model->insertotp($number);

         $templateid = "1207164766995635513";
         $senderid = "ENOVAS";
         $current_date = date("d-m-Y H:i:s");
         $msgtxt =
             $rand_number .
             " is SECRET OTP from TNPCB-LIMS sent on " .
             $current_date .
             ". OTP valid for 5 mins. Please do not share this OTP. ENOVA SOFTWARE";
         $mobile1 =  $user_details['phone_no'];
         $mbl = $mobile1;
         $message_content = urlencode("$msgtxt");
         $senderid = "ENOVAS";
         $route = 2;
         $templateid = "1207164766995635513";
         $url = 'http://smvsms.in/http-tokenkeyapi.php?authentic-key=PNkoyV9JBLyY09hH&senderid='.$senderid.'&route='.$route.'&number='.$mbl.'&message='.$message_content.'&templateid='.$templateid.'';
         $output = file_get_contents(
             $url
         ); 
         $message = "OTP generated successfully..!";
         // echo $message;

        return json_encode($user_details);        
    }

    public function check_otp(){
                // echo '<pre>';print_r($_POST);exit;
        $otp = $this->request->getPost("otp_num");
        $mobile = $this->request->getPost("mobile_number");
        $n = $this->Login_model->verifyotp($otp, $mobile);
        echo $n == 0 ? "false" : "true";
    }

    public function update_password(){
        $user_name = $this->request->getPost("otp_val");

        $update_pass['password'] = md5($this->request->getPost("new_password"));
        $update_pass['raw_password'] = $this->request->getPost("new_password");
        $reset_pass = $this->Login_model->reset_password($user_name,$update_pass);
        echo $reset_pass;
    }

  
}