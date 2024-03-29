<?php
    class Room{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }
        public function allAvailableRooms($nb){
            $this->db->query("select * from room , room_type where type=room_type and status=\"available\" and room.occupancy>=$nb");
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
            $this->db->query('insert into room(room_type,status,cost_per_night,view,occupancy) values(:room_type,:status,:cost_per_night,:view,:occupancy)');
            $this->db->bind(':room_type',$data['type']);
            $this->db->bind(':status',$data['status']);
            $this->db->bind(':cost_per_night',$data['cost']);
            $this->db->bind(':view',$data['view']);
            $this->db->bind(':occupancy',$data['occupancy']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

                        
        }
        public function getIdLastAddedRoom(){
            $this->db->query('select LAST_INSERT_ID()');
            return json_decode(json_encode($this->db->single()), true)['LAST_INSERT_ID()'];
        }
        
        public function get_types_data(){
            $this->db->query('select room_type,count(*) from room group by room_type');
            $res=$this->db->resultSet();
            return $res;
        }
    }