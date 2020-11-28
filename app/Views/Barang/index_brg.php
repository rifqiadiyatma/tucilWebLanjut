<?= $this->extend('Barang\layouts\app') ?>

<?= $this->section('content') ?> 

<div class="jumbotron jumbotron-fluid">
			<div class="container text-center">
                <h1 class="display-5">Data Barang</h1>
                <!-- gbr1 -->
                <div class="row mt-5">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <a href = "/detail/barang1" ><img class="card-img-top" src="/dist/img/prod-1.jpg" width ="250" height="300" alt="Card image cap"></a>
                            <div class="card-body">
                                <p class="card-text">Ini Namanya sepatu satu, Ini Sepatu satu, Ini Sepatu satu, Ini Sepatu satu, Ini Sepatu satu, Ini Sepatu satu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                            <a href = "/detail/barang2"><img class="card-img-top" src="/dist/img/prod-2.jpg" width ="250" height="300" alt="Card image cap"></a>
                            <div class="card-body">
                                <p class="card-text">Ini Namanya sepatu dua, Ini Sepatu dua, Ini Sepatu dua, Ini Sepatu dua, Ini Sepatu dua, Ini Sepatu dua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                            <a href = "/detail/barang3"><img class="card-img-top" src="/dist/img/prod-5.jpg" width ="250" height="300" alt="Card image cap"></a>
                            <div class="card-body">
                                <p class="card-text">Ini Namanya sepatu tiga, Ini Sepatu tiga, Ini Sepatu tiga, Ini Sepatu tiga, Ini Sepatu tiga, Ini Sepatu tiga.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>



<?= $this->endSection('content') ?>

