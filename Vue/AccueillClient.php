
<?php
require_once ("../Database/Db.php");
    session_start();
    if(empty($_SESSION['Nom']))
    {     
        header("location:sign-in.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
      .banner-image {
        background-image: url('img/3.jpg');
        background-size: cover;
        
      }
      .blank
      {
         padding-top:40px ;
         padding-bottom:40px ;
      }
    </style>
  </head>
  <body >
     <!-- header -->
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
      <div class="container">
      <a class="navbar-brand" href="#">
      <img
        src="img/logo.png"
        height="70"
        width="120"
        alt=""
        loading="lazy"
      />
    </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-warning " href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Restaurants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">piscines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Espace vert</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Special Offres</a>
            </li>
           
            <li class="nav-item">
            <a href="../Controllers/LogOut.php"><button type="button" class="btn btn-outline-warning text-white ms-4">Se Deconnecter <?php echo $_SESSION['Nom'] ?> </button></a>
            </li>
            <li class="nav-item">
            <a href="Reservation.php"><button type="button" class="btn btn-warning text-white ms-4"> Reserver </button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center "
  >
      <div class="content text-center">
        <h1 class="text-white">Golden Tulip Safi  : un h??tel de luxe intemporel, inoubliable, inimitable</h1>
        <a href="Reservation.php"><button class="btn btn-warning" type="button">R??servez D??s Maintenant</button></a>
      </div>
</div>
<div class="blank"></div>
<div class="container pt-4">
    <div class="row">
    <center><h1>Nos Services</h1></center>
      <div class="col-lg-4 col-md-6">
        <center><img src="img/chambre.jpg" style="width: 300px ;height: 200px;border-radius:50%;">
        <h3>CHAMBRE</h3>
        <p>Vous pouvez choisir une chambre Classic ou opter pour nos chambres Deluxe pour b??n??ficier de plus d'espace. Dans nos suites Junior..</p>
      </center>
      </div>

      <div class="col-lg-4 col-md-6 ">
        <center>  <center><img  src="img/Apparts.jpg" style="width: 300px ;height: 200px;border-radius:50%;">
        <h3>APPARTEMENT</h3>
        <p>Vous b??n??ficierez de diff??rentes prestations notamment un service de m??nage inclus, un r??frig??rateur et une cuisine. Pas de tracas, vous profiterez aussi d???un appart???h??tel climatis?? ?? Safi!</p>
      </center>
      </div>

      <div class="col-lg-4 col-md-6">
      <center>
      <center><img src="img/Bungalow.jpg" style="width: 300px ;height: 200px;border-radius:50%;"> 
        <h3>BUNGALOW</h3>
        <p>Vivez une exp??rience inoubliable dans nos bungalows de plage situ??s au c??ur des plus beaux spots de kitesurf ?? Safi. Un s??jour ?? ne pas manquer.</p>
      </center>
      </div>
    </div>
</div>
<div class="blank"></div>
<center><h1>Nos Meilleures Offres</h1></center>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/off1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-warning">Stay More, Save More</h5>
        <p class="card-text">Les avantages de l'offre :<br>
25% de r??duction sur le tarif flexible . <br>
R??servez 4 nuits cons??cutives ou plus est requis .</p>
<button type="button" class="btn btn-warning text-black">Voir l'offre</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/off2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-warning">OFFRE WEEKEND Petit d??jeuner Inclus</h5>
        <p class="card-text">Les avantages de l'offre :<br>
15% de r??duction sur l'h??bergement.<br>
Petit d??jeuners offerts.</p>
<button type="button" class="btn btn-warning text-black">Voir l'offre</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/off3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-warning">Bloomy Days Petit d??jeuner inclus</h5>
        <p class="card-text">Les avantages de l'offre :<br>
Les bonnes affaires fleurissent !<br>
Petit d??jeuner offert pour les enfants.</p>
<button type="button" class="btn btn-warning text-black">Voir l'offre</button>
      </div>
    </div>
  </div>
</div>
<div class="blank"></div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button h5 text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Votre ??v??nement sur-mesure : ??l??gance et raffinement
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Au c??ur de l???h??tel Golden  Tulip Safi, des salles de conf??rence splendides, des r??sidences priv??es et des jardins enchanteurs ouvrent le bal du majestueux et de l???inoubliable.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed  h5 text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      3 restaurants signature au c??ur du Palace
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Bastions de l???excellence culinaire et gastronomique, les restaurants du Golden Tulip Safi se font complices de vos instants gourmands. D???un c??t??, 2 restaurants supervis??s par le Chef fran??ais Yannick All??no pr??sagent d???un voyage sensoriel m??morable au c??ur de la Ville Ocre. De l???autre, la derni??re n??e des grandes tables du Palace, orchestr??e par les talents du Chef italien multi-??toil?? Massimiliano Alajmo, vous emporte au c??ur d???une exp??rience gourmande unique.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed  h5 text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Le Jardin et sa piscine, une po??sie arabo-andalouse ?? ciel ouvert
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Notre palace d??ploie un ??crin r??v?? pour qui souhaite s???accorder un moment de fra??cheur au bord d???une piscine ?? Safi. V??g??tation foisonnante, murmure des fontaines, transats et pavillons priv??s.
      </div>
    </div>
  </div>
</div>
<div class="blank"></div>
    <!-- footer -->
    <footer class="text-center text-white bg-dark" >
  <div class="container p-4 ">
  <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning">GOLDEN TULIP</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Mentions l??gales</a>
          </li>
          <li>
            <a href="#!" class="text-white">Conditions g??n??rales de vente</a>
          </li>
          <li>
            <a href="#!" class="text-white">Conditions g??n??rales d'utilisation</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning mb-0">NOS OFFRES</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Offre WeekEnd dej inclus</a>
          </li>
          <li>
            <a href="#!" class="text-white">Pack Ramadan</a>
          </li>
          <li>
            <a href="#!" class="text-white">Piscines</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning mb-0">PREPAREZ VOTRE SEJOURE</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Ma reservation</a>
          </li>
          <li>
            <a href="#!" class="text-white">R??unions et ??v??nements</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning mb-0">BESOIN D'AIDE</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">FAQ</a>
          </li>
          <li>
            <a href="#!" class="text-white">Contactez nous</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <section class="">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
          <div class="ratio ratio-16x9">
            <iframe
              class="shadow-1-strong rounded"
              src="https://www.youtube.com/embed/NM3IPdQ1EgM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>
  </div>
  
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   <script src="js/javascript.js" type="text/javascript">

</script>
  </body>
</html>
