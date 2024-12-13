<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM wishlist WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);
?>
<h1>Your Wishlist</h1>
<div class="wishlist">
   <?php while ($item = mysqli_fetch_assoc($result)) { ?>
      <div class="item">
         <p>Location: <?php echo $item['location_name']; ?></p>
         <p>Price: ₹<?php echo $item['price']; ?></p>
      </div>
   <?php } ?>
</div>
