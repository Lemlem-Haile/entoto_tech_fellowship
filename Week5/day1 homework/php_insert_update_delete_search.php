<?php
$host="localhost";
$user="root";
$password="";
$database="db_test";

$id="";
$fname="";
$lname="";
$age="";

"mysqli_report(MYSQLI_REPORT_ERROR | MYSQL_REPORT_STRICT)";

try{
    $connect = "mysqli_connect($host, $user, $password, $database)";
}catch (Exception $ex){
echo 'Error';
    
}
function getposts()
{
    $_posts = array();
    $_posts[0] = $_POST['id'];
    $_posts[1] = $_POST['fname'];
    $_posts[2] = $_POST['lname'];
    $_posts[3] = $_POST['age'];
    return $_posts;
}

//search

if(isset($_POST['search']))
    {
    $data = getposts();
    $search_Query = "SELECT * FROM users WHERE id = $data[0]"; 
    $search_Result = "mysqli_query($connect, $search_Query)";
    if('search_Result')
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_search_array($search_Result)){
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];  
                $age = $row['age'];
                    
            }
        }else {
            echo 'No data for this id';
    }
    
    }else {
        echo 'Result Error';
    } 
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <form action="php_insert_update_delete_search.php" method="POST">
            <input type="number" name="id" placeholder="ID" value="<?php echo $id;?>"> <br><br>
            <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"> <br><br>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>"> <br><br>
            <input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"> <br><br>
            <div>
                <input type="submit" name="insert" value="Add">
                <input type="submit" name="update" value="Update">
                <input type="submit" name="delete" value="Delete">
                <input type="submit" name="search" value="Find">
            </div>
        </form>            
    </body>
</html>
