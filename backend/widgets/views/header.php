<nav class="app-header navbar navbar-expand bg-body mb-3">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="d-none d-md-inline"><?=!empty($user) ? $user->username : ''?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="dropdown-divider"></div>
                    <a data-method="post" href="<?=\yii\helpers\Url::to(['/site/logout'])?>" class="dropdown-item">
                        <i class="fas fa-door-closed"></i>Logout
                    </a>
                </div>
            </li>
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>