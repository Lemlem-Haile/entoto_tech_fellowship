<?php
    class Office{
        private $id;
        private $officer;
        private $name;
        private $phone;
        private $username;
        private $password;
        private $date;
        private $role;
        public function __construct($id,$officer,$name,$phone,$username,$password,$date,$role){
            $this->id = $id;
             $this->id = $officer;
            $this->name = $name;
            $this->phone = $phone;
            $this->username = $username;
            $this->password = $password;
            $this->date = $date;
            $this->role = $role;
        }

        public function getId(){
            return $this->id;
        }
         public function getOfficer(){
            return $this->officer;
         }
        public function getName(){
            return $this->name;
        }
        public function getPhone(){
            return $this->phone;
        }
       
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getDate(){
            return $this->date;
        }
             public function getRole(){
            return $this->role;
       
        }
    }
?>