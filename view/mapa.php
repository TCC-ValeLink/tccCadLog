<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>


<div class="body-home">
<gmp-map
    center="-24.49945549675142,-47.848329427504"
    zoom="10"
    map-id="DEMO_MAP_ID"
    style="height: 100%; width: 83.5%; margin-left:32rem;"
  ></gmp-map>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZnbTIFfvqwB9EUvj9M_5A853CaxD3SqM&callback=initMap&v=beta"
    defer
  ></script>

</div>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>

