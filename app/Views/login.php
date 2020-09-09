<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h3 text-primary-900 mb-4"><i class="fas fa-calendar-alt"></i> e-rapat</h1>
                                    </a>
                                    <h1 class="h4 text-gray-500 mb-4">Control Panel</h1>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" id="email" value="<?= set_value('email'); ?>" placeholder="Email Address" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <i class="fa fa-lock"></i> Sign In
                                    </button>
                                </form>
                                <hr class="sidebar-divider">
                                <div class="copyright text-center text-secondary my-auto">
                                    <span>Copyright &copy; e-rapat <?= date('Y'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>