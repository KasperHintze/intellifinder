<?php
include('incl_db.php');

session_start(); 

$password = $_POST['password'];

$crud = new Crud($objCon, "dash_login");
                
$crud->SetArray("*");

$cruds = $crud->Select("WHERE password = '$password'");

$res = $crud->SendSQL();

$obj = $res->fetch_object();

if(mysqli_num_rows($res) > 0){

    if($email == $obj->email && $password == $obj->password) 
    {

        $_SESSION['permission'] = 1;

        echo "success";

    }
    
    }//Num rows
    else {
       echo "failed"; 
    }

?>