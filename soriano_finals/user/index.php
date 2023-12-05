<?php 
include_once '../process/user_select_exe.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORIANO</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>
<section id="header">
    <div class="container-fluid">

        <div class="row p-5">
            
        <span class="display-4">ICT 600</span>
            </div>
            <div class="col-12 col-lg 4">

            </div>
            <div class="col-12 col-lg 4">

            </div>
        </div>
    </div>
    </section>
    <section id="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">STUDENT RECORDS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
        <li class="nav-item active"> 
      <a class="nav-link active" href="../index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item"> 
      <a class="nav-link" href="index.php">Users</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Students</a>
      </li>
      <li class="nav-item">
      <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    </div>
</nav>
    </section>


    
    <section id="content">
    <div class="container-fluid">
        <div class="container P-5">

        <div>
            <br>
            <h1> User list</h1>
            <a class='btn btn-primary' href="add.php">Add</a>
        
        </div>
      
        <div>
            <table class="table">
                <thead>
            <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Username</th>
                        <th>Contacts</th>
                        <th>Option</th>
            </tr>
                </thead>

                <tbody>
                    <?php
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                        
                    ?>
                    <tr>
                       <td>
                            <?php echo $row['lname']; ?>
                       </td> 
                            
                       <td>
                            <?php echo $row['fname']; ?>
                       </td> 
                            
                       <td>
                            <?php echo $row['username']; ?>
                       </td> 
                             
                       <td>
                             <?php echo $row['contact']; ?>
                       </td> 

                       <td>
                            Edit | Delete
                       </td> 
                    </tr>
                    <?php
                        }
                    }
                    else{
                        echo 'NO DATA TO SHOW';
                    }
                    ?>

                </tbody>
                <table>
        </div>
    </div>
    </section>

        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>