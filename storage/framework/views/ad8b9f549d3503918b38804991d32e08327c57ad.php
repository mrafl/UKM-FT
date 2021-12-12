<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand p-1" href="/">
                <img src="<?php echo e(template('assets/img/dashboard.png')); ?>" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <?php if ($title === 'Akademik'): ?>
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('index')); ?>">
                                <i class="fas fa-home text-green"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($subTitle === 'Mahasiswa' ? 'active' : ''); ?>"
                               href="#mahasiswa"
                               data-toggle="collapse" role="button"
                               aria-expanded="<?php echo e($subTitle === 'Mahasiswa' ? 'true' : ''); ?>"
                               aria-controls="mahasiswa">
                                <i class="fas fa-user-graduate text-red"></i>
                                <span class="nav-link-text">Mahasiswa</span>
                            </a>
                            <div class="collapse <?php echo e($subTitle === 'Mahasiswa' ? 'show' : ''); ?>"
                                 id="mahasiswa">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo e($subTitle2 === 'Mahasiswa Aktif' ? '#' : route('mahasiswaAktif')); ?>"
                                           class="nav-link <?php echo e($subTitle2 === 'Mahasiswa Aktif' ? 'active' : ''); ?>">
                                            Mahasiswa Aktif</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e($subTitle2 === 'Sebaran Mahasiswa' ? '#' : route('sebaranMahasiswa')); ?>"
                                           class="nav-link <?php echo e($subTitle2 === 'Sebaran Mahasiswa' ? 'active' : ''); ?>">
                                            Sebaran Mahasiswa</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>


                <?php elseif ($title === 'SDM'): ?>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('index')); ?>">
                                <i class="fas fa-home text-green"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($subTitle === 'Kualifikasi' ? 'active' : ''); ?>"
                               href="<?php echo e($subTitle === 'Kualifikasi' ? '#' : route('SDM', ['slug' => 'kualifikasi'])); ?>">
                                <i class="fas fa-users text-red"></i>
                                <span class="nav-link-text">Kualifikasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($subTitle === 'Golongan' ? 'active' : ''); ?>"
                               href="<?php echo e($subTitle === 'Golongan' ? '#' : route('SDM', ['slug' => 'golongan'])); ?>">
                                <i class="fas fa-id-card-alt text-blue"></i>
                                <span class="nav-link-text">Golongan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($subTitle === 'Jabatan Fungsional' ? 'active' : ''); ?>"
                               href="<?php echo e($subTitle === 'Jabatan Fungsional' ? '#' : route('SDM', ['slug' => 'jabatanFungsional'])); ?>">
                                <i class="fas fa-briefcase text-orange"></i>
                                <span class="nav-link-text">Jabatan Fungsional</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($subTitle === 'Usia' ? 'active' : ''); ?>"
                               href="<?php echo e($subTitle === 'Usia' ? '#' : route('SDM', ['slug' => 'usia'])); ?>">
                                <i class="fas fa-calendar-day text-info"></i>
                                <span class="nav-link-text">Usia</span>
                            </a>
                        </li>
                    </ul>

                <?php elseif ($title === 'Akreditasi Program Studi'): ?>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('index')); ?>">
                                <i class="fas fa-home text-green"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>

                        <?php if (session('role') == 'rektor'): ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($subTitle2 === 'Universitas' ? 'active' : ''); ?>"
                                   href="<?php echo e(route('akreditasiUniversitas')); ?>">
                                    <i class="fas fa-school text-red"></i>
                                    <span class="nav-link-text">Universitas</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($subTitle2 === 'Fakultas' ? 'active' : ''); ?>"
                               href="<?php echo e(route('akreditasiFakultas')); ?>">
                                <i class="fas fa-university text-blue"></i>
                                <span class="nav-link-text">Fakultas</span>
                            </a>
                        </li>
                        <?php if (session('role') == 'rektor'): ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($subTitle === 'Akreditasi' ? 'active' : ''); ?>"
                                   href="#akreditasi" data-toggle="collapse" role="button"
                                   aria-expanded="<?php echo e($subTitle === 'Akreditasi' ? 'true' : ''); ?>"
                                   aria-controls="mahasiswa">
                                    <i class="fas fa-award text-orange"></i>
                                    <span class="nav-link-text">Akreditasi</span>
                                </a>
                                <div class="collapse <?php echo e($subTitle === 'Akreditasi' ? 'show' : ''); ?>"
                                     id="akreditasi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Rekap Akreditasi' ? '#' : route('rekapAkreditasi')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Rekap Akreditasi' ? 'active' : ''); ?>">
                                                Rekap Akreditasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Akreditasi A' ? '#' : route('akreditasiA')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Akreditasi A' ? 'active' : ''); ?>">
                                                Akreditasi A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Akreditasi B' ? '#' : route('akreditasiB')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Akreditasi B' ? 'active' : ''); ?>">
                                                Akreditasi B</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Akreditasi C' ? '#' : route('akreditasiC')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Akreditasi C' ? 'active' : ''); ?>">
                                                Akreditasi C</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Akreditasi Unggul' ? '#' : route('akreditasiUnggul')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Akreditasi Unggul' ? 'active' : ''); ?>">
                                                Akreditasi Unggul</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Akreditasi Baik Sekali' ? '#' : route('akreditasiBaikSekali')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Akreditasi Baik Sekali' ? 'active' : ''); ?>">
                                                Akreditasi Baik Sekali</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Akreditasi Baik' ? '#' : route('akreditasiBaik')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Akreditasi Baik' ? 'active' : ''); ?>">
                                                Akreditasi Baik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Belum Terakreditasi' ? '#' : route('akreditasiNo')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Belum Terakreditasi' ? 'active' : ''); ?>">
                                                Belum Terakreditasi</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($subTitle === 'Masa Berlaku' ? 'active' : ''); ?>"
                                   href="#masaBerlaku" data-toggle="collapse" role="button"
                                   aria-expanded="<?php echo e($subTitle === 'Masa Berlaku' ? 'true' : ''); ?>"
                                   aria-controls="masaBerlaku">
                                    <i class="fas fa-calendar-alt text-purple"></i>
                                    <span class="nav-link-text">Masa Berlaku</span>
                                </a>
                                <div class="collapse <?php echo e($subTitle === 'Masa Berlaku' ? 'show' : ''); ?>"
                                     id="masaBerlaku">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Rekap Masa Berlaku' ? '#' : route('rekapMasaBerlaku')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Rekap Masa Berlaku' ? 'active' : ''); ?>">
                                                Rekap Masa Berlaku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Lebih dari 60 Hari' ? '#' : route('lebihDari60Hari')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Lebih dari 60 Hari' ? 'active' : ''); ?>">
                                                Lebih dari 60 Hari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === '30 - 60 Hari' ? '#' : route('30Sampai60Hari')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === '30 - 60 Hari' ? 'active' : ''); ?>">
                                                30 - 60 Hari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Kurang dari 30 Hari' ? '#' : route('kurangDari30Hari')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Kurang dari 30 Hari' ? 'active' : ''); ?>">
                                                Kurang dari 30 Hari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e($subTitle2 === 'Habis' ? '#' : route('masaBerlakuHabis')); ?>"
                                               class="nav-link <?php echo e($subTitle2 === 'Habis' ? 'active' : ''); ?>">
                                                Masa Berlaku Habis</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>

                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH D:\applications\UKM-FT-v2\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>
