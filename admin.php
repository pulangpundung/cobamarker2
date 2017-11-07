<!DOCTYPE html>
<?php
if (isset($_GET['page']) == null) {
 header("location:admin.php?page=home");
}
include './db/conf.php';
include './db/dbconfig.php';
$konfigurasi = new konfigurasi();
?>
<html>
<?php include './view/header.php'; ?>
<body style="margin-top:10px">
 <div class="container">
 <?php
 switch ($_GET['page']) {
   case 'kelola':
    include './view/kelola.php';
   break;
   default:
    include './view/home.php';
   break;
   }
 ?>

         
 </div>

           
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><b>UP SPLL DISHUB DKI JAKARTA</b></a>
     </div>
   <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
  
    <form class="navbar-form navbar-right">
          <div class="navbar-header">

            <input type="text" class="form-control" name="cari_lokasi" id="cari_lokasi" placeholder="Cari Lokasi Disini"/>
            <buttons class="btn btn-primary" id="cariLokasi">Cari</button>
          
            
          </div>
        </form>

        
  
</div>
</nav>

<div id="map1" style="width:100%;" ></div>

<div class="nav-left visible-xs">
  <ul class="icon-menu">
    <li class="icon-box con">
      <i class="fa fa-map-marker fa-2x"></i> <a href="#">
      <h2> <?php include'./pingger/conn.php'; ?> </h2></a>
    </li>


    <li class="icon-box dco">
      <i class="fa fa-map-marker fa-2x"></i> <a href="#">
      <h2><?php include'./pingger/dco.php'; ?></h2></a>
    </li>


    <li class="icon-box dhu">
      <i class="fa fa-map-marker fa-2x"></i> <a href="#">
      <h2><?php include'./pingger/dhu.php'; ?></h2></a>
    </li>


    <li class="icon-box dnu">
      <i class="fa fa-map-marker fa-2x"></i> <a href="#">
      <h2><?php include'./pingger/dnu.php'; ?></h2></a>
    </li>


    <li class="icon-box rto">
      <i class="fa fa-map-marker fa-2x"></i> <a href="#">
      <h2><?php include'./pingger/rto.php'; ?></h2></a>
    </li>

  </ul>


  </div>
  <div class="nav-right visible-xs">
  <ul class="icon-menu">
    <li class="icon-box kanan">
      <i class="fa fa-sitemap fa-2x"></i> <a href="" onclick="return showDetails('./pingger/ping_ip.php')">
      <h2>Tes Jaringan</h2></a>
    </li>

    <li class="icon-box kanan">
      <i class="fa fa-power-off fa-2x"></i> <a href="./logout.php">
      <h2>Keluar</h2></a>
    </li>

  </ul>


  </div>
 <script>
      $(document).ready(function(){
      $(".dropdown").hover(            
      function() {
        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
        $(this).toggleClass('open');        
      },
      function() {
        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
        $(this).toggleClass('open');       
      }
      );
    });
    </script>
  
</body>

</html>