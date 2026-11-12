<html>
<head> 
<title>Electricity Bill</title> 
</head>
<body>
<center> <h2>Electricity Bill</h2>
<form name="form" action="" method="POST">
    <label for="name">Enter Your Name:</label><br>
    <input type="text" name="name" id="name"><br><br>
    <label for="unit">How Many Units Are Used?</label><br>
    <input type="number" name="unit" id="unit"><br><br>
    <input type="submit" value="Submit">
</form>
</center>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { $name = $_POST["name"]; $units = $_POST["unit"]; $rate1 = 0.50; $rate2 = 1; $rate3 = 1.5; if (empty($name)) { echo "<script>alert('Please enter your name correctly')</script>"; } else if ($units == "") { echo "<script>alert('Units must be required')</script>"; } else if ($units < 0) { echo "<script>alert('Units cannot be negative')</script>"; } else { if ($units <= 100) { $bill = $units * $rate1; } else if ($units <= 300) { $bill = $units * $rate2; } else { $bill = $units * $rate3; } echo "<br><center>"; echo "Name: " . htmlspecialchars($name) . "<br>"; echo "Electricity Bill: Rs. " . $bill; echo "</center>"; } } ?>

</body> 
</html>
