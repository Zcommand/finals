<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            text-align: center;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        div {
            margin: 10px;
        }

        select, input {
            width: 100%;
        }
    </style>
</head>

<body>
    <center>
        <h1>User's Information</h1>
    </center>
    <form action="../process/add_exe.php" method="post">
        <div>
            <label for="user_lvl">User Level:*</label>
            <select name="user_lvl" id="user_lvl" required>
                <option value="">Select</option>
                <option value="Admin">Admin</option>
                <option value="IT Admin">IT Admin</option>
                <option value="user">user</option>
            </select>

            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['erruser_lvl'];
            }
            ?>
        </div>

        <div>
            <label for="lname">Last Name:*</label>
            <input type="text" name="lname" id="lname">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['errlname'];
            }
            ?>
        </div>

        <div>
            <label for="fname">First Name:*</label>
            <input type="text" name="fname" id="fname">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['errfname'];
            }
            ?>
        </div>

        <div>
            <label for="mname">Middle Name (Optional):</label>
            <input type="text" name="mname" id="mname">
        </div>

        <div>
            <label for="contact">Mobile Number:</label>
            <input type="text" name="contact" id="contact">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['errcontact'];
            }
            ?>
        </div>

        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['errusername'];
                unset($_SESSION['err']);
            }
            ?>
        </div>

        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
