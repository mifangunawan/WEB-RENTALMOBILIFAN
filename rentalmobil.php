<?php
session_start ();
?>
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<script>
  function confirmLogout(event){
    event.preventDefault();
    var confirmLogout = confirm("Apakah Anda Yakin Ingin Logout?");
    if (confirmLogout) {
      window.location.href = event.target.href;
    }
  }
  </script>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="logo.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>data Customer</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Data Mobil</p>
  </a>
  <div class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
<?php
  if(isset($_SESSION['username'])){
    echo '<a href="logout.php" onclick="confirmLogout(event)"> <i data-faether="log-out"></i> logout</a>';
  } else{
    echo '<a href="login.php">  <i data-faether="log-in"></i> login</a>';
  }
  ?>
  </div>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="rentalmobil.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="datamobil.html" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="datakustomer.html" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="sewa.html" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> John Doe.</h1>
    <p>Photographer and Web Designer.</p>
    <img src="i.png" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">My Name</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    
    
    
    
      
    </button>
    
    <!-- Grid for pricing tables -->
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA CUSTOMER</h2>
  
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Nama Customer</th>
        <th>Tanggal Sewa</th>
        <th>Tanggal pengembalian</th>
        <th>Nama Mobil</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>12 APRIL 2029</td>
        <td>18 APRIL 2029</td>
        <td>Supra</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>sarja</td>
        <td>10 MEI 2029</td>
        <td>20 MEI 2029</td>
        <td>tesla</td>
        <td>sarja12@gmail.com</td>
      </tr>
      <tr>
        <td>Nana</td>
        <td>19 AGUSTUS 2029</td>
        <td>21 AGUSTUS 2029</td>
        <td>BMW</td>
        <td>Nana1231@gmail.com</td>
        
      </tr>
      <tr>
        <td>Maksum</td>
        <td>19 AGUSTUS 2029</td>
        <td>21 AGUSTUS 2029</td>
        <td>Ferarri</td>
        <td>muksam1231@gmail.com</td>
      </tr>
      <tr><td>Bedi</td>
        <td>19 Desember 2029</td>
        <td>01 Januari 2030</td>
        <td>Alphard</td>
        <td>dibe1231@gmail.com</td>
      </tr>
    </tbody>
  </table>
  
    
</div>
<br>
   
</body>
</html>

          
    
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Photos</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

    
<h2>Rental Mobil</h2>
<br>
<div class="row">
  <div class="column">
    <div class="card">
        <img src="f.jpg" alt="avatar" style="width:100%">
      <p><b>Ferrari</p></b>
      <a button type="button" class="btn btn-outline-primary" href="detail.html">DETAIL</button></a>
    </div>
  </div>

  
  <div class="column">
    <div class="card">
        <img src="l.jpg" alt="avatar" style="width:100%">
      <p><b>lamborghini</p></b>
      <a button type="button" class="btn btn-outline-primary" href="detail2.html">DETAIL</button></a>
    </div>
  </div>
  <div class="column">
    <div class="card">
        <img src="a.jpg" alt="avatar" style="width:87%">
      <p><b>Alphard</p></b>
      <a button type="button" class="btn btn-outline-primary" href="detail3.html">DETAIL</button></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
        <img src="p.jpg" alt="avatar" style="width:93%">
            <b>tesla</b>
    <a button type="button" class="btn btn-outline-primary" href="detail4.html">DETAIL</button></a>
    </div>
    </div>
    

  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
        <img src="s1.jpg" alt="avatar" style="width:100%">
      <p><b>Supra</p></b>
      <a button type="button" class="btn btn-outline-primary" href="detail5.html">DETAIL</button></a>
    </div>
  </div>

  
  <div class="column">
    <div class="card">
        <img src="b.jpg" alt="avatar" style="width:100%">
      <p><b>BMW</p></b>
      <a button type="button" class="btn btn-outline-primary" href="detail6.html">DETAIL</button></a>
    </div>
  </div>
  <div class="column">
    <div class="card">
        <img src="m3.jpg" alt="avatar" style="width:85%">
      <p><b>Mustang Gt</p></b>
      <a button type="button" class="btn btn-outline-primary" href="detail7.html">DETAIL</button></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
        <img src="gtr1.jpg" alt="avatar" style="width:100%" style="height:100%">
            <b>Nissan GT-R</b>
    <a button type="button" class="btn btn-outline-primary" href="detail8.html">DETAIL</button></a>
    </div>
    </div>
    

  </div>
</div>
<br>
   
</body>
</html>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
  <!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  
  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }
  
  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }
  
  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }
  
  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }
  
  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }
  
  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  label {
    margin-bottom: 10px;
    display: block;
  }
  
  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }
  
  .btn1 {
    background-color:aqua;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  
  
    
  
  
  a {
    color: #2196F3;
  }
  
  hr {
    border: 1px solid lightgrey;
  }
  
  span.price {
    float: right;
    color: grey;
  }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
  </style>
  </head>
  <body>
  
  
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
        
          <div class="row">
            <div class="col-50">
              <h3>form yang harus di isi</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="New York">
  
              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
            
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Continue to checkout" class="btn1">
        </form>
      </div>
    </div>
   
  </div>
  
  </body>
  </html>
  
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.instagram.com/m.ifann___?igsh=YnR3M2c3cnlsaXc4" target="_blank" class="w3-hover-text-green">@m.ifannn___</a>/<a href="" target="_blank" class="w3-hover-text-green">@rikikanaeru</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
