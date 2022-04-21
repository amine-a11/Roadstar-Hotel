<?php
class Users extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
    }
    public function sign_in(){
        $data=[];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            
            $data=[
                'username'=>trim($_POST['user-name']),
                'password'=>trim($_POST['password']),
                'loginError'=>''
            ];
            $loggedInUser=$this->userModel->login($data['username'],$data['password']);
            if($loggedInUser){
                $this->createUserSession($loggedInUser);
                if($loggedInUser->role=='client'){
                    header('location:' . URLROOT .'/client_account/client_dashbord');
                }else{
                    header('location:' . URLROOT .'/admin_account/admin_dashbord');
                }
            }else{
                $data['loginError']='(email|phoneNumber) incorrect. please try again.';
            }
            
        }
        $this->view('users/sign_in',$data);
    }

    public function sign_up(){
        $data=[
            'FirstName'=>'',
            'LastName'=>'',
            'Country'=>'',
            'City'=>'',
            'PhoneNumber'=>'',
            'Email'=>'',
            'Password'=>'',
            'Cpassword'=>'',
            'Address'=>'',
            'Role'=>'',
            'emailError'=>'',
            'pwdError'=>''
        ];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data=[
                'FirstName'=>trim($_POST['FirstName']),
                'LastName'=>trim($_POST['LastName']),
                'Country'=>trim($_POST['Country']),
                'City'=>trim($_POST['City']),
                'PhoneNumber'=>trim($_POST['PhoneNumber']),
                'Email'=>trim($_POST['Email']),
                'Password'=>trim($_POST['Password']),
                'Cpassword'=>trim($_POST['Cpassword']),
                'Address'=>trim($_POST['Address']),
                'Role'=>'client',
                'emailError'=>'',
                'pwdError'=>''    
            ];    
            //check if email exists.
            if($this->userModel->findUserByEmail($data['Email'])){
                $data['emailError']='email mawjoud';
            }
            //validate password
            if($data['Password']!=$data['Cpassword']){
                $data['pwdError']='passwords do not match';
            }
            if(empty($data['emailError'])&&empty($data['pwdError'])){
                $data['Password']=password_hash($data['Password'],PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    header('location:' . URLROOT);
                }else{
                    die("Sonething went wrong");
                }
            }
        }
        $this->view('users/sign_up',$data);
    }

    public function createUserSession($user){
        session_start();
        $_SESSION['user_id']=$user->user_id;
        $_SESSION['user_fname']=$user->user_fname;
        $_SESSION['user_lname']=$user->user_lname;
    }
}