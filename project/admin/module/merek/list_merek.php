<?php
include "../koneksi/config.php";
// session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>  
<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li>
        </ol>

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
 				<div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Kategori </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Merek</th>
                          <th><div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center btn-group-sm" role="group"> Aksi</div></th>
                        </tr>
               
                      </thead>

                      <tbody>
                                      <?php
                include "../koneksi/config.php";
                include "../koneksi/koneksi.php";
                $no=0;
                $kuerimerek= mysql_query("select * from tbl_merek");
                while($kat=mysql_fetch_array($kuerimerek)){
                $no++;
                ?>
                        <tr>
                        <td><?php echo "$no"; ?></td>
                          <td><?php echo $kat['nama_merek']; ?></td>
                          
                          <td><div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center btn-group-sm" role="group" >
                      <a href="<?php echo $admin_url; ?>module/merek/hapusmer.php?id_merek=<?php echo $kat['id_merek']; ?>">
                    <button  class="btn btn-pill btn-danger" type="button">
                      <i class="icon-trash"></i> Hapus</button></a>
                      <a href="<?php echo $admin_url; ?>admin.php?module=feditmer&id_merek=<?php echo $kat['id_merek']; ?>">
                     <button class="btn btn-pill btn-warning" type="button">
                      <i class="icon-pencil"></i> Edit</button></a>
                  </div></td>
                          
                        </tr>
                        <?php } ?>
                      </tbody>
                       
                    </table>
                   

                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                    <div  class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <a href="<?php echo $base_url; ?>admin/admin.php?module=tambahmer">
                    <button class="btn btn-primary" type="button">
                      <i class="icon-plus "></i> Tambah</button></a>
                  </div>
                  </div>
                </div>
              </div>

              <!-- /.col-->
            </div>
       </div>
       </div>
      </main>
</div>

<?php } ?>