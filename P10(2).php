<?php
session_start();
$conn = new mysqli("localhost", "root", "", "employee_db");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $email = $_POST["email"];
 $password = $_POST["password"];
 $result = $conn->query("SELECT * FROM employees WHERE email = '$email'");
 $user = $result->fetch_assoc();

 if ($user && password_verify($password, $user["password"])) {
 $_SESSION["user_id"] = $user["id"];
 header("LocaƟon: homepage.php");
 exit;
 } else {
 echo "<p style='color: red;'>Invalid email or password.</p>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <Ɵtle>Employee Login</Ɵtle>
</head>
<body>
 <h2>Login</h2>
 <form method="POST" acƟon="">
 <label>Email:</label><br>
 <input type="email" name="email" required><br><br>
 <label>Password:</label><br>
 <input type="password" name="password" required><br><br>
 <buƩon type="submit">Login</buƩon>
 </form>
 <p><a href="passwordchange.php">Change Password</a></p>
</body>
</html> 
