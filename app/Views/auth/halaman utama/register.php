<?=$this->extend('auth/figura/index'); ?>
<?=$this->section('content'); ?>
    <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                        </div class="card-body">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                       
                        <form class="user" action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user
                                <?php if(session('errors.username')) : 
                                    ?>is-invalid<?php endif ?>" id="username"name="username" 
                                    placeholder="<?=lang('Auth.username')?>"value="<?= old('username') ?>" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user<?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" 
                                    id="email" name="email"aria-describedby="emailHelp"
                                    placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password"name="password" class="form-control form-control-user   <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                        id=Password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password"  name="pass_confirm" class="form-control form-control-user <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off"
                                        id="exampleRepeatPassword" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block"><?=lang('Auth.register')?>
                                
                            </button>
                            <hr>
                           
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </action=>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                        <p class="small"><?=lang('Auth.alreadyRegistered')?><a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<?=$this->endSection(); ?>