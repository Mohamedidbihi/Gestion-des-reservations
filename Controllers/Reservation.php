<?php
include "../Models/Reservation.php";
$Reservation = new reservation();
session_start();
$idUser=$_SESSION['Id_User'];
if (isset($_POST['reserver']))
 {
   $datedepart= $_POST['datedepart'];
   $datearriv = $_POST['datearrive'];
$IdReservation=$Reservation->InsertReservation($datearriv,$datedepart,$idUser);
echo $IdReservation;
$Reservation->InsertBatiment($_POST['typebatiment'],$IdReservation);
$Reservation->Insertpension($_POST['pension'],$IdReservation);
$Reservation->InsertChambre($_POST['chambre'],$IdReservation);
$Reservation->Enfantbien($_POST['chambreenf'],$IdReservation);
$Total=$Reservation->Calcule($IdReservation);
$_SESSION['Total']=$Total;
$_SESSION['Id_Reservation']=$IdReservation;
header('location:../Vue/reservation.php');

    
 
 }