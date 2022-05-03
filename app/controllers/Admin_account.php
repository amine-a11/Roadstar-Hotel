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
                        if ($this->roomModel->addRoom($data)) {
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
