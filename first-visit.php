<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body class="bg-lighter h-100">
    <div id="wrap">
    <?php include('templates/navigation.php'); ?>

    <!-- Page Content -->
        <div id="main" class="container pt-3 pb-5 px-0">

        <!-- row -->
          <div class="row">

          <!-- Post Content Column -->
            <div class="col-lg-9">
                <h1>
                  My documents
                </h1>


                <button href="first-visit.php" class="btn btn-lg btn-secondary text-primary py-3 px-4"
                 data-toggle="tooltip" data-placement="right" title="Upload from your computer the documents that you want to print for free">
                  <span class="h5"><i class="h3 fas fa-cloud-upload-alt mr-2"></i>
                  Upload your documents
                  </span>
                </button>

                  <div class="bg-white border-light rounded p-2 my-2">
                  <table class="table table-fixed">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 4%;">SELECT</th>
                        <th scope="col" style="width: 4%;"></th>
                        <th scope="col" style="width: 45%;">FILE NAME</th>
                        <th scope="col" style="width: 10%;">PAGES</th>
                        <th scope="col" style="width: 26%;">STATUS</th>
                        <th scope="col" style="width: 8%;"></th>
                        <th scope="col" style="width: 3%;">DELETE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" /></td>
                        <td><i class="fas fa-file-pdf text-danger"></i></td>
                        <td>Constitucion española 1</td>
                        <td>54</td>
                        <td><small class="text-secondary">READY TO PRINT</small></td>
                        <td class="noborder"><i class="fas fa-check-circle text-info"></i></td>
                        <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" /></td>
                        <td><i class="fas fa-file-pdf text-danger"></i></td>
                        <td>101 jokes about eggs</td>
                        <td>12</td>
                        <td><small class="text-secondary">READY TO PRINT</small></td>
                        <td class="noborder"><i class="fas fa-check-circle text-info"></i></td>
                        <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                      </tr>
                    </tbody>
                  </table>
                  <h1>SELECT ONE OPTION...</h1>
                  <a class="btn btn-sm text-white bg-blue py-2 px-3" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-home"></i> Home delivery</a>
                  <a class="btn btn-sm text-white bg-primary py-2 px-3" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-map"></i> Where to print</a>
                </div>
            </div>
            <div class="col-lg-3">

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

      <?php include('templates/footer.php'); ?>
      <!-- Bootstrap core JavaScript -->
    </div>
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
