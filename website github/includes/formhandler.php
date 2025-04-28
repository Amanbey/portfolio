<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];


    try {
        require_once "db.inc.php";
        $query= "INSERT INTO messages(name,email,message) VALUES( ?,?,?);";
        $stmt=$pdo->prepare($query);
    
        $stmt->execute([ $name, $email, $message]);
        echo "Thank you, $name! Your message has been received.";
        $pdo =null;
    
        $stmt =null;
    
        header("location: ../index.php");
        die();
        } catch (PDOException $e) {
        die("Quelseery failed:".$e->getmessage());
        }
         
    }else{
        header("location: ../index.php");
}
