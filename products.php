<?php 
require_once 'includes/config.php';
$page_title = "Products";
$page_description = "Browse our wide range of premium quality products";
require_once 'includes/header.php';
require_once 'includes/navbar.php';

// Sample products (static data - no database)
$products = [
    [
        'id' => 1,
        'name' => 'Everything is Supplied Daily',
        'category' => 'Daily Essentials',
        'price' => 'Market Price',
        'unit' => 'On Order',
        'image' => 'vegetables-1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Seasonal & Regular Fruits',
        'category' => 'Fresh Fruits',
        'price' => 'Market Price',
        'unit' => 'kg',
        'image' => 'harvest_basket.png'
    ],
    [
        'id' => 3,
        'name' => 'Milk & Dairy Products',
        'category' => 'Dairy',
        'price' => 'MRP',
        'unit' => 'pack',
        'image' => 'milk_dairy.png'
    ],
    [
        'id' => 4,
        'name' => 'Packaged Drinking Water / Soft Drinks',
        'category' => 'Beverages',
        'price' => 'MRP',
        'unit' => 'bottle',
        'image' => 'beverages.png'
    ],
    [
        'id' => 5,
        'name' => 'Daily Essential Food & Grocery Items',
        'category' => 'Groceries',
        'price' => 'Best Price',
        'unit' => 'pack',
        'image' => 'dry_groceries.png'
    ],
    [
        'id' => 6,
        'name' => 'Bulk & Contract-Based Supply',
        'category' => 'B2B Service',
        'price' => 'Wholesale',
        'unit' => 'Bulk',
        'image' => 'bulk_supply.png'
    ],
    [
        'id' => 7,
        'name' => 'Dry Groceries & Dry Fruits / Cleaning Supplies',
        'category' => 'Mixed Utilities',
        'price' => 'Best Price',
        'unit' => 'pack',
        'image' => 'dry_groceries.png'
    ]
];
?>

<!-- Page Header -->
<section class="section-banner position-relative py-5 text-center text-white overflow-hidden" style="min-height: 400px;">
    <div class="banner-bg-animation" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('assets/images/istockphoto-1457889029-2048x2048.jpg') center/cover no-repeat; z-index: 0;"></div>
    <div class="overlay" style="background: rgba(0,0,0,0.6); position: absolute; inset: 0; z-index: 1;"></div>
    <div class="container position-relative py-5" style="z-index: 2;">
        <h1 class="display-3 fw-bold mb-3 text-white" data-aos="zoom-in" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Our Products</h1>
        <p class="lead mb-0 fs-4 text-white" data-aos="zoom-in" data-aos-delay="100" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Discover our premium range of quality products</p>
    </div>
</section>

<style>
@keyframes bannerZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.15); }
}
.banner-bg-animation {
    animation: bannerZoom 10s infinite alternate cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<!-- Products Section -->
<section class="section bg-white">
    <div class="container">
        <?php if (count($products) > 0): ?>
            <div class="row g-4">
                <?php foreach ($products as $index => $product): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="card-modern product-card">
                            <div class="product-image">
                                <img src="<?php echo BASE_URL . 'assets/images/' . $product['image']; ?>" 
                                     alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                     class="img-fluid rounded-3"
                                     onerror="this.src=' assets/images/logo.jpeg'">
                            </div>
                            <div class="product-info mt-3">
                                <span class="badge bg-primary mb-2"><?php echo htmlspecialchars($product['category']); ?></span>
                                <h3 class="h5"><?php echo htmlspecialchars($product['name']); ?></h3>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        <?php if (is_numeric($product['price'])): ?>
                                            <span class="fs-5 fw-bold text-primary">₹<?php echo number_format($product['price'], 2); ?></span>
                                        <?php else: ?>
                                            <span class="fs-5 fw-bold text-primary"><?php echo htmlspecialchars($product['price']); ?></span>
                                        <?php endif; ?>
                                        <span class="text-muted">/ <?php echo htmlspecialchars($product['unit']); ?></span>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 mt-3">
                                    <i class="fas fa-shopping-cart me-2"></i> Enquire Now
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <i class="fas fa-box-open fa-5x text-muted mb-4"></i>
                <h3>No Products Available</h3>
                <p class="text-muted">Products will be available soon. Stay tuned!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<style>
.product-card {
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-10px);
}

.product-image {
    position: relative;
    overflow: hidden;
    border-radius: var(--radius-md);
    height: 250px;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}
</style>

<?php require_once 'includes/footer.php'; ?>
