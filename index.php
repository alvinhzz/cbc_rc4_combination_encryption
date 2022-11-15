<?php require "view/v_heading.php";?>
<?php require "view/v_navbar.php";?>
<?php require "view/v_sidebar.php";?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid mt-2">

       <!-- Horizontal Form -->
       <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">File Enkripsi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="crypto/enkripsi.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputFileEnkripsi" class="col-sm-2 col-form-label">File input</label>
                      <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputFileEnkripsi" name="inputFileEnkripsi" accept=".txt">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="Kunci" class="col-sm-2 col-form-label">Kunci</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kunci" name="kunci" placeholder="Masukan Kunci">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer center">
                  <button type="submit" class="btn btn-info">Enkripsi</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

       <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0.15 ms</h3>

                <p>1525 karakter</p>
              </div>
              <div class="icon">
                <i class="ion ion-speedometer"></i>
              </div>    
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require "view/v_footer.php";?>
