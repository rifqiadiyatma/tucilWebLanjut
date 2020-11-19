<?= $this->extend('Admin\layouts\app') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About</h1>
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
                    <th colspan = "3">Tentang Penulis</th>
                  </thead>
                  <tr align = center>
                    <td rowspan ="4"><img src = "/dist/img/avatar5.png" alt = "gambar" ></td>
                    <td>Nama</td>
                    <td>Rifqi Adiyatma</td>
                  </tr>
                  <tr align = center>
                    <td>NPM</td>
                    <td>1817051055</td>
                  </tr>
                  <tr align = center>
                    <td>Jurusan</td>
                    <td>Ilmu Komputer</td>
                  </tr>
                  <tr align = center>
                    <td>Tanggal Lahir</td>
                    <td>1 April 2000</td>
                  </tr>
             </table>

    </div>
    <?= $this->endSection('content') ?>