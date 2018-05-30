<?php
    include("db.php");
    $arr=array();
    $sel=mysqli_query($link,"select * from data order by dat DESC limit 0,5");
    while($row=mysqli_fetch_assoc($sel))
    {
        $arr[]=$row;
//        print_r($arr);
    }
    echo json_encode($arr);
?>