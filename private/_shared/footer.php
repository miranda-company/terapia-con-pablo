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
    &copy; <?php echo date('Y'); ?> la baula
  </footer>
  <!-- Footer ends -->

  <script type="text/javascript" src="<?php echo url_for('_scripts/main.js')?>"></script>

</body>

</html>

<?php 
  // Disconnect from the database
  db_disconnect($db);
?>