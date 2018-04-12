<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body class="bg-lighter h-100">
    <div id="wrap">
      <?php include('templates/navigation.php'); ?>

        <!-- Page Content -->
        <div id="main" class="container pt-0 pb-5 px-0">

          <!-- row -->
            <div class="row">

            <!-- Post Content Column -->
              <div class="col-lg-9">
                  <h1 class="mt-3">
                    My documents
                  </h1>

                <!-- Title -->
                  <button href="first-visit.php" class="btn btn-lg btn-secondary text-primary py-3 px-4"
                   data-toggle="tooltip" data-placement="right" title="Upload from your computer the documents that you want to print for free">
                    <span class="h5"><i class="h3 fas fa-cloud-upload-alt mr-2"></i>
                    Upload your documents
                    </span>
                  </button>

                  <div class="bg-white border-light rounded p-2 my-2">
                    <table class="table">
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
                        <td><a href="#"><small class="text-secondary">GET MORE PRINT CREDITS</small></a></td>
                        <td class="noborder"><i class="fas fa-bell text-gold"></i></td>
                        <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" /></td>
                        <td><i class="fas fa-file-pdf text-danger"></i></td>
                        <td>101 jokes about eggs</td>
                        <td>12</td>
                        <td><small class="text-secondary">PRINTED</small></td>
                        <td class="noborder"><i class="fas fa-check-circle text-info"></i><i class="fas fa-check-circle text-info"></i></td>
                        <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" /></td>
                        <td><i class="fas fa-file-pdf text-danger"></i></td>
                        <td>Sitting for dummies 2</td>
                        <td>10</td>
                        <td><small class="text-secondary">READY TO PRINT</small></td>
                        <td class="noborder"><i class="fas fa-check-circle text-info"></i></td>
                        <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                      </tr>
                    </tbody>
                  </table>
                  <button class="btn btn-sm text-primary btn-secondary py-2 px-3"><i class="fas fa-home"></i> Home delivery</button>
                  <button class="btn btn-sm text-primary btn-secondary py-2 px-3"><i class="fas fa-map"></i> Where to print</button>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-3 text-right">
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
          <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php include('templates/footer.php'); ?>
        <!-- Bootstrap core JavaScript -->
      </div>
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
