SQL:
CREATE DATABASE employee_db;
USE employee_db;
CREATE TABLE employees (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100),
 department VARCHAR(50)
);
Index.php
<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
$result = $conn->query("SELECT * FROM employees");
?>
<style>
 body { font-family: Arial; padding: 20px; }
 table { border-collapse: collapse; width: 100%; }
 th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
 a { text-decoration: none; color: blue; }
 form input { padding: 5px; width: 200px; }
 button { padding: 5px 10px; }
</style>
<h2>Employee List</h2>
<a href="add.php">Add Employee</a>
<table border="1" cellpadding="8">
 <tr>
 <th>ID</th><th>Name</th><th>Email</th><th>Department</th><th>Actions</th>
 </tr>
 <?php while($row = $result->fetch_assoc()): ?>
 <tr>
 <td><?= $row['id'] ?></td>
 <td><?= $row['name'] ?></td>
 <td><?= $row['email'] ?></td>
 <td><?= $row['department'] ?></td>
 <td>
 <a href="view.php?id=<?= $row['id'] ?>">View</a> |
 <a href="delete.php?id=<?= $row['id'] ?>" onclick="return
confirm('Delete?')">Delete</a>
 </td>
 </tr>
 <?php endwhile; ?>
</table>
Add.php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $conn = new mysqli("localhost", "root", "", "employee_db");
 $stmt = $conn->prepare("INSERT INTO employees (name, email, department) VALUES
(?, ?, ?)");
 $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['department']);
 $stmt->execute();
 header("Location: index.php");
}
?>
<style>
 body { font-family: Arial; padding: 20px; }
 table { border-collapse: collapse; width: 100%; }
 th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
 a { text-decoration: none; color: blue; }
 form input { padding: 5px; width: 200px; }
 button { padding: 5px 10px; }
</style>
<h2>Add Employee</h2>
<form method="post">
 Name: <input type="text" name="name" required><br><br>
 Email: <input type="email" name="email" required><br><br>
 Department: <input type="text" name="department" required><br><br>
 <button type="submit">Add</button>
</form>
View.php
<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$row = $result->fetch_assoc();
?>
<style>
 body { font-family: Arial; padding: 20px; }
 table { border-collapse: collapse; width: 100%; }
 th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
 a { text-decoration: none; color: blue; }
 form input { padding: 5px; width: 200px; }
 button { padding: 5px 10px; }
</style>
<h2>Employee Details</h2>
<p><strong>Name:</strong> <?= $row['name'] ?></p>
<p><strong>Email:</strong> <?= $row['email'] ?></p>
<p><strong>Department:</strong> <?= $row['department'] ?></p>
<a href="index.php">Back</a>
Delete.php
<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
$id = $_GET['id'];
$conn->query("DELETE FROM employees WHERE id=$id");
header("Location: index.php");
?>
<style>
 body { font-family: Arial; padding: 20px; }
 table { border-collapse: collapse; width: 100%; }
 th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
 a { text-decoration: none; color: blue; }
 form input { padding: 5px; width: 200px; }
 button { padding: 5px 10px; }
</style> 
