<?php
require_once 'database.php';

session_start();
$user_id = $_SESSION['user_id']; // Get logged-in user ID

$stmt = $pdo->prepare("SELECT * FROM ads WHERE user_id = ?");
$stmt->execute([$user_id]);
$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display User's Ads -->
<h2>Your Ads</h2>
<ul>
    <?php foreach ($ads as $ad): ?>
        <li><?php echo $ad['title']; ?> - $<?php echo $ad['price']; ?></li>
    <?php endforeach; ?>
</ul>

