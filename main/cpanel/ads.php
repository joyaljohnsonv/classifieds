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
                        <h1 class="mt-4">ads</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">ads</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        DataTable Example
                                    </div>
                                    <div class="card-body">
                                       
<?php
  $id='';
 if (isset($_GET['id']) && $_GET['id'] != '') {
     $id='WHERE user_id= "'.$_GET['id'].'"';
 }
$sql = 'SELECT * FROM ads '.$id.'';
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
        <th>id</th>
        <th>user name</th>
        <th>ad name</th>
        <th>type</th>
        <th>cost</th>
        <th>capacity</th>
        <th>image</th
    </tr>
    ';
  
    
    while ($row= mysqli_fetch_assoc($res)){

        $sql1 = 'SELECT * FROM users WHERE id="'.$row['user_id'].'"';
        $res1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_assoc($res1); 

        $names = $row1['name'].''.$row1['surname'];
    echo'
    <tr>
      <td>'.$row['id'].'</td>
      <td>'.$names.'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['type'].'</td>
      <td>'.$row['cost'].'</td>
      <td>'.$row['capacity'].'</td>
    
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







               <?php
include 'footer.php';
               ?>