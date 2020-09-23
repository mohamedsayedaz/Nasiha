<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $mob = $_POST['mob'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $message = 'Name : ' . $name . ' | Mobile : ' . $mob . ' | Email : ' . $email . ' | Msg: ' . $msg ;
        mail('mohamedsayedaz18@gmail.com','Nasiha Blog', $message);
    }
?>