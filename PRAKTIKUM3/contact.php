<?php
include './top.php';
include './menu.php';
?>

<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>
    
    <div class="container-fluid text-center py-5">
        <h1 class="display-4">Kontak Saya</h1>
        <p class="lead">Silakan hubungi saya melalui informasi di bawah ini.</p>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Informasi Kontak</h5>
                        <p><strong>Email:</strong> email@example.com</p>
                        <p><strong>Telepon:</strong> +62 812 3456 7890</p>
                        <p><strong>Alamat:</strong> Jalan Situ Pancoran Mas No. 123, Kota Depok</p>
                        <a href="mailto:email@example.com" class="btn btn-primary">Kirim Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './bottom.php';
?>
