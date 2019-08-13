<?php
    class Request{
        private $id;
        private $stdId;
        private $type;
        private $last;
        private $reason;
        private $date;
        public function __construct($id,$stdId,$type,$last,$reason,$date){
            $this->id = $id;
            $this->stdId = $stdId;
            $this->type = $type;
            $this->last = $last;
            $this->reason = $reason;
            $this->date = $date;
        }

        public function getId(){
            return $this->id;
        }
        public function getStdId(){
            return $this->stdId;
        }
        public function getType(){
            return $this->type;
        }
        public function getLast(){
            return $this->last;
        }
        public function getReason(){
            return $this->reason;
        }
        public function getDate(){
            return $this->date;
        }
    }
?>