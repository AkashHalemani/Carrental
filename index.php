<?php
require ('components/connection.php');
//$customers = $con->query('select count(*) from customers')->fetchColumn();
//$agency = $con->query('select count(*) from agency')->fetchColumn();
//$cars = $con->query('select count(*) from cars')->fetchColumn();
//$con = null;

?>
<?php
session_start();
if(!$_SESSION['loggedin']||$_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php include ('components/header.php');?>
    <h1>Elli baribek inna</h1>
    <!--cards -->
    <div class="container">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0" style="width: 18rem;">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rent car</h5>
                <p class="card-text">Rent a car today!!</p>
                <a href="#" class="btn btn-primary">Explore</a>
            </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3 mb-sm-0" style="width: 18rem;">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Agency Regitration</h5>
                <p class="card-text">To lend cars.</p>
                <a href="#" class="btn btn-primary">Signup</a>
            </div>
            </div>
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0"style="width: 18rem;">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Customer Register</h5>
                <p class="card-text">To buy cars.</p>
                <a href="#" class="btn btn-primary">Signup</a>
            </div>
            </div>
        </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>