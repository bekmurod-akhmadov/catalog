<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent d-flex flex-column" data-header-hover="light">
        <div class="container-fluid bg-base-color top-menu-1">
            <div class="row px-3 py-1 w-100">
                <div class="d-flex justify-content-end gap-4 align-items-center">
                    <a href="<?=\yii\helpers\Url::toRoute('/site/statistics')?>" class="text-turquoise">Statistics & Reports</a>
                    <a href="<?=\yii\helpers\Url::to(['/site/forms'])?>" class="text-turquoise">Forms</a>
                    <a href="<?=\yii\helpers\Url::to(['/site/contact'])?>" class="text-turquoise">Contact</a>
<!--                    <a href="handbooks.html" class="text-turquoise">Handbooks</a>-->
                    <a href="<?=\yii\helpers\Url::to(['/site/faq'])?>" class="text-turquoise">FAQ</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-auto col-xxl-2 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="<?=\yii\helpers\Url::home()?>">
                    <img src="/images/newuu/newuu-logo.png" data-at2x="/images/newuu/newuu-logo.png" alt="" class="default-logo">
                    <img src="/images/newuu/newuu-logo.png" data-at2x="/images/newuu/newuu-logo.png" alt="" class="alt-logo">
                    <img src="/images/newuu/newuu-dark.png" data-at2x="/images/newuu/newuu-dark.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/about'])?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/site/services'])?>" class="nav-link">Services</a>

                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['/site/calendars'])?>" class="nav-link">Calendars</a>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Academics</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a href="<?=\yii\helpers\Url::to(['/site/pre-registration'])?>"><i class="bi bi-briefcase"></i>Pre-registration</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/registration-information'])?>"><i class="bi bi-briefcase"></i>Registration Information</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/curriculum'])?>"><i class="bi bi-briefcase"></i>Curriculum</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/transfer-credit'])?>"><i class="bi bi-briefcase"></i>Transfer Credit</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/catalog'])?>"><i class="bi bi-briefcase"></i>Catalog</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/policies-and-procedures'])?>"><i class="bi bi-briefcase"></i>Policies and procedures</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/announcement'])?>"><i class="bi bi-briefcase"></i>Announcements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Transcripts & Records</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a href="<?=\yii\helpers\Url::to(['/site/transcripts'])?>"><i class="bi bi-briefcase"></i>Transcripts, certifications & letters</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/diplomas'])?>"><i class="bi bi-briefcase"></i>Diplomas</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/records-privacy'])?>"><i class="bi bi-briefcase"></i>Records privacy & access</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/personal-information'])?>"><i class="bi bi-briefcase"></i>Personal information</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Graduation</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink5" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink5">
                                <li><a href="<?=\yii\helpers\Url::to(['/site/spring-degree-dates'])?>"><i class="bi bi-briefcase"></i>Spring degree dates & deadlines</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/undergraduate-degree-requirements'])?>"><i class="bi bi-briefcase"></i>Undergraduate degree requirements</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/graduate-degree-requirements'])?>"><i class="bi bi-briefcase"></i>Graduate degree requirements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Academic Advising</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                <li><a href="<?=\yii\helpers\Url::to(['/site/about-advising'])?>"><i class="bi bi-briefcase"></i>About Us</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/make-appointment'])?>"><i class="bi bi-briefcase"></i>Make an appointment</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="d-flex top-menu-2 mt-3 flex-column p-3">
                                <a href="<?=\yii\helpers\Url::to(['/site/statistics'])?>" class="text-turquoise">Statistics & Reports</a>
                                <a href="<?=\yii\helpers\Url::to(['/site/forms'])?>" class="text-turquoise">Forms</a>
                                <a href="<?=\yii\helpers\Url::to(['/site/contact'])?>" class="text-turquoise">Contact</a>
<!--                                <a href="--><?php //=\yii\helpers\Url::to(['/site/pre-registration'])?><!--" class="text-turquoise">Handbooks</a>-->
                                <a href="<?=\yii\helpers\Url::to(['/site/faq'])?>" class="text-turquoise">FAQ</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>