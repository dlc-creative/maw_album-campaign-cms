 </div><!-- /.container -->

    <!-- <footer>
      <div class="container">
        <div class="footer-section">
          <div class="footer-logo">
            <h3>Marcus Alan Ward</h3>
          </div>
        </div>
      </div>
    </footer> -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php wp_footer(); ?>
    <script type="text/javascript">
        var wSize = jQuery(window).width();
        var resize = (wSize >= 1400) ? 400 : 280;
      jQuery(".content-blocks").mawSlider({margin: resize});
    </script>
  </body>
</html>
