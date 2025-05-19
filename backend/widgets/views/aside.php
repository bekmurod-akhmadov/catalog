<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
            <img
                src="/images/newuu/newuu-logo.png"
                alt="Logo"
                class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light"></span>
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
                <li class="nav-item <?=in_array(Yii::$app->controller->id , ['program' , 'course' , 'year', 'semester' , 'course-type'] ) ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Curriculum
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display:<?=in_array(Yii::$app->controller->id , ['program' , 'course' , 'year', 'semester'] ) ? 'block' : 'none' ?>">
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/program/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'program' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Programs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/course/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'course' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/course-type/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'course-type' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Courses Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/year/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'year' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Years</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/semester/index'])?>" class="nav-link <?=Yii::$app->controller->id == 'semester' ? 'active' : ''?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Semesters</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item <?=in_array(Yii::$app->controller->id , ['department' , 'catalog' , 'instructor'] ) ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Catalog
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: <?=in_array(Yii::$app->controller->id , ['department' , 'catalog' , 'instructor'] ) ? 'block' : 'none' ?>">
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
            </nav>
    </div>
</aside>