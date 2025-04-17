SQL
CREATE TABLE employees (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 email VARCHAR(100) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL
);
Php
<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
if ($conn->connect_error) {
 die("ConnecƟon failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $name = $conn->real_escape_string($_POST["name"]);
 $email = $conn->real_escape_string($_POST["email"]);
 $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $sql = "INSERT INTO employees (name, email, password) VALUES ('$name', '$email', '$password')";
 if ($conn->query($sql)) {
 header("LocaƟon: login.php");
 exit;
 } else {
 echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <Ɵtle>Register Employee</Ɵtle>
</head>
<body>
 <h2>Employee RegistraƟon</h2>
 <form method="POST" acƟon="">
 <label>Name:</label><br>
 <input type="text" name="name" required><br><br>
 <label>Email:</label><br>
 <input type="email" name="email" required><br><br>
 <label>Password:</label><br>
 <input type="password" name="password" required><br><br>
 <buƩon type="submit">Register</buƩon>
 </form>
</body>
</html>
