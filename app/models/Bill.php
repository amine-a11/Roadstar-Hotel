<?php
    class Bill{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }

        public function getLastReservation(){
            $this->db->query('select LAST_INSERT_ID()');
            return json_decode(json_encode($this->db->single()), true)['LAST_INSERT_ID()'];
        }
        public function addBill($price,$nb){
            $this->db->query('insert into bill (price,reservation_id) values (:price,:reservation_id)');
            $this->db->bind(':price',$price);
            $this->db->bind(':reservation_id',$nb);
            $this->db->execute();

        }

        public function delete_bill($res_id){
            $this->db->query('DELETE FROM bill WHERE reservation_id = :id');
            $this->db->bind(':id', $res_id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }


    }
