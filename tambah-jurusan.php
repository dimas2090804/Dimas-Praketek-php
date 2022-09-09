<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah jurusan DIMASARDA</title>
    <style type="text/css">
         .bg-utama{
         background-image: url(https://placekitten.com/g/1280/720);
         background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%;
         width: 100%;
         display: table;
         vertical-align: middle;
         }
        
      </style>
  </head>
 
  <body>
  <div class="bg-utama">
      <div class="konten-ditengah">
            <h1 style="color:white">SMK PGRI 2 PONOROGO</h1>
              <P style="color:white">Jln.Soekarno-Hatta Kec.Babadan Kab.Ponorogo</p>
         </div>
      </div>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              SILAHKAN TAMBAHKAN JURUSAN
            </div>
            <div class="card-body">
              <form action="simpan-jurusan.php" method="POST">

                <div class="form-group">
                  <label>Nama jurusan</label>
                  <input type="text" name="jurusan" placeholder="Masukkan Nama jurusan anda" 
                  class="form-control">
                </div>
 
 
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  
  </body>
</html>
