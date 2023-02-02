<?php 
    include 'Connection.php';
    $id = $_POST['id'];
    $a = new Connection();
    $a->delete('readings',"id='$id'");
?>