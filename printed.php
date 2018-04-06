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
          <div class="col-lg-9">

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
                    <td><a href="#"><small class="text-secondary">GET MORE PRINT CREDITS</small></a></td>
                    <td class="noborder"><i class="fas fa-check-circle text-gold"></i></td>
                    <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td><img src="images/pdficon.png" width="28px" /></td>
                    <td>101 jokes about eggs</td>
                    <td>12</td>
                    <td><small class="text-secondary">PRINTED</small></td>
                    <td class="noborder"><i class="fas fa-check-circle text-info"></i><i class="fas fa-check-circle text-info"></i></td>
                    <td class="noborder"><i class="fas fa-trash-alt text-secondary"></i></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td><img src="images/pdficon.png" width="28px" /></td>
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
          <div class="col-lg-3 text-right mt-3" style="border-left: 1px solid #f3f3f3;">
            <div>
              <small class="h5">MY CREDITS</small>
              <p>43</p>
            </div>
            <button class="btn btn-lg btn-gold px-5">Get more credits</button>
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
