<?php 
include('connection.php');

$rn=$_GET['rn'];

$sql1="select * from issuebook where rollno='$rn'";
$res1=mysqli_query($conn,$sql1);
$num=mysqli_num_rows($res1);

if($num>0)
{
  echo "<script>alert('User record cannot be deleted. User must return all issued books');window.location.href='users.php';</script>";
}
else {
$sql="delete from users where rollno=$rn";
$res=mysqli_query($conn,$sql);

$sql2="delete from registered_users where rollno=$rn";
$res2=mysqli_query($conn,$sql2);


if ($res) {
    echo "<script>alert('Deleted successfully');window.location.href='users.php';</script>";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>