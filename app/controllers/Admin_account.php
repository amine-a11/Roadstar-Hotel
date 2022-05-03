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
                echo "true";
                // header("Location: " . URLROOT . "/admin_account/clients");
            } else {
                echo "false";
                // die('Something went wrong!');
                // header("Location: " . URLROOT . "/admin_account/clients");
            }
        }
    }
    public function getUserInfo($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $client = $this->userModel->findClientById($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // print_r($client);
            echo "<div class=\"accordion-body\">";
            echo "<div class=\"one-data\">";
            echo "<label for=\"firstName\">FIRST NAME</label>";
            echo "<input id=\"firstName\" type=\"text\"  value=\"$client->user_fname\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"city\">CITY*</label>";
            echo "<input name=\"city\" id=\"city\" type=\"text\" value=\"$client->city\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"lastName\">LAST NAME*</label>";
            echo "<input name=\"lastName\" id=\"lastName\" type=\"text\" value=\"$client->user_lname\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"address1\">ADDRESS1*</label>";
            echo "<input name=\"address1\" id=\"address1\" type=\"text\" value=\"$client->address\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"email\">EMAIL*</label>";
            echo "<input name=\"email\" id=\"email\" type=\"email\" value=\"$client->email\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"zipCode\">ZIP CODE</label>";
            echo "<input name=\"zipCode\" id=\"zipCode\"  type=\"text\" value=\"$client->zipcode\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"phone\">TELEPHONE NUMBER*</label>";
            echo "<input name=\"phone\" id=\"phone\" type=\"text\" value=\"$client->phone_number\" disabled>";
            echo "</div>";
            echo "<div class=\"one-data\">";
            echo "<label for=\"age\">Age*</label>";
            echo "<input name=\"age\" id=\"age\" type=\"number\" value=\"$client->age\" disabled>";
            echo "</div>";
            echo "</div>";
            echo "<style>";
            echo ".accordion-body{display: grid;grid-template-columns: 50% 50%;}";
            echo ".one-data {display: flex;flex-direction: column;gap: .2rem;padding: 20px;}";
            echo ".one-data>label {font-size: 1rem;font-weight: normal;}";
            echo ".one-data>input {border: 1px solid #333;padding: .4rem;width: 100%;}";
            echo "</style>";

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
                echo "true";
                // header("Location: " . URLROOT . "/admin_account/claims");
            } else {
                echo "false";
                die('Something went wrong!');
            }
        }
    }
}