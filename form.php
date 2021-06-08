<?php
	session_start();
    if (!isset($_SESSION['name'])){
        header("location:login.php");
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Agroutourism Dau | Purchase Form </title>
    <link rel="stylesheet" href="css/form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <script>
     function displayQuestion(answer) {
       if (answer == "Wisata Petik Jeruk") {
         document.getElementById('Baby Java').style.display = "block";
         document.getElementById('Baby Valencia').style.display = "block";
         document.getElementById('Keprok Batu').style.display = "block";
         document.getElementById('Siam Madu').style.display = "block";
         document.getElementById('Siam Pontianak').style.display = "block";
         document.getElementById('Jeruk lemon').style.display = "none";
       }
       else if (answer == "Agrowisata Petik Jeruk") {
         document.getElementById('Baby Java').style.display = "block";
         document.getElementById('Baby Valencia').style.display = "block";
         document.getElementById('Keprok Batu').style.display = "block";
         document.getElementById('Siam Madu').style.display = "block";
         document.getElementById('Siam Pontianak').style.display = "block";
         document.getElementById('Jeruk lemon').style.display = "block";
       }
       else if (answer == "Wisata Petik Jeruk Berdiri Tegak") {
         document.getElementById('Baby Java').style.display = "block";
         document.getElementById('Baby Valencia').style.display = "none";
         document.getElementById('Keprok Batu').style.display = "block";
         document.getElementById('Siam Madu').style.display = "none";
         document.getElementById('Siam Pontianak').style.display = "none";
         document.getElementById('Jeruk lemon').style.display = "none";
       }
       else if (answer == "Agrowisata Petik Jeruk Kebun Kita") {  
         
         document.getElementById('Baby Valencia').style.display = "block";
         document.getElementById('Keprok Batu').style.display = "block";
         document.getElementById('Siam Madu').style.display = "none";
         document.getElementById('Siam Pontianak').style.display = "none";
         document.getElementById('Jeruk lemon').style.display = "none";
       }
       else if (answer == "Orange Harvest") {
         document.getElementById('Baby Java').style.display = "block";
         document.getElementById('Baby Valencia').style.display = "none";
         document.getElementById('Keprok Batu').style.display = "none";
         document.getElementById('Siam Madu').style.display = "none";
         document.getElementById('Siam Pontianak').style.display = "none";
         document.getElementById('Jeruk lemon').style.display = "block";
       }
     }
   </script>
<body>
  <script src="js/form.js"></script>
    
  <div class="container">
    <a href="index.php" style="position:relative;z-index:99;float:right;text-decoration:none;">x</a>
    <div class="title">Purchase</div>
    <div class="content">
      <form action="sales.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="adr" placeholder="Enter your address" required>
          </div>
<!--
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
-->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="number" placeholder="Enter your number" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Oranges</span>
            <select name="oranges-type" id="oranges">
              <optgroup label="Wisata Petik Jeruk">
                <option value="Baby Java">Baby Java</option>
                <option value="Baby Valencia">Baby Valencia</option>
                <option value="Keprok Batu">Keprok Batu</option>  
                <option value="Siam Madu">Siam Madu</option>
                <option value="Siam Pontianak">Siam Pontianak</option>
              </optgroup>
              <optgroup label="Agrowisata Petik Jeruk">
                <option value="Baby Java">Baby Java</option>
                <option value="Baby Valencia">Baby Valencia</option>
                <option value="Keprok Batu">Keprok Batu</option>
                <option value="Siam Madu">Siam Madu</option>
                <option value="Siam Pontianak">Siam Pontianak</option>
                <option value="Jeruk lemon">Jeruk lemon</option>
              </optgroup>
              <optgroup label="Berdiri Tegak">
                <option value="Baby Java">Baby Java</option>
                <option value="Keprok Batu">Keprok Batu</option>
              </optgroup>
              <optgroup label="Kebun Kita">
                <option value="Baby Java">Baby Java</option>
                <option value="Baby Valencia">Baby Valencia</option>
                <option value="Keprok Batu">Keprok Batu</option>
              </optgroup>
              <optgroup label="Orange Harvest">
                <option value="Baby Java">Baby Java</option>
                <option value="Jeruk Lemon">Jeruk lemon</option>
              </optgroup>
            </select>
          </div> -->
          <div class="input-box">
            <span class="details">Location</span>
            <select name = "location" onclick="displayQuestion(this.value)" required>
              <option value = "Wisata Petik Jeruk">Wisata Petik Jeruk</option>
              <option value = "Agrowisata Petik Jeruk">Agrowisata Petik Jeruk</option>
              <option value = "Wisata Petik Jeruk Berdiri Tegak">Wisata Petik Jeruk Berdiri Tegak</option>
              <option value = "Agrowisata Petik Jeruk Kebun Kita">Agrowisata Petik Jeruk Kebun Kita</option>
              <option value = "Orange Harvest">Orange Harvest</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Oranges</span>
            <select name = "orange" required>
              <option value="Baby Java" id="Baby Java">Baby Java</option>
              <option value="Baby Valencia" id="Baby Valencia">Baby Valencia</option>
              <option value="Keprok Batu" id="Keprok Batu">Keprok Batu</option>
              <option value="Siam Madu" id="Siam Madu">Siam Madu</option>
              <option value="Siam Pontianak" id="Siam Pontianak">Siam Pontianak</option>
              <option value="Jeruk lemon" id="Jeruk lemon" style="display: none;">Jeruk lemon</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Number of Oranges (KG)</span>
            <input type = "number" placeholder="Enter the Amount" min = "1" name="sum" required>
          </div>
        </div>
        <!-- <div class="gender-details">
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">
          <input type="radio" name="gender" value="prefer not to say" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div> -->
        <div class="button" id="border">
          <input type="submit" value="Order" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
