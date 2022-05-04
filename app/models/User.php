<?php
    class User{
        private $db;
        public function __construct(){
            $this->db=new Database();
        }

        public function findUserByEmail($email){
            $this->db->query('select count(*) from user where email =:email');
            $this->db->bind(':email',$email);
            return json_decode(json_encode($this->db->single()), true)['count(*)']>0;
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
            if(!$row)return false;
            $hashedPassword=$row->password;
            if(password_verify($password,$hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }

        public function updatePassword($data){
            var_dump($data);
            $this->db->query('update user set password = :newpassword where user_id = :user_id and password = :password');
            $this->db->bind(':newpassword',password_hash($data['newpassword'],PASSWORD_DEFAULT));
            $this->db->bind(':user_id',$data['user_id']);
            $this->db->bind(':password',$_SESSION['password']);
            if ($this->db->execute()) {
                return true;
            }
            else {
                return false;
            }
        }
        
        public function findAllClients(){
            $this->db->query("select * from user where role = 'client'");
            $results = $this->db->resultSet();
            return $results;
        }
        public function findClientById($id) {
            $this->db->query('SELECT * FROM user WHERE user_id = :id');
    
            $this->db->bind(':id', $id);
    
            $row = $this->db->single();
    
            return $row;
        }
        public function deleteClient($id) {
            $this->db->query('DELETE FROM user WHERE user_id = :id');
    
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
        
        public function add_client($data){
            $this->db->query('insert into user (user_fname,user_lname,country,city,email,address,zipcode,phone_number,age,sexe,role) values (:user_fname,:user_lname,:country,:city,:email,:address,:zipcode,:phone_number,:age,:sexe,:role)');
            $this->db->bind(':user_fname',$data['fname']);
            $this->db->bind(':user_lname',$data['lname']);
            $this->db->bind(':country',$data['country']);
            $this->db->bind(':city',$data['city']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':address',$data['address']);
            $this->db->bind(':zipcode',$data['zipcode']);
            $this->db->bind(':phone_number',$data['phone_number']);
            $this->db->bind(':age',$data['age']);
            $this->db->bind(':sexe',$data['gender']);
            $this->db->bind(':role',$data['role']);
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }
        public function findUserIdByEmail($email){
            $this->db->query('select user_id from user where email =:email');
            $this->db->bind(':email',$email);
            return json_decode(json_encode($this->db->single()), true)['user_id'];
        }


        public function getLastUserId(){
            $this->db->query('select LAST_INSERT_ID()');
            return json_decode(json_encode($this->db->single()), true)['LAST_INSERT_ID()'];
        }



    }