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
                        <h1 class="mt-4">DashBoard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dash Board</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                               
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body"> <!-- When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.--> </div></div>
                    </div>
                </main>
              <?php
include 'footer.php'
              ?>