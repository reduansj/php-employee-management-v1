<?php
//Check the request mmethod
if ($_SERVER['REQUEST_METHOD']==='POST') {
if(isset($_POST['username']) && isset($_POST['password'])){
        
    $username= $_POST['username'];
        $password=$_POST['password'];
       if ($username=="" || $password==""){
           session_start();
            $_SESSION["loginError"] =  "Fill up the form";
              header("Location: ../../index.php");
   } else{
       require_once("./loginManager.php");
       login($_POST);
}}
}
if ($_SERVER['REQUEST_METHOD']==='GET') {
    if (isset($_REQUEST["logout"])) {
    require_once("./loginManager.php");
    logout();
    }

}







