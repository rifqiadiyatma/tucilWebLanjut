<?= $this->extend('Admin\layouts\app') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/AdminController/index">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
            <table border = 1 cellpadding = 20 align = center>
                  <thead align = center>
                    <th>Gambar Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                  </thead>
                  <tr align = center>
                    <td><img src = "/dist/img/prod-1.jpg" width="150px" height="150px" class="brand-image img-circle elevation-3" alt = "sepatu 1"></td>
                    <td>Sepatu 1</td>
                    <td>3 buah</td>
                  </tr>
                  <tr align = center>
                    <td><img src = "/dist/img/prod-2.jpg" width="150px" height="150px" class="brand-image img-circle elevation-3" alt = "sepatu 1"></td>
                    <td>Sepatu 2</td>
                    <td>1 buah</td>
                  </tr>
                  <tr align = center>
                    <td><img src = "/dist/img/prod-3.jpg" width="150px" height="150px" class="brand-image img-circle elevation-3" alt = "sepatu 1"></td>
                    <td>Sepatu 3</td>
                    <td>6 buah</td>
                  </tr>
                  <tr align = center>
                    <td><img src = "/dist/img/prod-4.jpg" width="150px" height="150px" class="brand-image img-circle elevation-3" alt = "sepatu 1"></td>
                    <td>Sepatu 4</td>
                    <td>2 buah</td>
                  </tr>
                  <tr align = center>
                    <td><img src = "/dist/img/prod-5.jpg" width="150px" height="150px" class="brand-image img-circle elevation-3" alt = "sepatu 1"></td>
                    <td>Sepatu 5</td>
                    <td>3 buah</td>
                  </tr>
            </table>

    </div>
    <?= $this->endSection('content') ?>