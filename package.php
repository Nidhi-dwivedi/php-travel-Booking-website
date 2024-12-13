<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Packages</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .location-container {
         display: none;
         margin: 20px 0;
         padding: 20px;
         background: #f9f9f9;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .location {
         display: flex;
         justify-content: space-between;
         margin: 10px 0;
         padding: 10px;
         border: 1px solid #ddd;
         border-radius: 5px;
         background: #fff;
      }

      .location img {
         width: 150px;
         height: 100px;
         object-fit: cover;
         border-radius: 5px;
      }

      .location-content {
         flex: 1;
         margin-left: 20px;
      }

      .location-content h4 {
         margin: 0;
         font-size: 1.2rem;
      }

      .location-content p {
         margin: 5px 0;
      }
   </style>
</head>
<body>

<?php @include 'header.php'; ?>

<section class="home-packages">

   <h1 class="heading-title"> Our Packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>India</h3>
            <p>Explore the diverse cultural heritage and iconic destinations.</p>
            <button class="btn toggle-locations" data-target="#locations-india">View Locations</button>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Seychelles</h3>
            <p>Escape to pristine beaches and enjoy a romantic getaway.</p>
            <!-- <a href="book.php" class="btn">Book Now</a> -->
            <button class="btn toggle-locations" data-target="#locations-seychelles">View Locations</button>

         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Iceland</h3>
            <p>Experience the land of fire and ice with endless adventures.</p>
            <!-- <a href="book.php" class="btn">Book Now</a> -->
            <button class="btn toggle-locations" data-target="#locations-iceland">View Locations</button>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan</h3>
            <p>The stunning cherry blossoms, attending fairs & festivals in Tokyo and heavy-off season discounts on flights & hotels in Osaka.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-japan">View Locations</button>

         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>New York</h3>
            <p>Exploring the parks, walking tous, rains in spring, dining & boating in New York, pleasant weather at night & clear blue skies in LA.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-usa">View Locations</button>

         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Australia</h3>
            <p>Hosts some of the best, and most iconic, breaks in the surfing world. Surfing pioneer country.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-australia">View Locations</button>

         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Switzerland</h3>
            <p>Exploring the outdoors & touring the lovely city Lucerne & Zurich, touring vineyards and enjoying the grape harvest season in Interlaken.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-switzerland">View Locations</button>

         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Austria</h3>
            <p>Trips in and around the town of Salzburg will let tourists relive the movie. Tourists can indulge in skiing in Innsbruck and hiking in the innumerable national parks.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-australia">View Locations</button>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Thailand</h3>
            <p>Sightseeing and shopping in Phuket and adventure activities in Pattaya. Rain and pub hopping in Krabi and escaping the crowds & lush green surroundings in Phuket.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-thailand">View Locations</button>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai</h3>
            <p>Pamper yourself with luxury stays, breathtaking views and more in Dubai.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-uae">View Locations</button>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Maldives</h3>
            <p>Relish the lovely Maldives with snorkelling and chasing the sunsets on Meeru Island.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-maldives">View Locations</button>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Norway</h3>
            <p>Indian meals in Scandinavian Region, Norway in a Nut Shell Tour, Overnight Ferry experience.</p>
            <!-- <a href="book.php" class="btn">book now</a> -->
            <button class="btn toggle-locations" data-target="#locations-norway">View Locations</button>
         </div>
      </div>


   </div>

   <!-- India Locations -->
   <div id="locations-india" class="location-container">
      <h2>Famous Locations in India</h2>
      <div class="location">
         <img src="images/taj-mahal.jpg" alt="Taj Mahal">
         <div class="location-content">
            <h4>Taj Mahal, Agra</h4>
            <p>Price: ₹2,500 per person</p>
            <p>Experience the breathtaking beauty of the Taj Mahal, a UNESCO World Heritage Site.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      <div class="location">
         <img src="images/jaipur.jpg" alt="Jaipur">
         <div class="location-content">
            <h4>Jaipur, Rajasthan</h4>
            <p>Price: ₹3,000 per person</p>
            <p>Explore the Pink City and its royal heritage, including Amber Fort and Hawa Mahal.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      <div class="location">
         <img src="images/goa.jpg" alt="Goa">
         <div class="location-content">
            <h4>Goa</h4>
            <p>Price: ₹5,000 per person</p>
            <p>Relax on the sandy beaches, enjoy nightlife, and indulge in water sports.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
    </div>

    <!-- Seychelles Locations -->
   <div id="locations-seychelles" class="location-container">
      <h2>Famous Locations in Seychelles</h2>
      <div class="location">
         <img src="images/seychelles-beach.jpg" alt="Seychelles Beach">
         <div class="location-content">
            <h4>Anse Lazio</h4>
            <p>Price: ₹10,000 per person</p>
            <p>Relax on one of the most beautiful beaches in the world.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      <div class="location">
         <img src="images/vallee-de-mai.jpg" alt="Vallée de Mai">
         <div class="location-content">
            <h4>Vallée de Mai</h4>
            <p>Price: ₹8,000 per person</p>
            <p>Explore a UNESCO World Heritage Site and its unique flora and fauna.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
   </div>

   <!-- Iceland Locations -->
   <div id="locations-iceland" class="location-container">
      <h2>Famous Locations in Iceland</h2>
      <div class="location">
         <img src="images/northern-lights.jpg" alt="Northern Lights">
         <div class="location-content">
            <h4>Northern Lights</h4>
            <p>Price: ₹15,000 per person</p>
            <p>Witness the breathtaking Aurora Borealis in Iceland.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      <div class="location">
         <img src="images/blue-lagoon.jpg" alt="Blue Lagoon">
         <div class="location-content">
            <h4>Blue Lagoon</h4>
            <p>Price: ₹12,000 per person</p>
            <p>Relax in geothermal spa waters surrounded by stunning landscapes.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
   </div>

   <!-- Japan Locations -->
   <div id="locations-japan" class="location-container">
   <h2>Famous Locations in Japan</h2>
   <div class="location">
    <img src="images/tokyo.jpg" alt="Tokyo">
    <div class="location-content">
        <h4>Tokyo, Japan</h4>
        <p>Price: ₹40,000 per person</p>
        <p>Experience the modern cityscape, visit Shibuya Crossing, and explore ancient temples like Senso-ji.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/osaka.jpg" alt="Osaka">
    <div class="location-content">
        <h4>Osaka, Japan</h4>
        <p>Price: ₹35,000 per person</p>
        <p>Visit Osaka Castle, explore Universal Studios Japan, and enjoy the city's vibrant food scene.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/kyoto.jpg" alt="Kyoto">
    <div class="location-content">
        <h4>Kyoto, Japan</h4>
        <p>Price: ₹30,000 per person</p>
        <p>Admire the ancient temples like Fushimi Inari, and take in the traditional tea ceremonies and geisha culture.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
    </div>

<!-- USA Locations -->
<div id="locations-usa" class="location-container">
<h2>Famous Locations in USA</h2>
<div class="location">
    <img src="images/newyork.jpg" alt="New York">
    <div class="location-content">
        <h4>New York, USA</h4>
        <p>Price: ₹50,000 per person</p>
        <p>Visit Times Square, explore Central Park, and marvel at the Statue of Liberty and Empire State Building.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/niagara.jpg" alt="Niagara Falls">
    <div class="location-content">
        <h4>Niagara Falls, USA</h4>
        <p>Price: ₹45,000 per person</p>
        <p>Experience the breathtaking Niagara Falls and take a boat tour to get up close to the falls.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/brooklyn.jpg" alt="Brooklyn">
    <div class="location-content">
        <h4>Brooklyn, New York</h4>
        <p>Price: ₹38,000 per person</p>
        <p>Stroll across the Brooklyn Bridge and enjoy the artsy vibe of Brooklyn's neighborhoods.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
    </div>

<!-- Australia Locations -->
<div id="locations-australia" class="location-container">
<h2>Famous Locations in Australia</h2>
<div class="location">
    <img src="images/sydney.jpg" alt="Sydney">
    <div class="location-content">
        <h4>Sydney, Australia</h4>
        <p>Price: ₹40,000 per person</p>
        <p>Admire the iconic Sydney Opera House and the Harbour Bridge, and relax at Bondi Beach.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/melbourne.jpg" alt="Melbourne">
    <div class="location-content">
        <h4>Melbourne, Australia</h4>
        <p>Price: ₹38,000 per person</p>
        <p>Explore the Melbourne Zoo, Federation Square, and enjoy the cafe culture and laneways.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/greatbarrierreef.jpg" alt="Great Barrier Reef">
    <div class="location-content">
        <h4>Great Barrier Reef, Australia</h4>
        <p>Price: ₹45,000 per person</p>
        <p>Experience the beauty of the Great Barrier Reef with snorkeling and diving adventures.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
</div>

<!-- Switzerland Locations -->
<div id="locations-switzerland" class="location-container">
<h2>Famous Locations in Switzerland</h2>
<div class="location">
    <img src="images/zermatt.jpg" alt="Zermatt">
    <div class="location-content">
        <h4>Zermatt, Switzerland</h4>
        <p>Price: ₹45,000 per person</p>
        <p>Discover the iconic Matterhorn mountain and enjoy skiing in the Swiss Alps.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/lucerne.jpg" alt="Lucerne">
    <div class="location-content">
        <h4>Lucerne, Switzerland</h4>
        <p>Price: ₹40,000 per person</p>
        <p>Take a cruise on Lake Lucerne and visit the Chapel Bridge and Mount Pilatus.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/bern.jpg" alt="Bern">
    <div class="location-content">
        <h4>Bern, Switzerland</h4>
        <p>Price: ₹38,000 per person</p>
        <p>Explore the medieval old town, visit the Zytglogge clock tower, and enjoy the peaceful Swiss countryside.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
</div>

<!-- Austria Locations -->
<div id="locations-austria" class="location-container">
<h2>Famous Locations in Austria</h2>
<div class="location">
    <img src="images/vienna.jpg" alt="Vienna">
    <div class="location-content">
        <h4>Vienna, Austria</h4>
        <p>Price: ₹42,000 per person</p>
        <p>Visit the Schönbrunn Palace, explore the Hofburg Palace, and enjoy Vienna's classical music heritage.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/salzburg.jpg" alt="Salzburg">
    <div class="location-content">
        <h4>Salzburg, Austria</h4>
        <p>Price: ₹38,000 per person</p>
        <p>Explore the birthplace of Mozart, visit Hohensalzburg Fortress, and stroll through Mirabell Gardens.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/innsbruck.jpg" alt="Innsbruck">
    <div class="location-content">
        <h4>Innsbruck, Austria</h4>
        <p>Price: ₹40,000 per person</p>
        <p>Visit the Golden Roof, explore the alpine scenery, and enjoy winter sports in the Tyrolean Alps.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
</div>

<!-- Thailand Locations -->
<div id="locations-thailand" class="location-container">
<h2>Famous Locations in Thailand</h2>
<div class="location">
    <img src="images/bangkok.jpg" alt="Bangkok">
    <div class="location-content">
        <h4>Bangkok, Thailand</h4>
        <p>Price: ₹20,000 per person</p>
        <p>Visit the Grand Palace, explore the floating markets, and indulge in authentic Thai cuisine.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/phuket.jpg" alt="Phuket">
    <div class="location-content">
        <h4>Phuket, Thailand</h4>
        <p>Price: ₹25,000 per person</p>
        <p>Relax on Patong Beach, visit Phi Phi Islands, and explore the vibrant nightlife.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/chiangmai.jpg" alt="Chiang Mai">
    <div class="location-content">
        <h4>Chiang Mai, Thailand</h4>
        <p>Price: ₹22,000 per person</p>
        <p>Explore ancient temples like Wat Phra That Doi Suthep, and enjoy the local markets and night bazaars.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
</div>

<!-- UAE Locations -->
<div id="locations-uae" class="location-container">
<h2>Famous Locations in UAE</h2>
<div class="location">
    <img src="images/dubai.jpg" alt="Dubai">
    <div class="location-content">
        <h4>Dubai, UAE</h4>
        <p>Price: ₹35,000 per person</p>
        <p>Visit the Burj Khalifa, shop in luxury malls, and enjoy a desert safari adventure.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/palmjumeirah.jpg" alt="Palm Jumeirah">
    <div class="location-content">
        <h4>Palm Jumeirah, Dubai</h4>
        <p>Price: ₹38,000 per person</p>
        <p>Stay at luxury resorts, visit Atlantis Aquaventure Waterpark, and take a boat tour of the Palm.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/dubaimall.jpg" alt="Dubai Mall">
    <div class="location-content">
        <h4>Dubai Mall, Dubai</h4>
        <p>Price: ₹28,000 per person</p>
        <p>Shop at one of the world's largest malls, visit the Dubai Aquarium, and enjoy the Dubai Fountain show.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
</div>

<!-- Maldives Locations -->
<div id="locations-maldives" class="location-container">
<h2>Famous Locations in Maldives</h2>
<div class="location">
    <img src="images/maldives.jpg" alt="Maldives">
    <div class="location-content">
        <h4>Maldives</h4>
        <p>Price: ₹60,000 per person</p>
        <p>Relax on white-sand beaches, snorkel in crystal-clear waters, and stay in overwater villas.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/maafushi.jpg" alt="Maafushi">
    <div class="location-content">
        <h4>Maafushi, Maldives</h4>
        <p>Price: ₹55,000 per person</p>
        <p>Explore the local island, go on a dolphin cruise, and enjoy the Maldives' pristine beaches.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/sunresort.jpg" alt="Sun Resort">
    <div class="location-content">
        <h4>Sun Resort, Maldives</h4>
        <p>Price: ₹65,000 per person</p>
        <p>Indulge in luxury resorts, enjoy water sports, and unwind in a private bungalow.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
</div>

<!-- Norway Locations -->
<div id="locations-norway" class="location-container">
<h2>Famous Locations in Norway</h2>
<div class="location">
    <img src="images/oslo.jpg" alt="Oslo">
    <div class="location-content">
        <h4>Oslo, Norway</h4>
        <p>Price: ₹40,000 per person</p>
        <p>Visit the Viking Ship Museum, explore the Oslo Opera House, and enjoy the scenic beauty of fjords.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/bergen.jpg" alt="Bergen">
    <div class="location-content">
        <h4>Bergen, Norway</h4>
        <p>Price: ₹38,000 per person</p>
        <p>Take a scenic train ride to Bergen, explore the UNESCO-listed Bryggen Wharf, and hike around the fjords.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
<div class="location">
    <img src="images/norwayfjords.jpg" alt="Norway Fjords">
    <div class="location-content">
        <h4>Norway Fjords</h4>
        <p>Price: ₹45,000 per person</p>
        <p>Take a breathtaking cruise through the majestic fjords of Norway and experience the northern lights.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</div>
   </div>

   <div class="load-more"><span class="btn" id="load-more-btn">Load More</span></div>


</section>

<!-- footer section starts  -->

<?php @include 'footer.php'; ?>

<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<script>
   // Toggle location container visibility
   document.querySelectorAll('.toggle-locations').forEach(button => {
      button.addEventListener('click', function() {
         const target = document.querySelector(this.getAttribute('data-target'));
         if (target.style.display === 'none' || target.style.display === '') {
            target.style.display = 'block';
         } else {
            target.style.display = 'none';
         }
      });
   });
</script>

</body>
</html>
