<?php
class Pages extends Controller{
    public function __construct(){
        // $this->userModel=$this->model('User');
        $this->roomsModel=$this->model('Room');
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
        $var = $this->roomsModel->allRooms();
        $types=array();
        // print_r($var);
        foreach($var as $room){
            $room_nb=json_decode(json_encode($room), true)['room_nb'];
            $room_type=json_decode(json_encode($room), true)['room_type'];
            if(in_array($room_type,$types)){
                continue;
            }
            array_push($types,$room_type);
            echo "<div class=\"roomFromDatabase\">";
            echo "<div class=\"hotel-images\">";
            // print_r($room);
            echo "<img src=\"http://localhost/Roadstar-Hotel/public/images/roomImages/".$room_type."/".$room_type.".jpg\" alt=\"room\">";
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
                }else if($x=="size"){
                    echo "<div class=\"size\">";
                    echo "<span>Size:</span><br>";
                    echo "<span>".$y."sqm</span>";
                    echo "</div>";
                }else if($x=="occupancy"){
                    echo "<div class=\"occupancy\">";
                    echo "<span>occupancy:</span><br>";
                    echo "<span>Sleeps ".$y."</span>";
                    echo "</div>";
                }
            }
            echo "</div>";
            // echo "<button id=".$room_nb." onclick="">Book</button>";
            echo "</div>";
            echo "<hr>";
        }
    }
    // public function sign_in(){
    //     $this->view('pages/sign_in'); 
    // }
    // public function sign_up(){
    //     $this->view('pages/sign_up');
    // }
    public function sustainability(){
        $this->view('pages/sustainability');
    }




}