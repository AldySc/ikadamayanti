<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DATA KELAS</title>
    
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
            <h1>DATA KELAS</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">DATA KELAS</div>
            </div>
          </div>

         <center>
        <h2>Laporan</h2>
      <center>
      <form method="POST" action="ekspor1.php" enctype="multipart/form-data" >
      <section class="base">
    Laporan Transaksi
        <div>
    
          <label>Dari Tanggal</label>
          <input type="date" name="daritanggal" autofocus="" required="" />
        </div>
        <div>
          <label>Sampai Tanggal</label>
         <input type="date" name="sampaitanggal" required=""/>
        </div>
        
        <div>
         <button type="submit">Ekspor ke Word</button>
        </div>
        </section>
      </form>
</body>
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