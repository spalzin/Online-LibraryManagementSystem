<?php


$ademailmsg="";
$adpasswordmsg="";

$adroll_nomsg="";
$apasswordmsg="";

if(!empty($_GET['ademailmsg']))
{
  $ademailmsg=$_GET['ademailmsg'];
}

if(!empty($_GET['adpasswordmsg']))
{
  $adpasswordmsg=$_GET['adpasswordmsg'];
}
if(!empty($_GET['adroll_nomsg']))
{
  $adroll_nomsg=$_GET['adroll_nomsg'];
}
if(!empty($_GET['apasswordmsg']))
{
  $apasswordmsg=$_GET['apasswordmsg'];
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>E-Library</title>
    <style>
  
body{
    background-image: url('https://media.istockphoto.com/photos/books-picture-id949118068?k=20&m=949118068&s=612x612&w=0&h=e8tiaCdluEA9IS_I7ytStcx--toLbovf3U74v-LfNAk=');
    background-repeat: no-repeat;
    background-attachment:fixed ;
    background-size: 100% 100%;
    font-family: Cursive;
  /* backdrop-filter: blur(2px); */

}

.login-container{
    margin-top: 1%;
    margin-bottom: 3%;
    background: rgb(40,40,42);
background: linear-gradient(180deg, rgba(40,40,42,1) 16%, rgba(1,7,21,0.9587185215883228) 60%);
opacity: 0.7;
}
.login-form-1{
    padding: 3%;
   
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    margin-top: 1%;
    margin-bottom: 3%;
    background: rgb(40,40,42);
background: linear-gradient(180deg, rgba(40,40,42,1) 16%, rgba(1,7,21,0.9587185215883228) 60%);
opacity: 0.7;
font-family: Cursive;
}
.login-form-1 h3{
    text-align: center;
    margin-bottom:12%;
    color:#fff;
}
.login-form-2{
    padding: 3%;
  
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    margin-top: 1%;
    margin-bottom: 3%;
    background: rgb(40,40,42);
background: linear-gradient(180deg, rgba(40,40,42,1) 16%, rgba(1,7,21,0.9587185215883228) 60%);
opacity: 0.7;
font-family: Cursive;
}
.login-form-2 h3{
    text-align: center;
    margin-bottom:12%;
    color: #fff;
}
.btnSubmit{
    font-weight: 600;
    width: 50%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:2%;
}
.btnForgetPwd,p{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.btnForgetPwd:hover{
    text-decoration:none;
    color:#fff;
}
h1 {
  font-size: 80px;
  /* background-image: linear-gradient(60deg, #E21143, #FFB03A); */
  padding: 1px; 


 
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

.navbar-nav{
  font-weight: 550;
  font-size: 19px;
  font-family: Cambria;
}


@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}


    </style>
  </head>
  <body>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- <div class="container-fluid">
  <img src="http://uok.ac.rw/lib/images/templatemo_image_01.jpg" class="img-fluid" alt="Responsive image">
</div> -->
<marquee direction="right" style="color: #d6e38c;font-family:'Simplifica';text-decoration:blink;font-size:65px; " class="text-center font-weight glow"  >Welcome to Elibrary</marquee>
<!-- <h2 class="glow " style="font-family: cursive;" >Welcome to Elibrary</h2> -->
<div class="container ">
           <div class="row">
               <div class="col-md-6">
               <div class="row ">
                <div class="col-md-11 login-form-1 login-container">
                <form action="userloginserver.php" method="POST">
                    <h3  >User Login</h3>
                    
                        <div class="form-group">
                            <input type="number"  name="rollno" class="form-control" placeholder="Your ID Number"  />
                            <label style="color: red;"><?php echo $adroll_nomsg; ?></label>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                            <option value="" disabled selected hidden>Designation</option>
                              <option value="Instructor">Instructor</option>
                              <option value="Student">Student</option>
                            </select>
                            <label style="color: red;"><?php echo $apasswordmsg; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password "  />
                            <label style="color: red;"><?php echo $apasswordmsg; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit"  />
                        </div>
                        <div class="form-group">
                            <a href="user_forget_password.php"  style="text-decoration: underline;" class="btnForgetPwd">Forget Password?</a>
                            <br><br>
                            <p>Not a member? <a href="user_register.php" style="color:white;" >Register</a></p>
                            <!-- <a href="#" class="btnForgetPwd">New User?</a> -->
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
    </div>

               </div>
               <div class="col-md-6">
                <div class="row ">
                <div class="col-md-1"></div>
                <div class="col-md-11 login-form-2 login-container" >
                <form action="adminloginserver.php" method="POST">
                    <h3>Admin Login</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email " name="email" />
                            <label style="color: red;"><?php echo $ademailmsg; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password " name="password" />
                            <label style="color: red;"><?php echo $adpasswordmsg; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="login" />
                        </div>
                        <div class="form-group">

                            <a href="admin_email_verify.php" style="text-decoration: underline;" class="btnForgetPwd" value="Login">Forget Password?</a>
                        </div>
                        
                        <br>
                        <br>
                        
                    </form>
                </div>
                
                </div>
                </div>
            </div>
        </div>
       
  </body>
</html>