<?php
session_start();
$conn = new mysqli("localhost", "root", "", "employee_db");
if (!isset($_SESSION["user_id"])) {
 die("Please log in first.");
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["employee_id"])) {
 $employeeId = $_POST["employee_id"];
 $conn->query("DELETE FROM employees WHERE id = $employeeId");
 echo $conn->affected_rows > 0 ? "Employee deleted." : "Error deleƟng employee.";
}
$result = $conn->query("SELECT id, name FROM employees");
?>
<form method="POST">
 <select name="employee_id" required>
 <opƟon value="">Select Employee</opƟon>
 <?php while ($employee = $result->fetch_assoc()) { ?>
 <opƟon value="<?php echo $employee['id']; ?>"><?php echo $employee['name']; ?></opƟon>
 <?php } ?>
 </select><br><br>
 <buƩon type="submit">Delete Employee</buƩon>
</form> 
