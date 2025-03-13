<?php
include './top.php';
include './menu.php';
?>

<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>
    
    <div class="container-fluid text-center py-5">
        <h1 class="display-4">Profil Saya</h1>
        <p class="lead">Informasi lebih lengkap mengenai diri saya.</p>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="assets/img/azzam.jpg" class="card-img-top rounded-circle mx-auto d-block" alt="Foto Profil" style="width: 200px; height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Saya Muhamad Fadil Azzam</h5>
                        <p class="card-text">Saya adalah seorang pengembang web dan desainer UI/UX yang memiliki passion dalam dunia teknologi.</p>
                        <p><strong>Pendidikan:</strong> S1 Sistem Informasi</p>
                        <p><strong>Pengalaman:</strong> 3 tahun di bidang pengembangan web</p>
                        <p><strong>Keahlian:</strong> HTML, CSS, JavaScript, PHP, Laravel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './bottom.php';
?>
