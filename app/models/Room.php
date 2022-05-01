<?php
    class Room{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }
        public function allAvailableRooms(){
            $this->db->query('select * from room , room_type where type=room_type and status="available"');
            $results = $this->db->resultSet();
            return $results;
        }
        public function updateStatus($room_nb,$st){
            $this->db->query('update room set status = :status where room_nb = :room_nb');
            $this->db->bind(':status',$st);
            $this->db->bind(':room_nb',$room_nb);

            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }

        }
    }