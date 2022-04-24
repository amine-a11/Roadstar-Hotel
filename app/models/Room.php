<?php
    class Room{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }
        public function allRooms(){
            $this->db->query('select * from room');
            $results = $this->db->resultSet();
            return $results;
        }
    }