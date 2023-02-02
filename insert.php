<?php 
    include 'Connection.php';
    if (isset($_POST['submit'])) {
        $premises_id = $_POST['premises_id'];
        $electricity = $_POST['electricity'];
        $water = $_POST['water'];
        $remarks = $_POST['remarks'];
     

        $date = date("Y-m-d h:i:s A");

        $a = new Connection();
        $a->insert('readings',['premises_id'=>$premises_id,'electricity'=>$electricity,
        'water'=>$water,'remarks'=>$remarks]);
        if ($a == true) {
            header('location:index.php');
        }
    }
?>