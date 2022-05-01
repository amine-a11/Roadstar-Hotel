<?php
    class Reservation{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }
        /*
                         'check_in_date'=>trim($_POST['check-in-calender']),
                'check_out_date'=>trim($_POST['check-out-calender']),
                'nb_of_adult'=>trim($_POST['nb_of_adult']),
                'nb_of_children'=>trim($_POST['nb_of_children']),
                'nb_of_rooms'=>trim($_POST['nb_of_rooms']),
                'room_nb'=>trim($_POST['room_number'])

         */
        public function addReseration($id,$data){
            $this->db->query('insert into reservation (checkin_date,checkout_date,nb_of_adult,nb_of_children,user_id,room_nb) values (:checkin_date,:checkout_date,:nb_of_adult,:nb_of_children,:user_id,:room_nb)');
            
            $this->db->bind(':checkin_date',$data['check_in_date']);
            $this->db->bind(':checkout_date',$data['check_out_date']);
            $this->db->bind(':nb_of_adult',$data['nb_of_adult']);
            $this->db->bind(':nb_of_children',$data['nb_of_children']);
            $this->db->bind(':user_id',$id);
            $this->db->bind(':room_nb',$data['room_nb']);
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }
    }
