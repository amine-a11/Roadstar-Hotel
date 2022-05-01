<?php
class Pages extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
        $this->roomsModel=$this->model('Room');
        $this->reservationModel=$this->model('Reservation');
        $this->billModel=$this->model('Bill');
    }
    public function main(){
        $this->view('pages/main');
    }
    public function about_us(){
        $this->view('pages/about_us');
    }
    public function book(){
        $this->view('pages/book');
    }
    public function services(){
        $this->view('pages/services');
    }

    public function getRooms(){
        $var = $this->roomsModel->allAvailableRooms();
        // $types=array();
        // print_r($var);
        foreach($var as $room){
            $room_nb=json_decode(json_encode($room), true)['room_nb'];
            $room_type=json_decode(json_encode($room), true)['room_type'];
            $price=json_decode(json_encode($room), true)['cost_per_night'];
            // if(in_array($room_type,$types)){
            //     continue;
            // }
            // array_push($types,$room_type);
            echo "<div class=\"roomFromDatabase\">";
            echo "<div class=\"hotel-images\">";
            // print_r($room);
            echo "<img src=\"http://localhost/Roadstar-Hotel/public/images/roomImages/room".$room_nb."/room".$room_nb.".jpg\" alt=\"room\">";
            echo "</div>";
            echo "<div class=\"roomFromDatabase-info\">";
            foreach($room as $x=>$y){
                // echo $x;
                // echo $y;
                if($x=="cost_per_night"){
                    echo "<div class=\"cost_per_night\">";
                    echo "<span>price per night:</span><br>";
                    echo "<span>".$y."DTN</span>";
                    echo "</div>";
                }else if($x=="view"){
                    echo "<div class=\"view\">";
                    echo "<span>VIEW:</span><br>";
                    echo "<span>".$y."</span>";
                    echo "</div>";
                }else if($x=="room_type"){
                    echo "<div class=\"size\">";
                    echo "<span>Room Type:</span><br>";
                    echo "<span>".$y."</span>";
                    echo "</div>";
                }else if($x=="occupancy"){
                    echo "<div class=\"occupancy\">";
                    echo "<span>occupancy:</span><br>";
                    echo "<span>Sleeps ".$y."</span>";
                    echo "</div>";
                }
            }
            echo "</div>";
            echo "<button type=\"button\" class=\"next-button book_room_btn\" id=\"".$room_nb."\" onclick=\"get_booking_room_number(this,".$price.",'".$room_type."')\">Book</button>";
            echo "</div>";
            echo "<hr>";
        }
    }
    public function bookroom(){
        $data=[];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data=[
                'fname'=>trim($_POST['firstName']),
                'lname'=>trim($_POST['lastName']),
                'country'=>trim($_POST['country']),
                'city'=>trim($_POST['city']),
                'email'=>trim($_POST['email']),
                'address'=>trim($_POST['address1']),
                'zipcode'=>trim($_POST['zipCode']),
                'phone_number'=>trim($_POST['phone']),
                'age'=>trim($_POST['age']),
                'gender'=>trim($_POST['title']),
                'role'=>"client",
                'check_in_date'=>trim($_POST['check-in-calender']),
                'check_out_date'=>trim($_POST['check-out-calender']),
                'nb_of_adult'=>trim($_POST['nb_of_adult']),
                'nb_of_children'=>trim($_POST['nb_of_children']),
                'nb_of_rooms'=>trim($_POST['nb_of_rooms']),
                'room_nb'=>trim($_POST['room_number']),
                'price'=>trim($_POST['price'])
            ];
            if(!isset($_SESSION['user_id'])){
                $this->userModel->add_client($data);
            }
            $cli_id=$this->userModel->findUserIdByEmail($data['email']);
            $this->reservationModel->addReseration($cli_id,$data);
            $nb=$this->billModel->getLastReservation();
            $this->billModel->addBill($data['price'],$nb);
            $this->roomsModel->updateStatus($data['room_nb'],"not_available");
            header('location:' . URLROOT);
        }
    }
    public function validEmail(){
        $e=$_REQUEST['email'];
        if($this->userModel->findUserByEmail($e)){
            echo "we found a matching one";
        }
    }
    public function sustainability(){
        $this->view('pages/sustainability');
    }




}