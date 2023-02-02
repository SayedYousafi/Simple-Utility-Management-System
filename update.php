<?php 
    include 'Connection.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $premises_id = $_POST['premises_id'];
        $electricity = $_POST['electricity'];
        $water = $_POST['water'];
        $remarks = $_POST['remarks'];

        $date = date("Y-m-d h:i:s A");

        $a = new Connection();
        $a->update('readings',
        ['premises_id'=>$premises_id,'electricity'=>$electricity,
        'water'=>$water,'remarks'=>$remarks
        ],"id='$id'");
        if ($a == true) {
            header('location:index.php');
        }
    }
?>>