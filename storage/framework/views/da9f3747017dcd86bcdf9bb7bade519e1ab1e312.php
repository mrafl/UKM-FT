<!-- Navabar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark fixed-top"
    style="background: #9850C3;">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
            <img src="<?php echo e(template('assets/img/unj.png')); ?>">
        </a>
        <a href="<?php echo e(route('index')); ?>" class="navbar-brand">UKM - Fakultas Teknik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
            aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="<?php echo e(route('index')); ?>">
                            <img src="./assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?php echo e(route('index')); ?>" class="nav-link">
                        <span class="nav-link-inner--text"><i class="fas fa-home mr-2"></i>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('ormawa')); ?>" class="nav-link">
                        <span class="nav-link-inner--text"><i class="fas fa-users mr-2"></i>Ormawa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('opmawa')); ?>" class="nav-link">
                        <span class="nav-link-inner--text"><i class="fas fa-user-tie mr-2"></i>Opmawa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('abouts')); ?>" class="nav-link">
                        <span class="nav-link-inner--text"><i class="fas fa-question mr-2"></i>Tentang Kami</span>
                    </a>
                </li>
            </ul>
            <hr class="d-lg-none" />
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\applications\UKM-FT-v2\resources\views/partials/navbar.blade.php ENDPATH**/ ?>