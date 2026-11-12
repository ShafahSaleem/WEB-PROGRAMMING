<!DOCTYPE html>

<html> 
<head> 
<title>Registration Form</title> 
<style> 
div { width: 250px; margin: auto; margin-top: 20px; }  
h2 {
        text-align: center;
    }
</style>
</head> <body>
<h2>Registration Form</h2>
<div> 
<form method="POST" action=""> 
<label for="name">Name:</label>
 <input type="text" name="name" id="name"><br><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br><br>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" id="mobile"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" value="Register">
</form>
</div>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { if (empty($_POST["name"])) { echo "<script>alert('Name is required')</script>"; } else if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) { echo "<script>alert('Enter Your Name correctly')</script>"; } else if (empty($_POST["email"])) { echo "<script>alert('Email is required')</script>"; } else if (!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/", $_POST["email"])) { echo "<script>alert('Email is not in correct format')</script>"; } else if (empty($_POST["mobile"])) { echo "<script>alert('Mobile is required')</script>"; } else if (!preg_match("/^[0-9]{10}$/", $_POST["mobile"])) { echo "<script>alert('Mobile number should be 10 digits')</script>"; } else if (empty($_POST["password"])) { echo "<script>alert('Password is required')</script>"; } else if (strlen($_POST["password"]) < 8) { echo "<script>alert('Password must be at least 8 characters')</script>"; } else if (!preg_match("/^[a-zA-Z]+@[0-9]*$/", $_POST["password"])) { echo "<script>alert('Password is not in correct format')</script>"; } else { echo "<h3>Form Submitted Successfully</h3>"; echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST["name"]) . "</p>"; echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>"; echo "<p><strong>Mobile:</strong> " . htmlspecialchars($_POST["mobile"]) . "</p>"; } } ?>

</body> </html>
