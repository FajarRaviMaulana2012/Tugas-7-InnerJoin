<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inner-Join Database</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h4>Berikut adalah tugas pertemuan 7 - Menampilkan Data Table MYSQL</h4>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Tabel Barang</h4>
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM barang';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)){
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['KODE_BARANG']?></td>
                        <td><?php echo $row['NAMA_BARANG']?></td>
                        <td><?php echo $row['HARGA']?></td>
                        <td><?php echo $row['STOK']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table Customer</h4>
                <thead>
                    <tr>
                        <th>ID Customer</th>
                        <th>Nama Customer</th>
                        <th>Alamat Customer</th>
                        <th>Nomor Telepon</th>
                    </tr>
                </thead>
                <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM customer';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)){
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['ID_CUST']?></td>
                        <td><?php echo $row['NAMA_CUST']?></td>
                        <td><?php echo $row['ALAMAT_CUST']?></td>
                        <td><?php echo $row['NO_TLP']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table Inner Join</h4>
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT br.kode_barang, nama_barang, harga, stok
                FROM barang br
                JOIN transaksi ds USING(kode_barang) ';
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['kode_barang']?></td>
                        <td><?php echo $row['nama_barang']?></td>
                        <td><?php echo $row['harga']?></td>
                        <td><?php echo $row['stok']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table LEFT Join</h4>
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jumlah Barang</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT br.kode_barang, nama_barang, harga, stok , tgl_transaksi, jmlh_barang
                FROM barang br
                LEFT JOIN transaksi ds USING(kode_barang) ';
                
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['kode_barang']?></td>
                        <td><?php echo $row['nama_barang']?></td>
                        <td><?php echo $row['harga']?></td>`
                        <td><?php echo $row['tgl_transaksi']?></td>
                        <td><?php echo $row['jmlh_barang']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>

    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>