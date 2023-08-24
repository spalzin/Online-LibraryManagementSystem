<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style>
     body{
      background-image: url('https://media.istockphoto.com/photos/books-picture-id949118068?k=20&m=949118068&s=612x612&w=0&h=e8tiaCdluEA9IS_I7ytStcx--toLbovf3U74v-LfNAk=');
    background-repeat: no-repeat;
    background-attachment:fixed ;
    background-position: center center;
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

   </style>
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <div id="ui">
                <h2 class="text-center">User Registraion Form</h1>
                <form class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <Label>First Name:</Label>
                      <input type="text" name="fname" class="form-control" placeholder="Enter your first name">
                    </div>
                    <div class="col-lg-6">
                      <Label>Last Name:</Label>
                      <input type="text" name="lname" class="form-control" placeholder="Enter your last name">
                    </div>
                    
                  </div>
                  <br>
                  <label>E-mail:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter your email here">
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <label>Roll Number</label>
                    <input type="text" class="form-control" name="rollno" placeholder="#rollno">
                  </div>
                  <div class="col-lg-6">
                    <label>Contact Number:</label>
                    <input type="text" name="contactno" class="form-control" placeholder="#contactno"> 
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-4">
                    <label>Date Of Birth:</label>
                    <input type="date" name="dob" class="form-control">
                  </div>
                  <div class="col-lg-4">
                    <label>Age:</label>
                    <input type="number" name="age" class="form-control" placeholder="123">

                  </div>
                  <div class="col-lg-4">
                  <label>Gender:</label>
                    <select class="form-control">
                      <option value="male" selected>Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>
                <br>
                <label>Address:</label>
                <textarea type="text" name="address" class="form-control" placeholder="Enter your Address here" rows="4" cols="50"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

  </body>
</html>