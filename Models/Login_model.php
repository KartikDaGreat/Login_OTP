<?php 

namespace Login\Models;
use CodeIgniter\Model;

class Login_model extends Model {

   function __construct() {
      parent::__construct();
      $db = db_connect();
      $this->db = \Config\Database::connect();

   }
   public function get_user() {
      return $this->db->table('users')->get()->getResult();
   }
   public function check_login($user_name,$password){
    // echo"ss<pre>";print_r($detail);exit;
        $password         = $password;
        $data['password'] = md5($password);
        $this->usermaster = $this->db->table('users as U');
        $this->usermaster->select('U.user_id,U.user_role_id,U.user_group_id,U.first_name,U.last_name,U.user_name,U.phone_no,U.email,U.status,U.user_img,U.root_path,U.permission');
        // ->join('user_roles as UR', 'UR.user_role_id = U.user_role_id')
        // ->join('user_groups as UG', 'find_in_set(UG.user_group_id,UR.user_group_id) <> 0');
        // ->join('user_group_access as UGA', 'UGA.user_group_id = UR.user_group_id');
        $this->usermaster->where('U.user_name', $user_name);
        $this->usermaster->where('U.password', $data['password']);
        $details = $this->usermaster->get()->getRowArray(); 
        // $test = $db->getLastQuery();
        if (!empty($details)){
            return $details;
        } else {
            return 0;
        }
    }
    public function login_history($user_ip, $post, $type){
        $password          = $post['password'];
        $user_name         = $post['user_name'];

        $data['password']     = md5($password);
        $d['password']        = $data['password'];
        $d['username']        = $user_name;
        $d['password_name']   = $password;
        $date                 = date('Y-m-d H:i:s');

        if (($type == 1) || ($type == 2) || ($type == 6)) {// user name password miss match flog
            $msg = "Username/Password is incorrect";
        } else if ($type == 3) {
            $msg = "Invalid captcha";
        } else if ($type == 4) {
            $msg = "Account is blocked";
        } else if ($type == 5) {
            $msg = "Account has been deactivated";
        } else if ($type == 7) {
            $msg = "Success";
        } else {
            $msg = "unknown ID";
        }
        //Get user Details 
        $details = array(
            'ip_address' => $user_ip,
            'username' => $d['username'],
            'password' => $d['password'],
            'attempt_date' => $date,
            'attempt_count' => 1,
            'password_name' => $d['password_name'],
            'message' => $msg
        );
        $this->usermaster = $this->db->table('login_history');

        $this->usermaster->insert($details);
    } 
    public function get_user_details($otp_id){
        $this->usermaster = $this->db->table('users as U');
        $this->usermaster->select('*');
        $this->usermaster->where('U.user_name', $otp_id);
        $data = $this->usermaster->get()->getRowArray();
        return $data;
        // echo '<pre>';print_r($data);exit;
    }

    public function insertotp($data){
        return $this->db->table('otp_verification')->insert($data);
    }

    public function verifyotp($otp, $mobile){
        $this->usermaster = $this->db->table('otp_verification');
        $this->usermaster->select('*');
        $this->usermaster->where('otp_number', $otp);
        $this->usermaster->where('mobile_number', $mobile);
        $verify = $this->usermaster->get()->getRowArray();
        return $verify;
    }

    public function reset_password($user_name,$update_pass){
       $this->db->table('users')->where('user_name',$user_name)->update($update_pass);
      $data = $this->db->affectedRows();  
      return $data;
    }

    // public function get_masterdetail(){
    //     $this->usermaster = $this->db->table('master_settings');
    //     $this->usermaster->select('*');
    //     $this->usermaster->where('status', 1); 
    //     $mast = $this->usermaster->get()->getResultArray();
    //     return $mast;

    // }


}