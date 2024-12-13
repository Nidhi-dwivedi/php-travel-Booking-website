<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM trips WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);
?>
<h1>Your Trip History</h1>
<div class="trips">
   <?php while ($trip = mysqli_fetch_assoc($result)) { ?>
      <div class="trip">
         <p>Destination: <?php echo $trip['destination']; ?></p>
         <p>Date: <?php echo $trip['date']; ?></p>
         <p>Price: ₹<?php echo $trip['price']; ?></p>
      </div>
   <?php } ?>
</div>
