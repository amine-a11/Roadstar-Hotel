<?php
class Client_account extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
        $this->complaintModel=$this->model('Complaint');
        $this->reservationModel=$this->model('reservation');
    }
    public function main(){
        $this->view('pages/main');
    }
    public function client_dashbord(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $data = [
            'user_id' =>'',
            'oldpassword' =>'',
            'newpassword' =>'',
            'cnewpassword' =>'',
            'error' =>''
        ];

        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'user_id' => $_SESSION['user_id'],
                'oldpassword' => trim($_POST['oldpassword']),
                'newpassword' => trim($_POST['newpassword']),
                'cnewpassword' =>trim($_POST['cnewpassword'])
            ];

            if(empty($data['oldpassword']) or empty($data['newpassword']) or empty($data['cnewpassword'])){
                $data['error']=" Complete all the fields !";
            }

            if(!password_verify($data['oldpassword'],$_SESSION['password'])){
                $data['error']=" not the right password !";
            }

            if( strcmp($data['newpassword'],$data['cnewpassword']) != 0){
                $data['error']=" not the same password !";
            }

            if(empty($data['error'])){

                if($this->userModel->updatePassword($data)){
                    header('location:' . URLROOT .'/client_account/client_dashbord');
                }
                else{
                    die("something went wrong, please try again");
                }
            }
        }
        
        $this->view('client_account/client_dashbord',$data);
    }


    #history-claim....
    public function history_claims(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $complaints=$this->complaintModel->findAllComplaintById($_SESSION["user_id"]);
        $data=[
            'complaint' => $complaints
        ];

        $this->view('client_account/history_claims',$data);
    }
    public function claim(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        // if(session_status() == PHP_SESSION_NONE){
        //     session_start();
        // }
        $data = [
            'content' =>'',
            'user_id' =>'',
            'error' =>''
        ];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'content' => trim($_POST['complaint']),
                'user_id' => trim($_SESSION['user_id']),
                'error' =>''
            ];
            
            if(empty($data['content'])){
                $data['error']="No Complaints Found";
            }

            if(empty($data['error'])){
                if($this->complaintModel->addComplaint($data)){
                    // $this->view('client_account/client_dashbord');
                    header('location:' . URLROOT .'/client_account/client_dashbord');
                }
                else{
                    die("something went wrong, please try again");
                }
            }

        }
        $this->view('client_account/claim',$data);

    }
    public function history_booking(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $data=[];
        $reservation=$this->reservationModel->findReservationById($_SESSION['user_id']);
        $data=[
            'reservation' => $reservation
        ]; 
        $this->view('client_account/history_booking',$data);
    }

    public function delete_reservation($id) {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $reservation = $this->reservationModel->findReservationById($id);

        $data = [
            'reservation' => $reservation
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->reservationModel->deleteReservation($id)) {
                header("Location: " . URLROOT . "/client_account/history_claims");
            } else {
                die('Something went wrong!');
                // header("Location: " . URLROOT . "/admin_account/clients");
            }
        }
    }
}