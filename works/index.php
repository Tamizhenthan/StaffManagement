<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet">
</head>
<body>
  <section class="vh-1000 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form method="post">
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Staff Management</h2>
                <p class="text-white-50 mb-5">Please enter the details</p>
                
                <div class="form-outline form-white mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" required/>
                  <label class="form-label" for="typeEmailX">Name</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="text"  name="role" class="form-control form-control-lg" required/>
                  <label class="form-label" for="typePasswordX">Role</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="text" name="quali" class="form-control form-control-lg" required/>
                  <label class="form-label" for="typePasswordX">Qualification</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="number"  name="age"class="form-control form-control-lg" required/>
                  <label class="form-label" for="typePasswordX">Age</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="text"  name="mobile" class="form-control form-control-lg" required/>
                  <label class="form-label" for="typePasswordX">Mobile Number</label>
                </div>
  
                <button  name="sign_btn" class="btn btn-outline-light btn-lg px-5" type="submit">Save</button>

                <br>
                <br>
                <a href="display.php">Show</a>
              
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "staff");

if(isset($_POST['sign_btn'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $quali = $_POST['quali'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];

    $select = mysqli_query($conn, "SELECT * FROM staff1 WHERE mobile = '$mobile' ") or die('query failed');
    if(mysqli_num_rows($select) > 0){
        echo "<script>alert('User already exists')</script>";
    }
    else {
        $query = "INSERT INTO staff1 (name, role, quali, age, mobile) VALUES ('$name', '$role', '$quali', '$age', '$mobile')";
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if ($run) 
        {
            header('Location: display.php');
            exit();
        }  
    }
  }
?>
