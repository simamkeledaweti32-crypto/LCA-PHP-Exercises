<?php include "configure.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$row = $result->fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $stmt = $conn->prepare("UPDATE employees SET name=?, email=?, department=? WHERE id=?");
  $stmt->bind_param("sssi", $_POST['name'], $_POST['email'], $_POST['department'], $id);
  $stmt->execute();
  header("Location: index.php");
  exit();
}
?>
<h2>Edit Employee</h2>
<form method="POST">
  Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
  Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
  Department: <input type="text" name="department" value="<?php echo $row['department']; ?>" required><br><br>
  <button type="submit">Update</button> <a href="index.php">Cancel</a>
</form>
