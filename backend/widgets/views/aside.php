<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="/img/AdminLTELogo.png"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false"
            >
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Curriculum
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/program/index'])?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Programs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/course/index'])?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/year/index'])?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Years</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/semester/index'])?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Semesters</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Catalog
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/catalog/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'catalog' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Catalog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/department/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'department' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Departments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/instructor/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'instructor' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Instructor</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?=\yii\helpers\Url::to(['/subject-board/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'subject-board' ? 'active' : ''?>">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Subject Board</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>