<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">
 
   <!-- START DATA -->
   <div class="my-4 p-4 bg-white rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-2" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3 text-end">
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Kode Pelanggan</th>
                            <th class="col-md-4">Nama Pelanggan</th>
                            <th class="col-md-2">Nama Layanan</th>
                            <th class="col-md-2">Tipe iPhone</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1001</td>
                            <td>Ani</td>
                            <td>Ilmu Komputer</td>
                            <td>iPhone X</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>