<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body class="bg-primary h-100">
    <div id="wrap" class="bg-light">
      <?php include('templates/navigation.php'); ?>

        <!-- Page Content -->
        <div id="main" class="container pt-0 pb-5 px-0">

          <!-- row -->
            <div class="row">

            <!-- Post Content Column -->
              <div class="col-lg-9">
                <div class="my-2 py-4">
                  <div class="row pb-0">
                    <h3>File upload</h3>
                  </div>

                  <div class="row pb-0">
                    <div class="col-5 p-0">
                      <div class="border dashed border-thick py-5 text-center bg-lighter">
                        <i class="fas fa-cloud-upload-alt display-1 text-primary mt-5 mb-3"></i>
                        <div class="h4 mb-4">Drag your files to upload</div>
                      </div>
                      <button class="btn btn-block bg-blue text-white py-2">BROWSE FILES</button>
                    </div>
                    <div class="col-7">
                      <div class="">
                        <ul id="list-files" class="list-group">
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0">
                                <img src="images/zc_loading.gif" width="35px"/>
                              </div>
                              <div class="col-8">
                                <div class="filename text-truncate"><i class="fas fa-file-pdf text-danger"></i> New file dolor sit amet asdfa sdfasd fasdf asdf asdf asdf asdf.pdf</div>
                                <div class="status ready text-info"><i class="fas fa-dot-circle text-info"></i> uploading</div>
                              </div>
                              <div class="col-3"></div>
                            </div>
                            <div class="row p-0 m-0">
                              <div class="col-12 p-0 m-0">
                              </div>
                            </div>
                          </li>
                          <li class="uploading">
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <div class="filename"><i class="fas fa-file-pdf text-danger"></i> ConstitucionESP.pdf</div>
                                <div class="status ready text-primary"><i class="fas fa-dot-circle text-primary"></i> ready to print</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-03-09 18:41');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3"><strong>45</strong> <small>pages</small></div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <div class="filename"><i class="fas fa-file-pdf text-danger"></i> Sitting for Dummies.pdf</div>
                                <div class="status ready text-primary"><i class="fas fa-dot-circle text-primary"></i> ready to print</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-04-11 9:01');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3"><strong>12</strong> <small>pages</small></div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <div class="filename"><i class="fas fa-file-pdf text-danger"></i> Moar_testing.pdf</div>
                                <div class="status ready text-primary"><i class="fas fa-dot-circle text-primary"></i> ready to print</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-03-17 15:41');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3"><strong>45</strong> <small>pages</small></div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <div class="filename"><i class="fas fa-file-pdf text-danger"></i> TESTING.pdf</div>
                                <div class="status ready text-primary"><i class="fas fa-dot-circle text-primary"></i> ready to print</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-03-17 15:41');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3"><strong>45</strong> <small>pages</small></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row pb-0">
                    <div class="col-12 text-right">
                      <div class="text-right">
                  <a class="btn btn-sm text-white bg-blue py-2 px-3" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-home"></i> Home delivery</a>
                  <a class="btn btn-sm text-white bg-primary py-2 px-3" href="map.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-map"></i> Where to print</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-3 text-right border-left">
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
