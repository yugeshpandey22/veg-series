<?php
require_once 'includes/config.php';
$page_title = "Contact Queries";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<div class="container py-5">
    <h2 class="mb-4">Contact Form MySQL Data</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM contact_queries ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . htmlspecialchars($row["name"]) . "</td>
                            <td>" . htmlspecialchars($row["email"]) . "</td>
                            <td>" . htmlspecialchars($row["mobile"]) . "</td>
                            <td>" . htmlspecialchars($row["subject"]) . "</td>
                            <td>" . htmlspecialchars($row["message"]) . "</td>
                            <td>" . $row["created_at"] . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No data found in MySQL database yet.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
