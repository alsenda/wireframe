<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <?php include('templates/navigation.php'); ?>
  <div id="nav" data-type="include" data-src="components/navigation.html"></div>
  <body>

    <!-- Page Content -->
    <div class="container pb-5">

      <!-- row -->
        <div class="row">

        <!-- Post Content Column -->
          <div class="col-lg-8">

            <!-- Title -->
              <h4 class="my-4 text-primary">MY DOCUMENTS</h4>

              <a href="first-visit.php" class="btn btn-lg btn-secondary text-primary py-3 px-4">
                <span class="h5"><i class="h3 fas fa-cloud-upload-alt"></i>
                UPLOAD YOUR DOCUMENTS
                </span>
              </a>

              <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">SELECT</th>
                    <th scope="col"></th>
                    <th scope="col">FILE NAME</th>
                    <th scope="col">PAGES</th>
                    <th scope="col">STATUS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td><img src="images/pdficon.png" width="28px" /></td>
                    <td>Constitucion española 1</td>
                    <td>54</td>
                    <td><small class="text-secondary">READY TO PRINT</small></td>
                    <td class="noborder"><i class="fas fa-check-circle text-info"></i></td>
                    <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td><img src="images/pdficon.png" width="28px" /></td>
                    <td>101 jokes about eggs</td>
                    <td>12</td>
                    <td><small class="text-secondary">READY TO PRINT</small></td>
                    <td class="noborder"><i class="fas fa-check-circle text-info"></i></td>
                    <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                  </tr>
                </tbody>
              </table>
              <a class="btn btn-sm text-white bg-blue py-2 px-3" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-home"></i> Home delivery</a>
              <a class="btn btn-sm text-white bg-primary py-2 px-3" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-map"></i> Where to print</a>
          </div>
          <div class="col-lg-4">
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include('templates/footer.php'); ?>
    <!-- Bootstrap core JavaScript -->
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
