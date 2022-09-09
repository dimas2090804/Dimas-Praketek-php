<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Jurusan</title>
  </head>
  <style type="text/css">
         .bg-utama{
         background-image: url(https://idcloudhost.com/wp-content/uploads/2020/03/template-1.jpg);
         background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%;
         width: 100%;
         display: table;
         vertical-align: middle;
         }
        
      </style>
 
  <body>
  <div class="bg-utama">
      <div class="konten-ditengah">
            <h1 style="color:black">SMK PGRI 2 PONOROGO</h1>
              <P style="color:black">Jln.Soekarno-Hatta Kec.Babadan Kab.Ponorogo</p>
         </div>
 
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA JURUSAN
            </div>
            <div class="card-body">
              <a href="tambah-jurusan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA JURUSAN</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM jurusan");
                      while($row = mysqli_fetch_array($query)){
                  ?>
 
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['jurusan'] ?></td>
                      <td class="text-center">
                        <a href="edit-jurusan.php?id=<?php echo $row['id_jurusan'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-jurusan.php?id=<?php echo $row['id_jurusan'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
 
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
