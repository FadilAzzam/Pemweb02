<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <!-- Bagian Form -->
        <div class="col-md-8">
            <h2>Belanja Online</h2>
            <form method="POST" action="form_belanja.php">
                <div class="mb-3">
                    <label class="form-label">Customer</label>
                    <input type="text" class="form-control" name="customer" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Produk</label><br>
                    <?php
                    // Daftar harga produk menggunakan array
                    $harga_produk = [
                        "TV" => 4200000,
                        "Kulkas" => 3100000,
                        "MESIN CUCI" => 3800000
                    ];

                    // Loop untuk menampilkan pilihan produk
                    foreach ($harga_produk as $produk => $harga) {
                        echo "<input type='radio' name='produk' value='$produk' required> $produk<br>";
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Beli</label>
                    <input type="number" class="form-control" name="jumlah" required>
                </div>
                <button type="submit" class="btn btn-success" name="proses">Kirim</button>
            </form>

            <hr>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $customer = $_POST["customer"];
                $produk = $_POST["produk"];
                $jumlah = $_POST["jumlah"];
                $total_belanja = $harga_produk[$produk] * $jumlah;

                echo "<h4>Hasil Belanja</h4>";
                echo "Nama Customer: <strong>$customer</strong><br>";
                echo "Produk Pilihan: <strong>$produk</strong><br>";
                echo "Jumlah Beli: <strong>$jumlah</strong><br>";
                echo "Total Belanja: <strong>Rp " . number_format($total_belanja, 0, ",", ".") . "</strong>";
            }
            ?>
        </div>

        <!-- Bagian Daftar Harga -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <div class="card-body">
                    <?php
                    // Loop untuk menampilkan daftar harga
                    foreach ($harga_produk as $produk => $harga) {
                        echo "<p>$produk : Rp " . number_format($harga, 0, ",", ".") . "</p>";
                    }
                    ?>
                </div>
                <div class="card-footer text-danger">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>