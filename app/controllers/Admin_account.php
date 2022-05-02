<?php
class Admin_account extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
        $this->complaintModel=$this->model('complaint');
    }
    public function main(){
        $this->view('pages/main');
    }
    public function client_dashbord(){
        $this->view('admin_account/admin_dashbord');
    }
    public function admin_dashbord(){
        $data=[];
        $this->view('admin_account/admin_dashbord',$data);
    }
    public function clients(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        $clients=$this->userModel->findAllClients();
        $data=[
            'client' => $clients
        ];

        $this->view('admin_account/clients',$data);
    }
    public function delete($id) {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        // print($id);
        $client = $this->userModel->findClientById($id);

        $data = [
            'client' => $client
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->userModel->deleteClient($id)) {
                echo "true";
                // header("Location: " . URLROOT . "/admin_account/clients");
            } else {
                echo "false";
                // die('Something went wrong!');
                // header("Location: " . URLROOT . "/admin_account/clients");
            }
        }
    }

    public function claims(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        $complaints=$this->complaintModel->findAllComplaints();
        $data=[
            'complaint' => $complaints
        ];

        $this->view('admin_account/claims',$data);
    }
}