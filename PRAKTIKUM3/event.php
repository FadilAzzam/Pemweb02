<?php
include './top.php';
include './menu.php';
?>

<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>
    
    <div class="container-fluid text-center py-5">
        <h1 class="display-4">Event Saya</h1>
        <p class="lead">Ikuti acara menarik yang akan saya adakan.</p>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="assets/img/azzam.jpg" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Workshop Web Development</h5>
                        <p class="card-text">Belajar membuat website modern dengan teknologi terbaru.</p>
                        <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="assets/img/azzam.jpg" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Olahraga Dunia</h5>
                        <p class="card-text">Mengasah Kemampuan dan pengalaman dari atlet-atlet dunia.</p>
                        <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="assets/img/azzam.jpg" class="card-img-top" alt="Event 2">
                    <div class="card-body">
                        <h5 class="card-title">Seminar UI/UX Design</h5>
                        <p class="card-text">Pelajari teknik desain antarmuka yang menarik dan user-friendly.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './bottom.php';
?>
