<?= $this->extend('auth\layouts\app') ?>

<?= $this->section('content') ?>
    <div class="container h-100">
        <div class="row align-items-center h-100 align-middle">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <center><h3>FORM LOGIN</h3></center><br />
                    <form action="<?= current_url() ?>" method="POST">
                    <?php if(session()->has('error')): ?>
                        <p class="text-danger text-center"><?= session()->getFlashdata('error') ?></p>
                    <?php endif; ?>
                    
                    <?php $validation = session()->getFlashdata('validation'); ?>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input autocomplete="off" autofocus="on" type="text" name="username" id="username" value="<?= old('username') ?>" class="form-control <?= $validation && $validation->hasError('username') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('username')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username')?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control <?= $validation && $validation->hasError('password') ? 'is-invalid' : '' ?>" >
                            <?php if($validation && $validation->hasError('password')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password')?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block">Login</button>
                        <br><center><a href="<?= site_url('/register') ?>">Register</a><br /><br /></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endsection('content') ?>

