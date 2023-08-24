<?php 
include('connection.php');
session_start();
$rn=$_SESSION['rollno'];

if($rn==null){
  header("location:index.php");
  
}

$sql="select * from users where rollno='$rn'";
$table=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($table);

$sql2="select * from registered_users where rollno='$rn'";
$table2=mysqli_query($conn,$sql2);
$res2=mysqli_fetch_array($table2);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Profile</title>

    <style>
body{
    background-image: url('https://media.istockphoto.com/photos/books-picture-id949118068?k=20&m=949118068&s=612x612&w=0&h=e8tiaCdluEA9IS_I7ytStcx--toLbovf3U74v-LfNAk=');
    background-repeat: no-repeat;
    background-attachment:fixed ;
    background-size: 100% 100%;
    
  backdrop-filter: blur(2px);

}
#ui{
    background-color: #333;
    padding: 30px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
    opacity: 0.8;
  }

  #ui label,h2{
    color: #fff;
  }
  #log{
  font-family: Algerian;
  /* font-style: oblique; */
  color:yellow;
  /* margin-right: 1 px; */
  font-size: 30px;

}
.navbar-nav{
  font-family: Cambria;
  font-weight: 550;
  font-size: 19px;
}

form i {
            margin-left: -30px;
            cursor: pointer;
        }
</style>

  </head>

  
  <body>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/cornae@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <h3 class="navbar-brand" id="log" >E-library</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  aria-current="page" href="home_user.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_books.php">Books</a>
        </li>
        
        
      </ul>
      <ul class="navbar-nav navbar-right ">
        <li class="nav-item">
          <a class="nav-link active"  href="user_edit.php">Edit Profile</a>
        </li>
        <li><a href="user_log_out.php" class="btn btn-danger ">
          <span class="glyphicon glyphicon-log-out " id="out" ></span> Logout</a></li>
       
        
      </ul>
    </div>
  </div>
</nav>


<br>



<div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <div id="ui">
                <h2 class="text-center">Edit Profile</h1>
                <form class="form-group" action=" " method="post">
                  <div class="row">

                <div class="col-lg-6">
                <label>First Name:</label>
                  <input type="text" name="firstname" class="form-control" value="<?php echo $res['firstname'] ?>" required>


                </div>

                <div class="col-lg-6">
                <label>Last Name:</label>
                <input type="text" name="lastname" class="form-control"  value="<?php echo $res['lastname'] ?>" required>

                </div>



                </div>

                <br>
                <div class="row">
                <div class="col-lg-6">
                <label>Roll No:</label>
                  <input type="text" name="roll" class="form-control"  value="<?php echo $res['rollno'] ?>" disabled >
                </div>
                <div class="col-lg-6">
                  <label>Designation</label>
                  <input type="text" name="designation" class="form-control"  value="<?php echo $res['Designation'] ?>" disabled >

                </div>
                </div>

                
                  
                

                

                <br>



                <Label>Email:</Label>
                <input type="text" name="email" class="form-control"  value="<?php echo $res['email'] ?>" disabled>
                <br>
                <Label>Password:</Label>

                      
                <input type="password" name="password" class="form-control"  id="password"  value="<?php echo $res2['password'] ?>" required>

                <div  style="position:absolute;right: 475px;" >
                    
                <input type="checkbox"  onclick="f()"> <label style="font-size:small;"> Show Password </label>

                </div>
                      
<!-- 
                    <div class="pwd">
    <input type="text" placeholder="Password *"/>
    <span class="p-viewer">
        <i class="fa fa-eye" aria-hidden="true"></i>
    </span>
</div> -->

   
<br>
                <div class="row" >

                  <div class="col-lg-6">
                    <label>Contact No.</label>
                    <input type="text" class="form-control" name="contactno"  value="<?php echo $res['contactno'] ?>" required>
                  </div>

                  <div class="col-lg-6">
                    <label>DOB:</label>
                    <input type="date" name="dob" class="form-control"  value="<?php echo $res['dob'] ?>" required> 
                  </div>

                </div>

                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <label>Age:</label>
                    <input type="number" name="age" class="form-control"  value="<?php echo $res['age'] ?>" required>
                  </div>
                  <div class="col-lg-6">
                  <label>Gender:</label>
                    <select class="form-control" name="gender"  value="<?php echo $res['gender'] ?>">
                      <option value="Male" selected>Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <br>
                <label>Address:</label>
                <textarea type="text" name="address" class="form-control" rows="4" cols="50" required><?php echo $res['address'] ?></textarea>
                <br>
                <button type="submit" class="btn btn-primary" name="update" >Update</button>
                </form>
              </div>

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <?php 
if(isset($_POST['update']))
{ 
  

    $sql="update users as S,registered_users as R set  R.password='$_POST[password]',S.firstname='$_POST[firstname]',S.lastname='$_POST[lastname]',S.contactno='$_POST[contactno]',S.dob='$_POST[dob]',S.age='$_POST[age]',S.gender='$_POST[gender]',S.address='$_POST[address]' where R.rollno='$rn' and S.rollno='$rn'";


 
   
    
if (mysqli_query($conn,$sql) ===TRUE ) {
  echo "<script>alert('Profile updated successfully');window.location.href='user_edit.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

?>

<script>
        // const togglePassword = document
        //     .querySelector('#togglePassword');
  
        // const password = document.querySelector('#password');
  
        // togglePassword.addEventListener('click', () => {
  
        //     // Toggle the type attribute using
        //     // getAttribure() method
        //     const type = password
        //         .getAttribute('type') === 'password' ?
        //         'text' : 'password';
                  
        //     password.setAttribute('type', type);
  
        //     // Toggle the eye and bi-eye icon
        //     this.classList.toggle('bi-eye');
        // });

        function f(){
          var x=document.getElementById("password");
          if(x.type==="password"){
            x.type="text";
          }
          else {
            x.type="password";
          }
        }



   
    </script>


  </body>
</html>