<?php
    class Complaint{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }

        public function findAllComplaintById($id){
            $this->db->query('select * from complaint where id_user =:id');
            $this->db->bind(':id',$_SESSION['user_id']);
            $results = $this->db->resultSet();
            return $results;
        }
        public function addComplaint($data){
            $this->db->query('INSERT INTO complaint (content , id_user) VALUES (:content,:user_id)');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':content', $data['content']);
    
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function findAllComplaints(){
            $this->db->query('select * from complaint inner join user on complaint.id_user = user.user_id');
            $results = $this->db->resultSet();
            return $results;
        }
        public function deleteComplaint($id) {
            $this->db->query('DELETE FROM complaint WHERE id_complaint = :id');
    
            $this->db->bind(':id', $id);
    
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }