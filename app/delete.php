<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    echo "User deleted!";
}
?>
<form method="post">
    <input type="text" name="id" placeholder="User ID" required>
    <button type="submit">Delete User</button>
</form>