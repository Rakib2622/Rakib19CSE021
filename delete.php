<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `product` where id=$id";
        $r = mysqli_query($conn,$sql);
        if($r){
            header('location:index.php');
        }
    }
?>
