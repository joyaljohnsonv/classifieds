<?php
include '../includes/connect.php';
if ($_SESSION['id'] == '') {
    header('location: ../login.php');
}

?>

<?php
include 'header.php'
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">View users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sview users</li>
                        </ol>
                        <?php
$sql = 'SELECT * FROM users';
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
    echo '
    <style>
    table, th, td {
        border: 1px solid black;
      3
    
    </style>
    <table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Ads</th>
        <th>View Ads</th>
    </tr>
    ';
    while ($row= mysqli_fetch_assoc($res)){

        $sql1 = 'SELECT * FROM ads WHERE user_id="'.$row['id'].'"';
        $res1 = mysqli_query($con, $sql1);
        $num = mysqli_num_rows($res1); 

     
    echo'
    <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['surname'].'</td>
      <td>'.$row['email'].'</td>
      <td>User has posted a total of '.$num.' ads</td>
      <td><a href="ads.php?id='.$row['id'].'" class="btn btn-primary"><span class="fa fa-eye"></span>View ads</a></td>
    </tr>
    <tr>

    ';
}
echo '
</tr>
</table>
';
}else{

}
?>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
               <?php
include 'footer.php'
               ?>
