<?php
include 'includes/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>used cars</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="assets/css/jquery.bsPhotoGallery.css" rel="stylesheet">
    <script src="assets/js/jquery.bsPhotoGallery.js"></script>	
	
    </script>
    <script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-xl-3 col-lg-2 col-md-4 col-sm-4",
          "hasModal" : true,
          "shortText" : false  
        });
      });
    </script>
  </head>
  <style>
      /**************STYLES ONLY FOR DEMO PAGE**************/
      @import url(https://fonts.googleapis.com/css?family=Bree+Serif);
      body {
        background:#ebebeb;
      }   
  </style>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Used Cars</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="cpanel/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                 <button class="btn btn-secondary" style="border-radius: 20px;" ><a style="text-decoration:none; color:black;" href="register.php">register</a></button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                  </li>
                  <li>
        <form action="search.php" method="POST" class="navbar-form pull-right">
            <div class="input-group">
            <input type="text" name="pharse" placeholder="search...." class="form-controll" id="">
        </div>
        <button class="btn btn-primary" type="submit" name=""><i class="fas fa-search"></i></button>

        </form>
    </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
            </div>
          </nav>

        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:30px 0 20px 0; margin-bottom:40px;">
            <div class="col-lg-12">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <a style="text-decoration:none; color:#666;" href="http://michaelsoriano.com/create-a-responsive-photo-gallery-with-bootstrap-framework/">No.1 place for<span style="color:red;">Used Cars</span></a>
            </h3>
            <p>sign in to post your own ads. Click <strong><a style="color:red" href="login.php">Here</a></strong> log-in</p>
            </div>
        </div>
<!-- <div class="col-md-12">
    <button class="btn btn-primary">Register</button>
</div> -->
        <ul class="row first">
<?php
$sql = 'SELECT * FROM ads ORDER BY id DESC';
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  echo '
  <li>
  ';

while ($row = mysqli_fetch_assoc($res)) {
  $sql1 = 'SELECT * FROM users WHERE id="'.$row['user_id'].'"';
  $res1 = mysqli_query($con, $sql1);
  $row1 = mysqli_fetch_assoc($res1); 

  $names = $row1['name'].' '.$row1['surname'];
  echo '
  <div class="card" style="width: 18rem;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$row['name'].'</h5>
    <p class="card-text"'.$row['cost'].'<br><span class="pull-right">Uploaded by: '.$names.'</span></p>
  </div>
</div>
  ';
}



  echo '
  </li>
  ';
} else {
  echo '
  <li>
 
  <p>sorry there are no ads available</p>
</li>
  ';
}






?>

           
           

  </ul>




    </div> <!-- /container -->









  </body>


</html>
