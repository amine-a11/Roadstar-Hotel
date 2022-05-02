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
        $client = $this->userModel->findClientById($id);

        $data = [
            'client' => $client
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->userModel->deleteClient($id)) {
                header("Location: " . URLROOT . "/admin_account/clients");
            } else {
               die('Something went wrong!');
            }
        }
    }
    public function claims(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        $complaint=$this->complaintModel->findAllComplaints();
        $data=[
            'complaint' => $complaint
        ];

        $this->view('admin_account/claims',$data);
    }
    public function deleteComplaint($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $complaint = $this->complaintModel->findAllComplaintById($id);

        $data = [
            'complaint' => $complaint
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->complaintModel->deleteComplaint($id)) {
                header("Location: " . URLROOT . "/admin_account/claims");
            } else {
               die('Something went wrong!');
            }
        }
    }
}