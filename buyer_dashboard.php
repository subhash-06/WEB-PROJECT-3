<?php
require("db.php");

// need to seller to access dashboard
session_start();

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jeep's Infra: Buyer dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"/>
    <link rel="stylesheet" href="dashboard_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">

<link rel="stylesheet" href="css/hover-min.css">
<link rel="stylesheet" href="css/flexslider.css">

<link rel="stylesheet" href="css/style.css">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
  <section id="home" class="parallax-section">
    <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

        <center><div class="col-md-offset-2 col-md-8 col-sm-12">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Welcome, <?php
        $username = $_SESSION['username'];
        echo $username; ?>!</h1>
            <a href="logout.php" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll"
            data-wow-delay="1.3s">LOGOUT</a>
            <a href="index.php" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll"
            data-wow-delay="1.3s">HOME</a>
        </div>
</center>

      </div>
    </div>
  </section>
    <div class="full">
        <div style="margin-left: 10% ;"></div>
        <section class="section-plans" id="section-plans">
            <div class="u-center-text u-margin-bottom-big">
            </div>
            
            <?php
            // connect to the database
            $pdo = new PDO('mysql:host=localhost;dbname=hpalaparthi1', 'hpalaparthi1', 'hpalaparthi1');

            // query to retrieve the data from the database
            $sql = "SELECT * FROM cards";
            $stmt = $pdo->query($sql);
            echo '<div class="row">';
            // loop through the data and create a card for each row
            foreach ($stmt as $row) {
                $image_path = 'img/' . $row['image'];

                echo '  <div class="col-1-of-3">';
                echo '    <div class="card">';
                echo '      <div class="card__side card__side--front-1" style="background-image: url(' . $image_path . ');">';
                echo '        <div class="card__title card__title--1">';
                echo '        </div>';
        
                echo '        <div class="card__details">';
                echo '        </div>';
                echo '      </div>';
                echo '      <div class="card__side card__side--back card__side--back-1">';
                echo '        <div class="card__cta">';
                echo '<div class="card__price-box">';
                echo '          <h3><b>Listing ID:</b> ' . $row['id'] . '</h3>';
                echo '          <h3><b>Owner:</b> ' . $row['seller_user_id'] . '</h3>';
                echo '    <h3><b>Address:</b> ' . $row['address'] . '</h3>';
                echo '    <h3><b>Age:</b> ' . $row['age'] . '</h3>';
                echo '    <h3><b>No. of Beds:</b> ' . $row['bed'] . '</h3>';
                echo '    <h3><b>No. of Baths:</b> ' . $row['ad'] . '</h3>';
                echo '    <h3><b>Garden available:</b> ' . $row['garden'] . '</h3>';
                echo '    <h3><b>Parking available:</b> ' . $row['pa'] . '</h3>';
                echo '    <h3><b>Price:</b> ' . $row['tax'] . '</h3>';
                echo '</div>';
                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
            }
            echo '</div>';
            ?>
        </section>
<style>
  
.card__price-box h3 {
  color:white;
  margin-top:0px;
  margin-bottom:0px;
}
#home {
  height : 400px;
}
.u-center-text {
  text-align: center !important;
}

.u-margin-bottom-small {
  margin-bottom: 1.5rem !important;
}

.u-margin-bottom-medium {
  margin-bottom: 4rem !important;
}

.u-margin-top-big {
  margin-top: 5rem !important;
}

body {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  line-height: 1.7;
  color: #fff;
}

.heading-primary {
  color: #fff;
  text-transform: uppercase;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  margin-bottom: 6rem;
}
.card__details img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the image covers the entire container, maintaining aspect ratio */
}


.heading-primary--main {
  display: block;
  font-size: 6rem;
  font-weight: 400;
  letter-spacing: 3.5rem;
  -webkit-animation-name: moveInLeft;
          animation-name: moveInLeft;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  /*
        animation-delay: 3s;
        animation-iteration-count: 3;
        */
}

.heading-primary--sub {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: 1.75rem;
  -webkit-animation: moveInRight 1s ease-out;
          animation: moveInRight 1s ease-out;
}

.heading-secondary {
  font-size: 3.5rem;
  text-transform: uppercase;
  font-weight: 700;
  color: transparent;
  letter-spacing: 0.2rem;
  line-height: 1;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  color: #eee;
}

.btn, .btn:link, .btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  padding: 1.5rem 4rem;
  display: inline-block;
  border-radius: 0.5rem;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  position: relative;
  font-size: 1.6rem;
  border: none;
  cursor: pointer;
}

.btn:hover {
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
  -webkit-box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
}

.btn:hover::after {
  -webkit-transform: scaleX(1.4) scaleY(1.6);
          transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}

.btn:active, .btn:focus {
  outline: none;
  -webkit-transform: translateY(-1px);
          transform: translateY(-1px);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.btn--white {
  background-color: #fff;
  color: #777;
}

.btn--white::after {
  background-color: #fff;
}

.btn--green {
  background: -webkit-gradient(linear, left top, right top, from(#fc466b), to(#3f5efb));
  background: linear-gradient(to left, #0037c2 , #25d2ed);
  color: #fff;
}

.btn--green::after {
  background-color: #55c57a;
}

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  font-size: 62.5%;
}



.section-plans {
  padding: 4rem 0 4rem 0;
}

.card {
  -webkit-perspective: 150rem;
          perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
  height: 52rem;
}

.card__side {
  height: 52rem;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 3px;
  overflow: hidden;
  -webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
}

.card__side--front {
  background-color: #fff;
}

.card__side--front-2 {
  background: linear-gradient(to left, #0037c2 , #25d2ed);
}

.card__side--front-3 {
  background: linear-gradient(to left, #0037c2 , #25d2ed);
}

.card__side--back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.card__side--back-1 {
  background: linear-gradient(to left, #0037c2 , #25d2ed);
}

.card__side--back-2 {
  background: linear-gradient(to left, #0037c2 , #25d2ed);
}

.card__side--back-3 {
  background: linear-gradient(to left, #0037c2 , #25d2ed);
}

.card:hover .card__side--front-1,
.card:hover .card__side--front-2,
.card:hover .card__side--front-3 {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card:hover .card__side--back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}

.card__title {
  height: 20rem;
  padding: 4rem 2rem 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.card__title--1 .fas {
  font-size: 5rem;
}

.card__title--2 .fas {
  font-size: 5rem;
}

.card__title--3 .fas {
  font-size: 5rem;
}

.card__heading {
  font-size: 4rem;
  font-weight: 300;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  width: 75%;
}

.card__heading-span {
  padding: 1rem 1.5rem;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
}

.card__details {
  padding: 0 2rem 2rem;
}

.card__details ul {
  list-style: none;
  width: 80%;
  margin: 0 auto;
}

.card__details ul li {
  text-align: center;
  font-size: 1.5rem;
  padding: 1rem;
}

.card__details ul li:not(:last-child) {
  border-bottom: 1px solid #eee;
}

.card__cta {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 90%;
  text-align: center;
}

.card__price-box {
  text-align: center;
  color: white;
  margin-bottom: 8rem;
}

.card__price-only {
  font-size: 1.4rem;
  text-transform: uppercase;
}

.card__price-value {
  font-size: 6rem;
  font-weight: 100;
}

.row {
  max-width: 114rem;
  margin: 0 auto;
}

.row:not(:last-child) {
  margin-bottom: 5rem;
  margin-top: 5rem;
}

.row::after {
  content: "";
  display: table;
  clear: both;
}

.row [class^="col-"] {
  float: left;
}

.row [class^="col-"]:not(:last-child) {
  margin-right: 6rem;
}

.row .col-1-of-3 {
  width: calc((100% - 2 * 6rem) / 3);
}
        </style>
    </div>
</body>
</html>
