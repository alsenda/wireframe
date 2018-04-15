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
                      <!--
                      <div class="border dashed border-thick pt-1 pb-4 text-center bg-lighter">
                        <i class="fas fa-plus display-4 mt-4 mb-2 text-light"></i>
                        <div class="h4">Drag your files to upload</div>
                      </div>

                      -->
                      <button class="font-weight-bold btn btn-block btn-light border text-secondary py-3 my-0 font-weight-bold btn-sm">
                        <span class="h5">
                          <i class="fas fa-plus text-cyan mr-2" style="font-size: 28px;vertical-align: middle;"></i> Add documents
                        </span>
                      </button>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 pr-0 pb-2">
                      <div style="height: 100%;">
                        <ul id="list-files" class="list-group">
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-1 p-0 p-1">
                                <img src="images/zc_loading.gif" width="28px" style="filter: hue-rotate(70deg);"/>
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
                                  <div class="progress-bar bg-cyan" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></li>
                          <li class="list-group-item border-bottom">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" disabled/></div>
                              <div class="col-8">
                                <i class="float-left fas fa-check text-gold" style="font-size: 26px; padding: 5px 10px 10px 0;"></i>
                                <div class="filename text-truncate text-secondary"> ConstitucionESP.pdf</div>
                                <div class="status ready text-secondary text-truncate"><i class="fas fa-dot-circle text-gold"></i> get more credits to print this file</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-03-09 18:41');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3 text-right text-gold"><strong>45</strong> <small>pages</small></div>
                            </div>
                          </li>
                          <li class="list-group-item border-bottom text-truncate">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <i class="float-left fas fa-check text-cyan" style="font-size: 26px; padding: 5px 10px 10px 0;"></i>
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
                          <li class="list-group-item text-truncate">
                            <div class="row">
                              <div class="col-1 p-0"><input type="checkbox" /></div>
                              <div class="col-8">
                                <i class="float-left fas fa-check text-cyan" style="font-size: 26px; padding: 5px 10px 10px 0;"></i>
                                <div class="filename"> My first Zerocopy document.pdf</div>
                                <div class="details">
                                  <?php
                                  $date = new DateTime('2018-04-11 9:01');
                                  echo $date->format('jS F Y, H:i');
                                  ?>
                                </div>
                              </div>
                              <div class="col-3 text-right"><strong>9</strong> <small>pages</small></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row p-0">
                    <div class="col-6 text-right pl-0 pr-1">
                        <a class="btn btn-block text-white btn-cyan py-2 px-3 font-weight-bold" href="printed.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-home text-light"></i> Home delivery</a>
                    </div>
                    <div class="col-6 text-right pr-0 pl-1">
                        <a class="btn btn-block text-white btn-cyan py-2 px-3 font-weight-bold" href="map.php" data-toggle="tooltip" data-placement="top" title="Try our home delivery service or go to your nearest Zerocopy printing location to get your documents for free if you are in a rush"><i class="fas fa-map text-light"></i> Where to print</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="message warning">
                  Fill in our surveys or invite your friends and <button class="btn btn-gold btn-sm font-weight-bold text-white">GET MORE CREDITS</button>
                </div>
                <div class="message success">
                  You just earned 250 credits by filling up a promo code.
                </div>
                <div class="message info">
                  In 6 days your credits will be refilled to <span class="text-warning">500</span>.
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="text-white">Ad space</div>
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
