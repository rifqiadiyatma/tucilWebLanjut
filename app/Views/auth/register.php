<?= $this->extend('auth\layouts\app') ?>

<?= $this->section('content') ?>
    <div class="container h-100">
        <div class="row align-items-center h-100 align-middle">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <center><h3>FORM REGISTER</h3></center><br />
                    
                    <?php $validation = session()->getFlashdata('validation'); ?>

                    <form action="<?= current_url() ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input autocomplete="off" autofocus="on" type="text" name="first_name" id="first_name" value="<?= old('first_name') ?>" class="form-control <?= $validation && $validation->hasError('first_name') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('first_name')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('first_name')?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input autocomplete="off" type="text" name="last_name" id="last_name" value="<?= old('last_name') ?>" class="form-control <?= $validation && $validation->hasError('last_name') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('last_name')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('last_name')?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input autocomplete="off" type="text" name="email" id="email" value="<?= old('email') ?>" class="form-control <?= $validation && $validation->hasError('email') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('email')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email')?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Username</label>
                            <input autocomplete="off" type="text" name="username" id="username" value="<?= old('username') ?>" class="form-control <?= $validation && $validation->hasError('username') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('username')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username')?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" value="<?= old('password') ?>" class="form-control <?= $validation && $validation->hasError('password') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('password')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password')?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" value="<?= old('cpassword') ?>" class="form-control <?= $validation && $validation->hasError('cpassword') ? 'is-invalid' : '' ?>">
                            <?php if($validation && $validation->hasError('cpassword')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('cpassword')?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <button class="btn btn-primary btn-block">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?= $this->endsection('content') ?>