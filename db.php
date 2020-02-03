<?php
/**
 * Created by PhpStorm.
 * User: sandunprageeth
 * Date: 12/4/2017
 * Time: 3:14 PM
 */
$servername = "localhost";
$username = "root";
$password = "inoc@123";
$dbname = "ims_ino";

    //create connection
    //$con = mysqli_connect("localhost", "root", "", "ims_inoc");

$con = new mysqli($servername, $username, $password, $dbname);
?>
