<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body>
  <?php include('templates/navigation.php'); ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-darker bg-darker m-0 p-0">
      <div class="container p-0">
          <ul class="list-inline m-0 p-0">
            <li class="list-inline-item bg-lighter px-5 py-2">
              <i class="fas fa-folder-open"></i> My documents
            </li>
          </ul>
          <ul class="list-inline m-0 p-0">
            <li class="list-inline-item">
              <button class="btn btn-sm btn-gold px-5">Get more credits</button>
            </li>
            <li class="list-inline-item">
            <small class="h5">My credits <strong>43</strong></small>
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

            <!-- Title -->
              <button href="first-visit.php" class="btn btn-lg btn-secondary text-primary py-3 px-4">
                <span class="h5"><i class="h3 fas fa-cloud-upload-alt"></i>
                UPLOAD YOUR DOCUMENTS
                </span>
              </button>

              <div class="border bg-white border-light rounded p-2 my-2">
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SELECT</th>
                    <th scope="col"></th>
                    <th scope="col">FILE NAME</th>
                    <th scope="col">PAGES</th>
                    <th scope="col">STATUS</th>
                    <th></th>
                    <th></th>
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
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include('templates/footer.php'); ?>
    <!-- Bootstrap core JavaScript -->
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
