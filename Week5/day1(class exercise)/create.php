<?php
include_once 'dblogin.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//  include_once 'dblogin.php';
if(isset($_POST['FullName']) and isset($_POST['Age']) and isset($_POST['Phone']) and isset($_POST['Email'])){
    
$FullName=$_POST['FullName'];
$Age=$_POST['Age'];
$Phone=$_POST['Phone'];
$Email=$_POST['Email'];
 
$db=new dblogin();
$result=$db->signup($FullName, $Age, $Phone, $Email);
if($result=='1'){
    echo "successfully inserted";
   }else{
    echo "error";
}
//  echo $FullName;
//  echo $Age;
//  echo $Phone;
//  echo $Email;
}  




