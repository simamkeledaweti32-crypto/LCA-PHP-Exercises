<?php include "configure.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Employee Management</title></head>
<body>
<h2>Employee List</h2>
<a href="create.php">+ Add New Employee</a><br><br>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Department</th><th>Actions</th></tr>
<?php
$result = $conn->query("SELECT * FROM employees ORDER BY id DESC");
while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['department']."</td>";
  echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Delete?')\">Delete</a></td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
