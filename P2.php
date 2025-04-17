\\Form .html file code 
<html> 
<head> 
    <title>Form Submission</title> 
</head> 
<body> 
    <h2>Enter Your Information</h2> 
    <form action="display.php" method="post"> 
        Name: <input type="text" name="name"><br><br> 
        Email: <input type="email" name="email"><br><br> 
        <input type="submit" value="Submit"> 
    </form> 
</body> 
</html> 
\\ display.php file code 
<html> 
<head> 
    <title>Display Information</title> 
</head> 
<body> 
    <h2>Submitted Information</h2> 
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $name = htmlspecialchars($_POST["name"]); 
        $email = htmlspecialchars($_POST["email"]); 
 
        echo "<strong>Name:</strong> " . $name . "<br>";
        echo "<strong>Email:</strong> " . $email . "<br>"; 
    } else { 
        echo "No data submitted."; 
    } 
?> 
</body> 
</html>
