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
                    // $this->view("client_account/client_dashbord");
                }else{
                    header('location:' . URLROOT .'/admin_account/admin_dashbord');
                }
            }else{
                $data['loginError']='(email|phoneNumber) incorrect. please try again.';
                $this->view('users/sign_in',$data);
            }
            
        }else{
            $this->view('users/sign_in',$data);
        }
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
            'Age'=>'',
            'ZipCode'=>'',
            'Gender'=>'',
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
                'Age'=>trim($_POST['Age']),
                'ZipCode'=>trim($_POST['ZipCode']),
                'Gender'=>trim($_POST['Gender']),
                'Role'=>'client',
                'emailError'=>'',
                'pwdError'=>'' ,
                'fileError'=>''   
            ];    
            //check if email exists.
            if($this->userModel->findUserByEmail($data['Email'])){
                $data['emailError']='email mawjoud';
                echo '<script>alert("email mawjoud")</script>';
            }
            //validate password
            if($data['Password']!=$data['Cpassword']){
                $data['pwdError']='passwords do not match';
            }

            if(empty($data['emailError'])&&empty($data['pwdError'])){
                $data['Password']=password_hash($data['Password'],PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    if(isset($_FILES)){
                        print_r($_FILES);
                        $fileName=$_FILES['imageFile']['name'];
                        $fileTmpName=$_FILES['imageFile']['tmp_name'];
                        $fileSize=$_FILES['imageFile']['size'];
                        $fileError=$_FILES['imageFile']['error'];
                        $fileType=$_FILES['imageFile']['type'];

                        $Last_User_Id=$this->userModel->getLastUserId();
                        $fileExt=strtolower(end(explode('.',$fileName)));
                        $fileNameNew=$Last_User_Id.'.'.$fileExt;
                        $fileDes=$_SERVER['DOCUMENT_ROOT'].'/Roadstar-Hotel/public/images/clientsImages/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDes);
                    }
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
        $_SESSION['country']=$user->country;
        $_SESSION['city']=$user->city;
        $_SESSION['email']=$user->email;
        $_SESSION['address']=$user->address;
        $_SESSION['zipcode']=$user->zipcode;
        $_SESSION['phone_number']=$user->phone_number;
        $_SESSION['age']=$user->age;
        $_SESSION['gender']=$user->sexe;
        $_SESSION['password']=$user->password;
        $_SESSION['role']=$user->role;
    }
    public function logout(){
        session_start();
        unset($_SESSION['user_id']);
        unset($_SESSION['user_fname']);
        unset($_SESSION['user_lname']);
        unset($_SESSION['country']);
        unset($_SESSION['city']);
        unset($_SESSION['email']);
        unset($_SESSION['address']);
        unset($_SESSION['zipcode']);
        unset($_SESSION['phone_number']);
        unset($_SESSION['age']);
        unset($_SESSION['gender']);
        unset($_SESSION['password']);
        session_destroy();
        header('location:' . URLROOT);
    }
}