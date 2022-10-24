<?php

include("connection.php");


?>

<!doctype html>
<html lang="en">
  <head>

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
    
    <title>Edit | Update Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <br><br>
      <div class="container">
          <div class="row">
              <div class="col-md-4 offset-md-4">


              <?php
              $selectquery = "select * from employee_tbl where Id = '".$_GET['sid']."'";
              $selectqueryconnect =  mysqli_query($con,$selectquery);
              while($r = mysqli_fetch_array($selectqueryconnect))
              {
                  ?>

                        
              <form method="POST">
                <input type="text" name="Name" value="<?php echo $r["Name"]?>" class="form-control" required>
                <br>
                <input type="email" name="Email" value="<?php echo $r["Email"]?>" class="form-control" required >
                <br>
                <input type="password" name="Password" value="<?php echo $r["Password"]?>"  class="form-control" required>

                <br>
                <input type="tel" name="Phone" value="<?php echo $r["Phone"]?>" class="form-control" required>
                <br>
                <input type="tel" name="position" value="<?php echo $r["position"]?>" class="form-control" required>
                <br>
                <input type="tel" name="Age" value="<?php echo $r["Age"]?>" class="form-control" required>
                <br>
                <input type="text" name="City" value="<?php echo $r["City"]?>" class="form-control" required>
                <br>
                <input type="text" name="Country" value="<?php echo $r["Country"]?>" class="form-control" required>
                
                
                <br><br>
                <button type="submit" name="updatebtn" class="btn btn-success">Update</button>
              </form>

                <?php
              }
              ?>
              
              

              </div>
          </div>

          <br><br>

          
                    
          
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

if(isset($_POST["updatebtn"]))
{
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Phone = $_POST["Phone"];
    $position = $_POST["position"];
    $Age = $_POST["Age"];
    $City = $_POST["City"];
    $Country = $_POST["Country"];
    $updatequery = "update employee_tbl set Name = '".$Name."', Email = '".$Email."', Password = '".$Password."', Phone = '".$Phone."', position = '".$position."', Age = '".$Age."', City = '".$City."' , Country = '".$Country."' where Id = '".$_GET['sid']."'";

    $updatequeryconnect = mysqli_query($con,$updatequery);
    if($updatequeryconnect)
    {
        header('Location:crud-operations.php');
    }
    else
    {
        echo "not updated";
    }
}

?>

