<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $id]);

    echo "User updated!";
}
?>
<form method="post">
    <input type="text" name="id" placeholder="User ID" required>
    <input type="text" name="name" placeholder="New Name" required>
    <input type="email" name="email" placeholder="New Email" required>
    <button type="submit">Update User</button>
</form>