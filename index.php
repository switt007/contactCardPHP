<!DOCTYPE html>
<html lang="cs">

    <?php require __DIR__ . '/config.php'; ?>

      <!-- HEAD -->
      <?php require __DIR__ . '/layout/head.php'; ?>
      <!-- / End HEAD -->

  <body>
    <div id="wrapper">

      <!-- SIDEBAR -->
      <?php require __DIR__ . '/layout/sidebar.php'; ?>
      <!-- / End SIDEBAR -->

      <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">

          <!-- TOPBAR -->
          <?php require __DIR__ . '/layout/topbar.php'; ?>
          <!-- /End TOPBAR -->

        </div>
        
        <!-- Main content -->
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
            
              <!-- KONTAKTY -->
              <?php require __DIR__ . '/kontakty.php'; ?>
              <!-- /End KONTAKTY -->

          </div>
        </div>
        <!-- /End Main content -->

        <!-- FOOTER -->
        <?php require __DIR__ . '/layout/footer.php'; ?>
        <!-- /End FOOTER -->

      </div>
    </div>

    <!-- SCRIPTS -->
    <?php require __DIR__ . '/layout/scripts.php'; ?>
    <!-- /End SCRIPTS -->

  </body>
</html>
