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
        public function findAllRooms(){
            $this->db->query('select * from room');
            $results = $this->db->resultSet();
            return $results;
        }
        public function findRoomById($id){
            $this->db->query('select * from room where room_nb =:id');
            $this->db->bind(':id',$id);
            $room=$this->db->single();
            return $room;
        }
        public function updateRoom($data){
            $this->db->query('update room set 
                            room_type=:room_type,
                            status=:status,
                            cost_per_night=:cost_per_night,
                            view=:view,
                            occupancy=:occupancy
                            where room_nb=:room_nb');
            $this->db->bind(':room_type',$data['type']);
            $this->db->bind(':status',$data['status']);
            $this->db->bind(':cost_per_night',$data['cost']);
            $this->db->bind(':view',$data['view']);
            $this->db->bind(':occupancy',$data['occupancy']);
            $this->db->bind(':room_nb',$data['number']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

                        
        }
        public function addRoom($data){
            $this->db->query('insert into room values(:room_nb ,:room_type, :status,:cost_per_night,:view,:occupancy)');
            $this->db->bind(':room_type',$data['type']);
            $this->db->bind(':status',$data['status']);
            $this->db->bind(':cost_per_night',$data['cost']);
            $this->db->bind(':view',$data['view']);
            $this->db->bind(':occupancy',$data['occupancy']);
            $this->db->bind(':room_nb',$data['number']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

                        
        }
    }