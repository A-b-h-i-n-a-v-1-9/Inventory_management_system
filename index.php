<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<h1 class="mb-4">Product Inventory</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Current Products</h6>
        <a href="add_product.php" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle"></i> Add New Product
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM products ORDER BY created_at DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['description']}</td>
                                <td>$".number_format($row['price'], 2)."</td>
                                <td>{$row['quantity']}</td>
                                <td>{$row['category']}</td>
                                <td>
                                    <a href='edit_product.php?id={$row['id']}' class='btn btn-sm btn-warning'><i class='bi bi-pencil'></i></a>
                                    <a href='delete_product.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to delete this product?\")'><i class='bi bi-trash'></i></a>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>No products found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>