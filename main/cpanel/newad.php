<?php
include '../includes/connect.php';
if ($_SESSION['id'] == '') {
    header('location: ../login.php');
}

?>




<?php
include 'header.php'
?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $cost = $_POST['cost'];
    $capacity = $_POST['capacity'];
   

    

    if ($name != '' && $type != '' && $cost != '' && $capacity != '') {
        $sql = 'INSERT INTO ads(user_id, name, type, cost, capacity) VALUES ("'.$_SESSION['id'].'", "'.$name.'", "'.$type.'", "'.$cost.'", "'.$capacity.'")';
mysqli_query($con, $sql);
 header('location:ads.php');
    } else {
        echo 'please fill in all feilds!';
    }

}


?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create ad</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">new ads</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div id="container">
                                    <div class="shell">
                                        
                                        <div class="small-nav">
                                            <a href="index.php">Dashboard</a>
                                            <span>&gt;</span>
                                            Add New Vehicles
                                        </div>
                                        
                                        <br />
                                        
                                        <div id="main">
                                            <div class="cl">&nbsp;</div>
                                            
                                            <div id="content">
                                                
                                                <div class="box">
                                                    <div class="box-head">
                                                        <h2>Add New Vehicles</h2>
                                                    </div>
                                                    
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                        
                                                        <div class="form">
                                                                <p>
                                                                    <span class="req">max 100 symbols</span>
                                                                    <label>Vehicle Name <span>(Required Field)</span></label>
                                                                    <input type="text" class="field size1" name="name" required />
                                                                </p>	
                                                                <p>
                                                                    <span class="req">max 20 symbols</span>
                                                                    <label>Vehicle Make <span>(Required Field)</span></label>
                                                                    <input type="text" class="field size1" name="type" required />
                                                                </p>
                                                                <p>
                                                                    <span class="req">max 20 symbols</span>
                                                                    <label>Vehicle Hire Price <span>(Required Field)</span></label>
                                                                    <input type="text" class="field size1" name="cost" required />
                                                                </p>
                                                                <!-- <p>
                                                                    <span class="req">Current Images</span>
                                                                    <label>Vehicle Image <span>(Required Field)</span></label>
                                                                    <input type="file" class="field size1" name="image" required />
                                                                </p> -->
                                                                <p>
                                                                    <span class="req">In Terms of Passenger Seats</span>
                                                                    <label>Vehicle Capacity<span>(Required Field)</span></label>
                                                                    <input type="text" class="field size1" name="capacity" required />
                                                                </p>	
                                                                <p>
                                                                    <span class="req">upload image</span>
                                                                    <label>upload<span>(Required Field)</span></label>
                                                                    <input type="file" class="field size1" name="image" required />
                                                                </p>	
                                                            
                                                        </div>
                                                        
                                                        <div class="buttons">
                                                            <input type="button" class="button" value="preview" />
                                                            <input type="submit" class="button" value="submit" name="submit" />
                                                        </div>
                                                        
                                                    </form>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
               <?php
include 'footer.php'
               ?>
