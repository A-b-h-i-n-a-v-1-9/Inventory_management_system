<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    
    $sql = "INSERT INTO products (name, description, price, quantity, category) 
            VALUES ('$name', '$description', $price, $quantity, '$category')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">Product added successfully!</div>';
    } else {
        echo '<div class="alert alert-danger">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }
}
?>

<h1 class="mb-4">Add New Product</h1>

<div class="card shadow">
    <div class="card-body">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>