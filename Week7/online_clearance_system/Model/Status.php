<?php
    class Status{
        private $id;
        private $reqId;
        private $offId;
        private $status;
        private $reason;
        private $date;
        public function __construct($id,$reqId,$offId,$status,$reason,$date){
            $this->id = $id;
            $this->reqId = $reqId;
            $this->offId = $offId;
            $this->status = $status;
            $this->reason = $reason;
            $this->date = $date;
        }

        public function getId(){
            return $this->id;
        }
        public function getReqId(){
            return $this->reqId;
        }
        public function getOffId(){
            return $this->offId;
        }
        public function getStatus(){
            return $this->status;
        }
        public function getReason(){
            return $this->reason;
        }
        public function getDate(){
            return $this->date;
        }
    }
?>