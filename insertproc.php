<!-- connect to database -->
<?php
include_once 'class.php';
$name = $_POST['name'];
$email = $_POST['email'];   
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$RoomNum = $_POST['RoomNum'];
$Ext = $_POST['Ext'];
/*
check if pass and confirm pass are the same
*/
if($password != $confirmpassword){
    echo "Password and Confirm Password do not match";
    exit();
}
/*
check if email is valid
*/
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format";
    exit();
}

$db = new Db();
$db->insert ($name,$email,$password,$RoomNum,$Ext);
?>

            


