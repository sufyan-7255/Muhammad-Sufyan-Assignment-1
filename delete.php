<?php
include("connection.php");


$deletequery = "delete from Employee_tbl where Id= '".$_GET['sid']."'";
$deletequeryconnect = mysqli_query($con,$deletequery);
if($deletequeryconnect)
{
    header("Location:crud-operations.php");
}
else
{
    echo "<script>alert('Deleted')</script>";
}

?>