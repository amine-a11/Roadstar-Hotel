<?php
class Admin_account extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
        $this->complaintModel=$this->model('complaint');
        $this->roomModel = $this->model('room');
    }
    public function main(){
        $this->view('pages/main');
    }
    public function client_dashbord(){
        $this->view('admin_account/admin_dashbord');
    }
    public function admin_dashbord(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
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

    public function rooms(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        $room=$this->roomModel->findAllRooms();
        $data=[
            'room' => $room
        ];

        $this->view('admin_account/rooms',$data);
    }
    public function update_room($id){
        
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $room=$this->roomModel->findRoomById($id);
    
            $data = [
                'room' => $room,
                'number' =>"",
                'type' => "",
                'status' => "",
                'cost' =>"",
                'view' => "",
                'occupancy' => "",
                'error' =>""
            ];
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'number' => trim($_POST['number']),
                    'type' => trim($_POST['type']),
                    'status' => trim($_POST['status']),
                    'cost' => trim($_POST['cost']),
                    'view' => trim($_POST['view']),
                    'occupancy' => trim($_POST['occupancy']),
                    'error' =>""

                ];
                var_dump($data);

    
                if(empty($data['cost'])) {
                    $data['error'] = 'The cost of the room cannot be empty';
                }
                if (empty($data['error']) ) {
                    if ($this->roomModel->updateRoom($data)) {
                        header("Location: " . URLROOT . "/admin_account/rooms");
                    } else {
                        die("Something went wrong, please try again!");
                    }
                } else {
                    $this->view('/admin_account/rooms', $data);
                }
            }
    
            $this->view('admin_account/update_room', $data);
        }
        public function add_room(){
        
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
        
                $data = [
                    'number' =>"",
                    'type' => "",
                    'status' => "",
                    'cost' =>"",
                    'view' => "",
                    'occupancy' => "",
                    'error' =>""
                ];
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    $data = [
                        'type' => trim($_POST['type']),
                        'status' => trim($_POST['status']),
                        'cost' => trim($_POST['cost']),
                        'view' => trim($_POST['view']),
                        'occupancy' => trim($_POST['occupancy']),
                        'error' =>""
    
                    ];
                    var_dump($data);
    

                    if(empty($data['cost'])) {
                        $data['error'] = 'The cost of the room cannot be empty';
                    }
                    if (empty($data['error']) ) {
                        if ($this->roomModel->addRoom($data)) {
                            if(isset($_FILES)){
                                print_r($_FILES);
                                $fileName=$_FILES['roomImage']['name'];
                                $fileTmpName=$_FILES['roomImage']['tmp_name'];
                                $fileSize=$_FILES['roomImage']['size'];
                                $fileError=$_FILES['roomImage']['error'];
                                $fileType=$_FILES['roomImage']['type'];
        
                                $Last_Room_Id=$this->roomModel->getIdLastAddedRoom();

                                $fileExt=strtolower(end(explode('.',$fileName)));
                                $fileNameNew=$Last_Room_Id.'.'.$fileExt;
                                mkdir($_SERVER['DOCUMENT_ROOT'].'/Roadstar-Hotel/public/images/roomImages/room'.$Last_Room_Id,0700);
                                $fileDes=$_SERVER['DOCUMENT_ROOT'].'/Roadstar-Hotel/public/images/roomImages/room'.$Last_Room_Id.'/room'.$fileNameNew;
                                move_uploaded_file($fileTmpName,$fileDes);
                            }
        
                            header("Location: " . URLROOT . "/admin_account/rooms");
                        } else {
                            die("Something went wrong, please try again!");
                        }
                    } else {
                        $this->view('/admin_account/rooms', $data);
                    }
                }
        
                $this->view('admin_account/add_room', $data);
            }

            public function reservations(){
                if(session_status() == PHP_SESSION_NONE){
                    session_start();
                }
        
                $reservation=$this->roomModel->findAllRooms();
                $data=[
                    'reservation' => $reservation
                ];
                print("hey");
        
                $this->view('admin_account/reservations',$data);
            }
    }
