<?php

$con=mysqli_connect('localhost','root','','project_1');
if(!$con){
    echo "connection error".mysqli_error($con);

}

?>