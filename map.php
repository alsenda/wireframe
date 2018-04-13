<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body class="bg-primary h-100" onload="initMap();">
    <div id="wrap">
      <?php include('templates/navigation-shadow.php'); ?>
                <div id="map"></div>
                <div class="container">
                  <div class="row">
                  <div class="floating-panel panel-right col-2 text-right shadow-medium py-2">
                    <h1 class="pt-3 text-secondary">My credits</h1>
                    <div class="h4">
                      <span class="text-primary">24</span> / 500
                    </div>
                    <button class="btn btn-gold btn-block py-3">GET MORE CREDITS</button>
                    <p class="text-secondary text-center pt-2">Fill in our surveys and get more credits</p>
                    <button class="btn btn-gold btn-block py-3 mt-4">INVITE FRIENDS</button>
                    <p class="text-secondary text-center pt-2">Invite friends and get more credits when they use Zerocopy</p>
                  </div>
                  </div>
                </div>

        <!-- /.container -->

        <?php include('templates/footer.php'); ?>
        <!-- Bootstrap core JavaScript -->
      </div>
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
