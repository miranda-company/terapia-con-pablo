  </div>
  <!-- Main container ends -->
  
  <!-- Page overlay -->
  <div id="page-overlay" class="page-overlay"></div>
  <!-- Page overlay ends -->

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