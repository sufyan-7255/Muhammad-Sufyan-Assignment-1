<?php
include("connection.php");

if(isset($_POST["submitbtn"]))
{
    // echo "clicked";
    // echo "<script>alert('clicked')</script>";
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $phone = $_POST["Phone"];
    $position = $_POST["position"];
    $age = $_POST["Age"];
    $city = $_POST["City"];
    $country = $_POST["Country"];
    $insertquery = "insert into employee_tbl(Name,Email,Password, Phone, position, Age, City, Country) 
    values('".$name."','".$email."','".$password."', '".$phone."', '".$position."', '".$age."', '".$city."', '".$country."')";
    
    $insertqueryconnect = mysqli_query($con,$insertquery);
    // if($insertqueryconnect)
    // {
    //     echo "Inserted";
    // }
    // else
    // {
    //     echo "not inserted";
    // }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Crud Operations on Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <style>
      *
      {
        margin:0;
        padding:0;
        box-sizing:border-box;
        
      }
      body{
        background-color: rgba(0,0,0,0.05);
      }
    </style>
    

    <br>
    <div class="container" >
    <form method="POST">
      <div class="container">
    <h2>Employeer's Profile / Records</h2>
    <br>
  <div class="row">

    <div class="col-6">
    <input type="text" name="Name" placeholder="Enter name" class="form-control" required>
    </div>

    <div class="col-6">
    <input type="email" name="Email" placeholder="Enter email" class="form-control" required >
    </div>

    <br><br><br>

    <div class="col-6">
    <input type="password" name="Password" placeholder="Enter password" class="form-control" required>
    </div>

    <div class="col-6">
    <input type="tel" name="Phone" placeholder="Enter Phone no." class="form-control" required>
    </div>

    <br><br><br>

    <div class="col-6">
    <input type="position" name="position" placeholder="Enter position" class="form-control" required>
    </div>

    <div class="col-6">
    <input type="age" name="Age" placeholder="Enter age" class="form-control" required>
    </div>

    <br><br><br>

    <div class="col-6">
    <input type="text" name="City" placeholder="Enter City" class="form-control" required>
    </div>

    <div class="col-6">
    <input type="text" name="Country" placeholder="Enter Country" class="form-control" required>
    </div>

<br><br><br>
<div class="col-12 text-center ">
<button type="submit" name="submitbtn" class="btn btn-success">Create Profile</button>
    </div>
   
  </div>
  </div>
</form>
          <br>
          
          <hr>
          
          <table class="table table-hover table-bordered table-stipend">

          <tr>
            <th style="background-color: #ababab;">ID</th>
            <th style="background-color: #ababab;">NAME</th>
            <th style="background-color: #ababab;">EMAIL</th>
            <th style="background-color: #ababab;">PASSWORD</th>
            <th style="background-color: #ababab;">PHONE NO.</th>
            <th style="background-color: #ababab;">POSITION</th>
            <th style="background-color: #ababab;">AGE</th>
            <th style="background-color: #ababab;">CITY</th>
            <th style="background-color: #ababab;">COUNTRY</th>
            <th style="background-color: #ababab;">ACTIONS</th>
          </tr>


    </div>    
          <?php

            $selectquery = "select * from employee_tbl";
            $selectqueryconnect = mysqli_query($con,$selectquery);
            while($r = mysqli_fetch_array($selectqueryconnect))
            {
              ?>

              <tr>
                <td><?php echo $r["Id"]?></td>
                <td><?php echo $r["Name"]?></td>
                <td><?php echo $r["Email"]?></td>
                <td><?php echo $r["Password"]?></td>
                <td><?php echo $r["Phone"]?></td>
                <td><?php echo $r["position"]?></td>
                <td><?php echo $r["Age"]?></td>
                <td><?php echo $r["City"]?></td>
                <td><?php echo $r["Country"]?></td>

                <td><a href="update.php?sid=<?php echo $r["Id"]?>" class="btn btn-info">Edit</a> &nbsp; 
                <a href="delete.php?sid=<?php echo $r["Id"]?>" class="btn btn-danger">Delete</a>
              </td>
                <!-- <td></td> -->
              </tr>

              <?php
            }
          ?>
          
          </table>
          
          
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

