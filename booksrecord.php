<?php
include('connection.php');

session_start();

$adminid=$_SESSION['id'];

if($adminid==null)
{
  header("location:index.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Books Record</title>
    <style>
body{
    background-image: url('https://media.istockphoto.com/photos/books-picture-id949118068?k=20&m=949118068&s=612x612&w=0&h=e8tiaCdluEA9IS_I7ytStcx--toLbovf3U74v-LfNAk=');
    background-repeat: no-repeat;
    background-attachment:fixed ;
    background-size: 100% 100%;
    
  backdrop-filter: blur(2px);

}

/* .table{
    border: 2px;
    border-color: red;
    padding: 12px;
    color: white;
    background-color: #696969;
    
} */
.table{

border-color: grey;

color: white;
background-color: #333;
}
tr:hover{
background-color: #777778;
}
#log{
  font-family: Algerian;
  color:#e3d206;
  /* margin-right: 1 px; */
  font-size: 30px;

}
.navbar-nav{
  font-weight: 550;
  font-size: 19px;
  font-family: Cambria;
}


</style>
  </head>
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <h3 class="navbar-brand" id="log" >E-Library</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="booksrecord.php">Books record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="books.php">Books</a>
        </li>
       
        
      </ul>
      <ul class="navbar-nav navbar-right ">
        <li class="nav-item">
          <a class="nav-link" href="editprofile.php">Edit Profile</a>
        </li>
        <li><a href="logout.php" class="btn btn-info ">
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
       
        
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="container">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-3">

            </div>
            
            <div class="col-lg-5">
              <form method="POST" action=" ">
            <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" name="search" aria-label="Search" aria-describedby="search-addon" required />
  <button class="btn btn-success" type="submit" name="submit">
<i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
</button>
</div>
</form>
        </div>
    </div>
</div>
<br>
<div class="container" >
<table class="table table-hover sortable" style="text-align: center;">
  <thead class="table-dark">
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Rollno</th>
      <th scope="col">Bookid</th>
      <th scope="col">Issuedate</th>
      <th scope="col">Returndate</th>
      <th scope="col">Issuedays</th>
      <th scope="col">Fine</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  if(isset($_POST['submit']))
  {
    $str=$_POST['search'];
   
    $query="select * from issuebook where id like '%$str%' or rollno like '%$str%' or bookid like '%$str%' or issuedate like '%$str%' or returndate like '%$str%' or  issuedays like '%$str%'  ";
   
  
  }
  else
  {
$query="select * from issuebook";
  }

$table=mysqli_query($conn,$query);
$num=mysqli_num_rows($table);
$x=1;
while($res=mysqli_fetch_array($table))
{

    ?>
    <tr>
      <td><?php echo $x; ?></td>
      <td><?php echo $res['rollno']; ?></td>
      <td><?php echo $res['bookid']; ?></td>
      <td><?php echo $res['issuedate']; ?></td>
      <td><?php echo $res['returndate']; ?></td>
      <td><?php echo $res['issuedays']; ?></td>
      <td><?php 
      $x1="Rs.";
      $x2=cal_fine($res['returndate']); 
      $x1.=$x2;
      
      echo $x1; ?></td>
      <td >
      <a href="booksrecorddelete.php?bi=<?php echo $res['bookid'];?>&rn=<?php echo $res['rollno'];?>" class="btn btn-danger" >Return</a>
      </td>
    </tr>
    <?php  $x++; } ?>
  </tbody>
</table>
</div>

</body>

</html>