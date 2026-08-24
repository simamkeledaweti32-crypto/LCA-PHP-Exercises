<?php include "configure.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $stmt = $conn->prepare("INSERT INTO employees (name, email, department) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['department']);
  $stmt->execute();
  header("Location: index.php");
  exit();
}
?>
<h2>Add Employee</h2>
<form method="POST">
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  Department: <input type="text" name="department" required><br><br>
  <button type="submit">Save</button> <a href="index.php">Cancel</a>
</form>
