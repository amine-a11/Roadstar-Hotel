<?php
    class User{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }

        public function findUserByEmail($email){
            $this->db->query('select * from user where email =:email');
            $this->db->bind(':email',$email);
            return $this->db->rowCount>0;
        }

        public function register($data){
            $this->db->query('insert into user (user_fname,user_lname,country,city,email,address,zipcode,phone_number,age,password,sexe,role) values (:user_fname,:user_lname,:country,:city,:email,:address,:zipcode,:phone_number,:age,:password,:sexe,:role)');


            $this->db->bind(':user_fname',$data['FirstName']);
            $this->db->bind(':user_lname',$data['LastName']);
            $this->db->bind(':country',$data['Country']);
            $this->db->bind(':city',$data['City']);
            $this->db->bind(':email',$data['Email']);
            $this->db->bind(':address',$data['Address']);
            $this->db->bind(':zipcode',$data['ZipCode']);
            $this->db->bind(':phone_number',$data['PhoneNumber']);
            $this->db->bind(':age',$data['Age']);
            $this->db->bind(':password',$data['Password']);
            $this->db->bind(':sexe',$data['Gender']);
            $this->db->bind(':role','client');

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }
        public function login($username,$password){
            $this->db->query('select * from user where email = :username');
            $this->db->bind(':username',$username);
            $row=$this->db->single();
            $hashedPassword=$row->password;
            if(password_verify($password,$hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }

        public function updatePassword($data){
            // var_dump($data);
            $this->db->query('update user set password = :newpassword where user_id = :user_id');
            $this->db->bind(':newpassword',password_hash($data['newpassword'],PASSWORD_DEFAULT));
            $this->db->bind(':user_id',$data['user_id']);

            if ($this->db->execute()) {
                return true;
            }
            else {
                return false;
            }
        }

    }