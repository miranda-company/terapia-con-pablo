  </div>
  <!-- Main container ends -->
  
  <!-- Page overlay -->
  <div id="page-overlay" class="page-overlay">
    <div class="loader"><img src="<?php echo url_for('_media/img-loader.gif')?>"></div>
    <br>
    <h5>www.terapiaconpablo.com</h5>
  </div>
  <!-- Page overlay ends -->

  <!-- Quick contact -->
  <div id="quick-contact">
    <div class="whatsapp-quick-contact">
      <a href="https://wa.me/34722639555?text=Hola%20Pablo,%20me%20gustaría%20hacer%20terapia%20contigo.%20Mi%20nombre%20es%20" target="_blank" title="Agenda una cita conmigo a través de WhatsApp">
        <img src="_media/icon-whatsapp-quick-contact.png" alt="">
      </a>
    </div>
    <p>Pablo Rodríguez González · +34 722 639 555 · <a href="#contacto"><strong>Contacto</strong></a></p>
  </div>
  <!-- Quick contact ends -->
  
  <!-- Footer -->
  <section id="footer-header" class="normal-section">
      <div class="section-wrapp">
      <h2>Estamos en contacto</h2>
        <div id="faro-animation">
          <div id="faro"><img src="_media/img-faro.png"></div>
          <div id="luz-1" class="luz"><img src="_media/img-luz-1.png"></div>
          <div id="luz-2" class="luz"><img src="_media/img-luz-2.png"></div>
          <div id="barco"><img src="_media/img-barco.png"></div>
        </div>
      </div>
  </section>
  
  <footer id="contacto">
    
    <div id="footer-main-info" class="section-wrapp footer-info">
      <div class="footer-col">
        Pablo Rodríguez González
        <br>
        Colegiado núm. B02736
      </div>

      <div class="footer-col">
        info@terapiaconpablo.com
        <br>
        teléfono: +34 722 639 555
      </div>
    </div>

    <div class="footer-adress-info">
      <div class="footer-col">
        Avenida de Castilla y León 46.
        <br>
        Burgos, España
      </div>

      <div class="footer-col">
        Centro Avanza C/Vía Púnica 45, bajos. 
        <br>
        Ibiza, España
      </div>
    </div>
    

    <div id="footer-external-info" class="section-wrapp footer-info">
      <div class="external-icon">
        <a href="https://wa.me/34722639555?text=Hola%20Pablo,%20me%20gustaría%20hacer%20terapia%20contigo.%20Mi%20nombre%20es%20" target="_blank" title="Agenda una cita conmigo a través de WhatsApp"><img src="<?php echo url_for('_media/icon-whatsapp.png')?>" alt=""></a>
      </div>
      <div class="external-icon">
        <a href="https://t.me/terapiaconpablo" target="_blank" title="Agenda una cita conmigo a través de Telegram"><img src="<?php echo url_for('_media/icon-telegram.png')?>" alt=""></a>
      </div>
      <div class="external-icon">
        <a href="https://www.linkedin.com/in/pablo-rodriguez-gonzalez-52856526" target="_blank" title="Conoce mi perfil en LinkedIn"><img src="<?php echo url_for('_media/icon-linkedin.png')?>" alt=""></a>
      </div>
      <div class="external-icon">
        <a href="https://www.mundopsicologos.com/centros/pablo-rodriguez" target="_blank" title="Agenda una cita conmigo en Mundo Psicólogos"><img src="<?php echo url_for('_media/icon-mundo-psicologos.png')?>" alt=""></a>
      </div>
      <div class="external-icon">
        <a href="https://www.doctoralia.es/pablo-rodriguez-gonzalez" target="_blank" title="Agenda una cita conmigo en Doctoralia"><img src="<?php echo url_for('_media/icon-doctoralia.png')?>" alt=""></a>
      </div>
    </div>

    <div id="footer-politica-privacidad" class="section-wrapp footer-info">
      <div>
        <a href="politica-privacidad.php" target="_self" title="Conoce la política de privacidad de éste sitio">Política de privacidad</a>
      </div>
    </div>
    
    <div id="labaula-disclaimer">
      Hecha con mucho ♡ por la <a href="https://www.labaula.net" target="_blank" title="la baula: Estrategias de comunicación, diseño & other stories">bau-la</a> en Barcelona
    </div>

  </footer>
  <!-- Footer ends -->
  <script>
    var pageType = "<?php echo $pageType ?>";
    var page = "<?php echo $page ?>";
  </script>

  <script type="text/javascript" src="<?php echo url_for('_scripts/quotes.js')?>"></script>
  <script type="text/javascript" src="<?php echo url_for('_scripts/main.js')?>"></script>

</body>

</html>