  </div>
  <!-- Main container ends -->
  
  <!-- Page overlay -->
  <div id="page-overlay" class="page-overlay"></div>
  <!-- Page overlay ends -->

  <!-- Quick contact -->
  <div id="quick-contact">
    <p>Pablo Rodríguez González · 722 639 555 · <a href="#contacto"><strong>Contacto</strong></a></p>
  </div>
  <!-- Quick contact ends -->
  
  <!-- Footer -->
  <footer id="contacto">
    <div id="footer-header" class="page-wrapp">
      <h2>Estamos en contacto</h2>
      <div id="faro-animation">
        <div id="faro"></div>
        <div id="boat"></div>
      </div>
    </div>
    
    <div class="footer-info-container">
      <div class="footer-col">
        Pablo Rodríguez González
        <br>
        Colegiado núm. B02736
      </div>

      <div class="footer-col">
        pablorod@cop.es
        <br>
        777 639 555
      </div>

      <div class="footer-col">
        Centro Avanza C/Vía Púnica 45, bajos. 
        <br>
        Ibiza, España
      </div>

      <div id="external" class="footer-col">
        <a href="https://www.mundopsicologos.com/centros/pablo-rodriguez" target="_blank" title="Mi perfil en Mundo Psicólogos"><img src="<?php echo url_for('_media/img-mundo-psicologos-logo.png')?>" alt=""></a>
      </div>
    </div>
    
    <div id="labaula-disclaimer">
      Diseño <a href="https://www.labaula.net" target="_blank" title="Estrategias de comunicación, diseño & other stories">bau-la</a>
    </div>
  </footer>
  <!-- Footer ends -->

  <script type="text/javascript" src="<?php echo url_for('_scripts/main.js')?>"></script>

</body>

</html>

<?php 
  // Disconnect from the database
  db_disconnect($db);
?>