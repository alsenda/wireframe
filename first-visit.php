<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body>
    <?php include('templates/navigation.php'); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-darker bg-darker m-0 p-0">
      <div class="container p-0">
          <ul class="list-inline m-0 p-0">
            <li class="list-inline-item bg-lighter px-5 py-2 rounded-top m-0 mt-1">
              <i class="fas fa-folder-open"></i> My documents
            </li>
            <li class="list-inline-item bg-dark px-5 py-2 rounded-top m-0 mt-1">
              <i class="fas fa-map"></i> Where to print
            </li>
          </ul>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container py-3">

      <!-- row -->
        <div class="row">

        <!-- Post Content Column -->
          <div class="col-lg-9">


              <button href="first-visit.php" class="btn btn-lg btn-secondary text-primary py-3 px-4">
                <span class="h5"><i class="h3 fas fa-cloud-upload-alt mr-2"></i>
                Upload your documents
                </span>
              </button>
              <div class="border bg-white border-light rounded p-2 my-2 w-100">
                <table class="table w-100">
                  <thead>
                    <tr>
                      <th scope="col" style="width: 4%;">SELECT</th>
                      <th scope="col" style="width: 4%;"></th>
                      <th scope="col" style="width: 50%;">FILE NAME</th>
                      <th scope="col" style="width: 6%;">PAGES</th>
                      <th scope="col" style="width: 30%;">STATUS</th>
                      <th scope="col" style="width: 3%;"></th>
                      <th scope="col" style="width: 3%;"></th>
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
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
