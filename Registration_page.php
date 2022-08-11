
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Registration Page</title>
  </head>
  <body class="container p-3 mb-2  text-white">
  
  <div class="container text-center bg-dark" style="width:60%; margin-top: 2%; padding: 23px;box-shadow: 5px 10px #888888; border-radius: 25px;
  border: 2px solid #73AD21;" >
  
  <h1>Registration Page</h1> <br>
  
  <form class="row g-3">
  <div class="col-md-6">
    <label for="inputname4" class="form-label"  > First Name</label>
    <input type="name" class="form-control" placeholder="First Name" id="inputfname">
  </div>
  <div class="col-md-6">
    <label for="inputname4" class="form-label" >Last Name</label>
    <input type="name" class="form-control" placeholder="Last Name"  id="inputlname">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label"  >Email</label>
    <input type="email" class="form-control" placeholder="Email" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" >Password</label>
    <input type="password" class="form-control" placeholder="Password"  id="inputPassword4">
  </div>
  
  <div class="input-group mb-9">
      <span class="input-group-text ">
            &nbspGender&nbsp</span>
          &nbsp
          &nbsp
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="MALE" checked>
              <label class="form-check-label" for="exampleRadios1">
              <span class="input-group-text bg-primary text-white">
              <i class="bi bi-gender-male"></i></span> &nbsp
                  
                  Male
              </label>
              </div> &nbsp
              &nbsp &nbsp &nbsp
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="FEMALE">
                  <label class="form-check-label" for="exampleRadios2">
                  <span class="input-group-text bg-primary text-white">
                  <i class="bi bi-gender-female"></i></span>
                      Female
                  </label>
              </div>
              &nbsp
              &nbsp &nbsp &nbsp
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="OTHERS">
                  <label class="form-check-label" for="exampleRadios2">
                  <span class="input-group-text bg-primary text-white">
                  <i class="bi bi-gender-trans"></i></span> &nbsp
                      Other
                  </label>
              </div>
      </div>
  
    <div class="col-md-6">
    <label for="inputState" class="form-label">Courses</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>MCA</option>
      <option>MBA</option>
      <option>M.TECH</option>
      <option>BCA</option>
      <option>M.TECH</option>
      <option>BBA</option>
    </select>

  </div>
     <div class="col-md-6">
    <label for="inputState" class="form-label">Department</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>UIC</option>
      <option>UIE</option>
      <option>UIM</option>
    </select>
</div>
  <br>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Address">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" placeholder="City" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Bihar</option>
      <option>Punjab</option>
      <option>Banglore</option>
      <option>Hyderabad</option>
      <option>goa</option>
      <option>jharkhand</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Pin Code</label>
    <input type="text" class="form-control" placeholder="Pin Code" id="inputZip">
  </div>
  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign In</button>
    
    <button type="reset" class="btn btn-danger" >Cancel</button>
  </div>
</form>
  
  </div>
  
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!-- <?php
            $a = 20;
            $b =30.6;
            echo "a = <br>".$a;
            echo "b =".$b; 

        ?> -->