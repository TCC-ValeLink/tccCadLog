<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>


<div class="body-home">



<gmp-map
      center="-24.49945549675142,-47.848329427504"
      zoom="15"
      map-id="DEMO_MAP_ID"
      style="height: 90%; width: 83.5%; margin-left:32rem;"
    >
      <gmp-advanced-marker
        position="-24.49945549675142,-47.848329427504"
        title="Etec de Registro"
      ></gmp-advanced-marker>
      <gmp-advanced-marker
        position="47.648994,-122.3503845"
        title="Seattle, WA"
      ></gmp-advanced-marker>
    </gmp-map>

    <!-- 
      The `defer` attribute causes the script to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises. See
      https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZnbTIFfvqwB9EUvj9M_5A853CaxD3SqM&libraries=maps,marker&v=beta"
      defer
    ></script>


</div>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>

