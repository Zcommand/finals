<?php
session_start();
include_once '../config/database.php';

$errlname         = "";
$errfname         = "";
$erruser_lvl      = "";
$errcontact       = "";
$errusername      = "";

if  ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lname      = $_POST['lname'];   
    if(empty($lname)) {
        $errlname = "Last Name cannot be blank!";
    }

    $fname      = $_POST['fname'];
    if(empty($fname)) {
        $errfname = "First Name cannot be blank!";
    } 

    $mname      = $_POST['mname'];    

    $user_lvl       = $_POST['user_lvl'];  
    if(empty($user_lvl)) {
        $erruser_lvl = "User Level cannot be blank!";
    }

    $contact        = $_POST['contact']; 
    if(empty($contact)) {
        $errcontact = "Contact cannot be blank!";
    } 

    $username       = $_POST['username']; 
    if(empty($username)) {
        $errusername = "Username cannot be blank!";
    } 

    $pword = md5("abc123@#");
    $date_created = date('Y-m-d');


    if ($errfname  == "" and $errfname == "" and $erruser_lvl == "" and $errcontact  == "" and $errusername == "") { 
        unset($_SESSION['err']);
    } else {
    $_SESSION['err'] = array (
    'errlname'     => $errlname,
    'errfname'     => $errfname,
    'erruser_lvl'  => $erruser_lvl,
    'errcontact'  => $errcontact,
    'errusername'  => $errusername
    );
}

if (!isset($_SESSION['err'])) {

    $query = "INSERT INTO users (lname,
                             fname,
                             mname,
                             user_lvl,
                             contact,
                             username,
                             pword,
                             date_created) 
            VALUES('$lname',
                    '$fname',
                    '$mname',
                    '$user_lvl',
                    '$contact',
                    '$username',
                    '$pword',
                    '$date_created')";

    if (mysqli_query($conn, $query)) {
        header('location: ../user/index.php');
    } else {
        echo "Error:" . $query . "" . mysqli_error($conn);
    }
        mysqli_close($conn);
    } else {
        header('location: ../user/add.php');
    }
}