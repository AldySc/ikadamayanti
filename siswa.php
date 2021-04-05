<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DATA SISWA</title>
    
  </head>
<body>

  <?php

  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

     
      
   <!-- Main Content -->
      <div class="main-content bg-light">
        <section class="section">
          <div class="section-header bg-success">
            <h1>DATA SISWA</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">DATA SISWA</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">DATA SISWA</h2>
            <p class="section-lead">List Data SISWA</p>

            <div class="row">
              <div class="col-12">
                <div class="card bg-warning text-dark">
                  <div class="card-header bg-success">
                    <h4>LIST SISWA</h4>
                    <div class="card-header-form">
                      <form>
                          <div class="input-group-btn">
                            <a href="tambah_siswa.php" class="btn btn-dark"><i class="fas fa-plus"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                       <thead>
                          <tr>
                          <th>no</th>
                            <th>nisn</th>
                            <th>nis</th>
                           <th>nama siswa</th>
                            <th>kelas</th>
                            <th>alamat</th>
                            <th>no telp</th>
                            <th>tahun masuk</th>
                            <th>spp perbulan</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                         <tbody>
                           <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM siswa,kelas,spp where siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
                              $result = mysqli_query($koneksi, $query);
                              //mengecek apakah ada error ketika menjalankan query
                              if(!$result){
                                die ("Query Error: ".mysqli_errno($koneksi).
                                   " - ".mysqli_error($koneksi));
                              }

                              //buat perulangan untuk element tabel dari data mahasiswa
                              $no = 1; //variabel untuk membuat nomor urut
                              // hasil query akan disimpan dalam variabel $data dalam bentuk array
                              // kemudian dicetak dengan perulangan while
                              while($row = mysqli_fetch_assoc($result))
                              {
                              ?>
                        <tr>  
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row['nisn']; ?></td>
                          <td><?php echo $row['nis']; ?></td>
                          <td><?php echo $row['nama']; ?></td>
                          <td><?php echo $row['nama_kelas']; ?></td>
                       <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['no_telp']; ?></td>
                          <td><?php echo $row['tahun']; ?></td>
                          <td><?php echo $row['nominal']; ?></td>
                       <td>
                          <a href="edit_siswa.php?id=<?php echo $row['id_kelas']; ?>"class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="proses_hapussiswa.php?id=<?php echo $row['id_kelas']; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                         <?php
                           $no++; //untuk nomor urut terus bertambah 1
                           }
                         ?>
                         </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
        </div>
      </footer>
    </div>
  </div>
</body>
</html>