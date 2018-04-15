<!DOCTYPE html>
<html lang="en">
  <?php include('templates/head.php'); ?>
  <body class="bg-primary h-100">
    <div id="wrap" class="bg-full pt-0">
      <?php include('templates/navigation-transparent2.php'); ?>

        <!-- Page Content -->
        <div id="main" class="container-fluid pt-0 pb-4 px-5">

          <!-- row -->
            <div class="row">

            <!-- Post Content Column -->
              <div id="upload-widget" class="col-lg-3 col-md-6 col-sm-12 bg-white px-4 py-0 mb-2 shadow-medium">
                <div class="my-1 py-2">

                  <div class="row pb-0">
                    <div class="col-12  p-0">
                      <div class="border dashed border-thick pt-1 pb-4 text-center bg-lighter">
                        <i class="fas fa-cloud-upload-alt display-2 mt-4 mb-2 text-light"></i>
                        <div class="h4">Drag your files to upload</div>
                      </div>
                      <button class="btn btn-block bg-cyan text-white py-3 mt-0 font-weight-bold btn-sm">BROWSE FILES</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 pr-0 pb-5">
                      <div style="height: 100%;">
                        <ul id="list-files" class="list-group">
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0 p-1">
                                <img src="images/zc_loading.gif" width="28px"/>
                              </div>
                              <div class="col-8">
                                <div class="filename text-truncate">How to process a file in Zerocopy.pdf</div>
                                <div class="status ready text-secondary">processing...</div>
                              </div>
                              <div class="col-3 text-right">75%</div>
                            </div>
                            <div class="row p-0 m-0">
                              <div class="col-12 p-0 m-0">
                              </div>
                            </div>
                          </li>
                          <li class="uploading">
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" disabled/></div>
                              <div class="col-8">
                                <i class="float-left fas fa-file-pdf text-light" style="font-size: 26px; padding: 5px 10px 10px 0;"></i>
                                <div class="filename text-truncate text-secondary"> ConstitucionESP.pdf</div>
                                <div class="status ready text-secondary text-truncate"><i class="fas fa-dot-circle text-warning"></i> get more credits to print this file</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-03-09 18:41');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3 text-right text-magenta"><strong>45</strong> <small>pages</small></div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <i class="float-left fas fa-file-pdf text-primary" style="font-size: 26px; padding: 5px 10px 10px 0;"></i>
                                <div class="filename"> Sitting for Dummies.pdf</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-04-11 9:01');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3 text-right"><strong>12</strong> <small>pages</small></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row p-0">
                    <div class="col-6 text-right pl-0 pr-1">
                        <a class="btn btn-block text-white bg-cyan py-2 px-3" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-home"></i> Home delivery</a>
                    </div>
                    <div class="col-6 text-right pr-0 pl-1">
                        <a class="btn btn-block text-white bg-cyan py-2 px-3" href="map.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-map"></i> Where to print</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-2 col-sm-12">
              </div>
              <!-- /.col -->
              <div class="col-lg-3 col-md-4 col-sm-12 text-right">
                <h1 class="pt-0 text-white">My credits</h1>
                <div class="h4">
                  <span class="text-white">24</span> / 500
                </div>
                <button class="btn bg-cyan btn-block py-3 font-weight-bold text-white">GET MORE CREDITS</button>
                <p class="text-blue text-center pt-2">Fill in our surveys or invite your friends and get more credits</p>
              </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php include('templates/footer2.php'); ?>
        <!-- Bootstrap core JavaScript -->
      </div>
  </body>
  <?php include('templates/javascripts.php'); ?>

</html>
