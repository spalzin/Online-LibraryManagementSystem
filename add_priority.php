<?php 
include('connection.php');
session_start();

$bid = $_GET['bookid'];
if($bid==null){
    header("location:user_books.php");    
}

$sql="select * from issuebook where bookid='$bid' and Designation='Student'";
$table=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($table);
$ct = mysqli_num_rows($table);

// echo $ct;
if($ct==0){
    // header("location:user_books.php");
    echo "<script>alert('Book cannot be Issued.');window.location.href='user_books.php';</script>";
}
else{
    $myDate = date('Y-m-d');
    // $nDays = $_POST['issue_days'];
    // $returndate=date('Y-m-d',strtotime('+'.$nDays.'days'));
    $left_days = strtotime($res['returndate'])-strtotime($myDate);
    $left_days = $left_days/86400;
    // echo $left_days;
    if($left_days>3){
        $left_days = 3;
        $returndate=date('Y-m-d',strtotime('+'.$left_days.'days'));
        // echo $returndate;
        $issuedays = $left_days;
        // echo $issuedays;
        $q="UPDATE `issuebook` SET `returndate`='$returndate' ,`issuedays`='$issuedays' WHERE bookid='$bid'";
        $quant=mysqli_query($conn,$q);
        if ($quant ===TRUE ) {
            echo "<script>alert('Days of the student reduced Successfully');window.location.href='user_books.php';</script>";
      
        } else {
            echo "Error: " . $q . "<br>" . mysqli_error($conn);
        }
    }
    else{
        // header("location:user_books.php");
        echo "<script>alert('Book cannot be Issued.');window.location.href='user_books.php';</script>";
    }
}

?>