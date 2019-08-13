<?php
    function connect(){
        $db_host = "localhost";
        $db_username = "root";
        $db_pass = "";
        $db_name = "online_clearance_system";
        return new Mysqli($db_host,$db_username,$db_pass,$db_name);
    }
?>