<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];

//send email
    mail("zach.m.wiltgen@gmail.com", "ajax test" .$email, $message);
}
?>