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
        public function findAllReservations(){
            $this->db->query('select * from reservation , room , bill , user where 
            reservation.user_id = user.user_id and reservation.reservation_id = bill.reservation_id
            and reservation.room_nb = room.room_nb');
            $results = $this->db->resultSet();
            return $results;
        }
        public function findReservationByid($id){
            $this->db->query('select * from reservation , room , bill , user where 
            reservation.user_id = user.user_id and reservation.reservation_id = bill.reservation_id
            and reservation.room_nb = room.room_nb and reservation.user_id =:id');
            $this->db->bind(':id',$id);
            $results = $this->db->resultSet();
            return $results;
        }
        public function deleteReservation($id) {
            $this->db->query('DELETE FROM reservation WHERE reservation_id = :id');
    
            $this->db->bind(':id', $id);            
            try{
                if ($this->db->execute()) {
                    return true;
                } else {
                    return false;
                }
            }catch(Exception $e){
                return false;
            }
        }



        public function is_reservation_exists($data){
            $this->db->query('SELECT count(*) FROM reservation,user WHERE reservation.user_id=user.user_id and checkin_date=:checkin_date and checkout_date=:checkout_date and nb_of_adult=:nb_of_adult and nb_of_children=:nb_of_children and user.email=:email');
            
            $this->db->bind(':checkin_date', $data['cid']);
            $this->db->bind(':checkout_date', $data['cod']);
            $this->db->bind(':nb_of_children', $data['children_nb']);
            $this->db->bind(':nb_of_adult', $data['adult_nb']);
            $this->db->bind(':email', $data['email']);
            
            return json_decode(json_encode($this->db->single()), true)['count(*)']>0;
        }
        public function get_reservation_id($data){
            $this->db->query('SELECT reservation_id FROM reservation,user WHERE reservation.user_id=user.user_id and checkin_date=:checkin_date and checkout_date=:checkout_date and nb_of_adult=:nb_of_adult and nb_of_children=:nb_of_children and user.email=:email');

            $this->db->bind(':checkin_date', $data['cid']);
            $this->db->bind(':checkout_date', $data['cod']);
            $this->db->bind(':nb_of_children', $data['children_nb']);
            $this->db->bind(':nb_of_adult', $data['adult_nb']);
            $this->db->bind(':email', $data['email']);

            return json_decode(json_encode($this->db->single()), true)['reservation_id'];
        }

        public function get_cid(){
            $this->db->query('SELECT month(checkin_date),sum(price) FROM reservation,bill where bill.reservation_id=reservation.reservation_id group by month(checkin_date) ');
            $res=$this->db->resultSet();
            return $res;
        }

    }
