<?php
include './top.php';
include './menu.php';
?>

<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>
    
    <div class="container-fluid text-center py-5">
        <h1 class="display-4">Status Saya</h1>
        <p class="lead">Update terbaru dari saya.</p>

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Project Baru Sedang Dikerjakan</h5>
                        <p class="mb-1">Saat ini saya sedang mengembangkan sebuah aplikasi berbasis web dengan teknologi terbaru.</p>
                        <small class="text-muted">3 hari yang lalu</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Memulai Blog Pribadi</h5>
                        <p class="mb-1">Saya mulai menulis blog tentang pengalaman saya dalam dunia teknologi.</p>
                        <small class="text-muted">2 minggu yang lalu</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './bottom.php';
?>
