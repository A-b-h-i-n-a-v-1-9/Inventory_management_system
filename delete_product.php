<?php include 'includes/db.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM products WHERE id=$id";
    
    if ($conn->query($sql)) {
        header("Location: index.php?delete=success");
    } else {
        header("Location: index.php?delete=error");
    }
}

$conn->close();
?>