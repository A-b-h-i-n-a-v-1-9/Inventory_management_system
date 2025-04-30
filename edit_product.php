<?php 
include 'includes/header.php';
include 'includes/db.php';

// Initialize variables
$success_message = '';
$error_message = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        
        // Validate inputs
        if (empty($name) || empty($description) || empty($price) || empty($quantity) || empty($category)) {
            throw new Exception("All fields are required.");
        }
        
        if (!is_numeric($price) || $price <= 0) {
            throw new Exception("Price must be a positive number.");
        }
        
        if (!is_numeric($quantity) || $quantity < 0) {
            throw new Exception("Quantity must be a non-negative number.");
        }

        // Prepare and execute SQL with prepared statement
        $stmt = $conn->prepare("UPDATE products SET 
                name=?, 
                description=?, 
                price=?, 
                quantity=?, 
                category=? 
                WHERE id=?");
        
        $stmt->bind_param("ssddsi", $name, $description, $price, $quantity, $category, $id);
        
        if ($stmt->execute()) {
            $success_message = '<div class="alert alert-success">Product updated successfully!</div>';
        } else {
            throw new Exception("Error updating product: " . $stmt->error);
        }
        
        $stmt->close();
    } catch (Exception $e) {
        $error_message = '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
    }
}

// Get product data
try {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        throw new Exception("Invalid product ID.");
    }
    
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        throw new Exception("Product not found.");
    }
    
    $product = $result->fetch_assoc();
    $stmt->close();
} catch (Exception $e) {
    $error_message = '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
    // Optionally redirect or show empty form
    $product = [
        'id' => '',
        'name' => '',
        'description' => '',
        'price' => '',
        'quantity' => '',
        'category' => ''
    ];
}
?>

<h1 class="mb-4">Edit Product</h1>

<?php 
// Display success or error messages
echo $success_message;
echo $error_message;
?>

<div class="card shadow">
    <div class="card-body">
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" 
                       value="<?php echo htmlspecialchars($product['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>
                    <?php echo htmlspecialchars($product['description']); ?>
                </textarea>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" min="0.01" class="form-control" id="price" name="price" 
                           value="<?php echo htmlspecialchars($product['price']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" min="0" class="form-control" id="quantity" name="quantity" 
                           value="<?php echo htmlspecialchars($product['quantity']); ?>" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" 
                       value="<?php echo htmlspecialchars($product['category']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>