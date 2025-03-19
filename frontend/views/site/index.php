<?php

use common\models\Program;
use yii\db\Query;
use yii\db\Expression;
use common\models\Course;
?><!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent d-flex flex-column" data-header-hover="light">
        <div class="container-fluid bg-base-color top-menu-1">
            <div class="row px-3 py-1 w-100">
                <div class="d-flex justify-content-end gap-4 align-items-center">
                    <a href="statistics-and-reports.html" class="text-turquoise">Statistics & Reports</a>
                    <a href="forms.html" class="text-turquoise">Forms</a>
                    <a href="contact.html" class="text-turquoise">Contact</a>
                    <a href="handbooks.html" class="text-turquoise">Handbooks</a>
                    <a href="faq.html" class="text-turquoise">FAQ</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-auto col-xxl-2 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="index.html">
                    <img src="images/newuu/newuu-logo.png" data-at2x="images/newuu/newuu-logo.png" alt="" class="default-logo">
                    <img src="images/newuu/newuu-logo.png" data-at2x="images/newuu/newuu-logo.png" alt="" class="alt-logo">
                    <img src="images/newuu/newuu-dark.png" data-at2x="images/newuu/newuu-dark.png" alt="" class="mobile-logo">
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
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.html" class="nav-link">Services</a>

                        </li>
                        <li class="nav-item">
                            <a href="calendars.html" class="nav-link">Calendars</a>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Academics</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a href="pre-registration.html"><i class="bi bi-briefcase"></i>Pre-registration</a></li>
                                <li><a href="registration-information.html"><i class="bi bi-briefcase"></i>Registration Information</a></li>

                                <li><a href="curriculum.html"><i class="bi bi-briefcase"></i>Curriculum</a></li>
                                <li><a href="transfer-credit.html"><i class="bi bi-briefcase"></i>Transfer Credit</a></li>
                                <li><a href="catalog.html"><i class="bi bi-briefcase"></i>Catalog</a></li>
                                <li><a href="policies-and-procedures.html"><i class="bi bi-briefcase"></i>Policies and procedures</a></li>
                                <li><a href="announcement.html"><i class="bi bi-briefcase"></i>Announcements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Transcripts & Records</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a href="transcripts.html"><i class="bi bi-briefcase"></i>Transcripts, certifications & letters</a></li>
                                <li><a href="diplomas.html"><i class="bi bi-briefcase"></i>Diplomas</a></li>
                                <li><a href="records-privacy.html"><i class="bi bi-briefcase"></i>Records privacy & access</a></li>
                                <li><a href="personal-information.html"><i class="bi bi-briefcase"></i>Personal information</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Graduation</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink5" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink5">
                                <li><a href="spring-degree-dates.html"><i class="bi bi-briefcase"></i>Spring degree dates & deadlines</a></li>
                                <li><a href="undergraduate-degree-requirements.html"><i class="bi bi-briefcase"></i>Undergraduate degree requirements</a></li>
                                <li><a href="graduate-degree-requirements.html"><i class="bi bi-briefcase"></i>Graduate degree requirements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">Academic Advising</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                <li><a href="about-advising.html"><i class="bi bi-briefcase"></i>About Us</a></li>
                                <li><a href="make-appointment.html"><i class="bi bi-briefcase"></i>Make an appointment</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="d-flex top-menu-2 mt-3 flex-column p-3">
                                <a href="statistics-and-reports.html" class="text-turquoise">Statistics & Reports</a>
                                <a href="forms.html" class="text-turquoise">Forms</a>
                                <a href="contact.html" class="text-turquoise">Contact</a>
                                <a href="handbooks.html" class="text-turquoise">Handbooks</a>
                                <a href="faq.html" class="text-turquoise">FAQ</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->
<!-- start page title -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background" data-parallax-background-ratio="0.5" style="background-repeat: no-repeat;background-image: url(images/newuu/breadcrump2.jpg);">
    <div class="opacity-very-light bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Curriculum</h1>
            </div>
            <div class="down-section text-center" data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#" aria-label="scroll down" class="section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col tab-style-06">
                    <ul class="nav nav-tabs alt-font justify-content-end border-0 text-center text-uppercase alt-font fw-500 mb-5" role="tablist">
                        <li class="nav-item bg-white border-color-extra-medium-gray" role="presentation">
                            <a class="nav-link fw-500 active" data-bs-toggle="tab" href="#tab_six1" aria-selected="true" role="tab">Undergraduate</a>
                            <span class="tab-bg-active bg-base-color-2"></span>
                        </li>
                        <li class="nav-item bg-white border-color-extra-medium-gray" role="presentation">
                            <a class="nav-link fw-500" data-bs-toggle="tab" href="#tab_six2" aria-selected="false" role="tab" tabindex="-1">Graduate</a>
                            <span class="tab-bg-active bg-base-color-2"></span>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_six1" role="tabpanel">
                            <div class="row justify-content-center pricing-table-style-07">
                                <div class="col-md-3">
                                    <!-- start tab navigation -->
                                    <ul class="nav nav-tabs  border-0 text-left appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-30, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [1.1, 1], &quot;rotateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" role="tablist">
                                        <?php
                                        if (!empty($programs)): ?>
                                            <?php foreach ($programs as $index => $program): ?>
                                                <li class="nav-item mb-30px p-0 border-0" role="presentation" style="">
                                                    <a data-bs-toggle="tab" href="#tab_four<?=$program->id?>" class="nav-link box-shadow-extra-large lg-p-5 xs-p-8 border-radius-8px <?=$index == 0 ? 'active' : ''?>" aria-selected="false" role="tab" tabindex="-1">
                                                    <div class="flex-column flex-sm-row d-flex align-items-center">
                                                        <div class="col-auto align-items-center d-flex  ">
                                                            <div class="icon w-30px h-30px d-flex flex-shrink-0 align-items-center justify-content-center fs-11 border border-2 border-radius-100 me-10px">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="fs-16  text-dark-gray fw-700 "><?=$program->name?></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </ul>
                                    <!-- end tab navigation -->
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-30, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [1.05, 1], &quot;rotateX&quot;: [5, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                        <?php if (!empty($programs)):?>
                                            <?php foreach ($programs as $index => $program):?>
                                            <?php


                                                $courses = (new Query())
                                                    ->select([
                                                        'y.id as year_id',
                                                        'courses' => new Expression("JSON_ARRAYAGG(JSON_OBJECT(
                                                            'id', c.id,
                                                            'course_code', c.course_code,
                                                            'subjectboard_id', c.subjectboard_id,
                                                            'course_name', c.course_name,
                                                            'course_type', c.course_type,
                                                            'prerequisite', c.prerequisite,
                                                            'lecture', c.lecture,
                                                            'tutorial_and_lab', c.tutorial_and_lab,
                                                            'ects', c.ects,
                                                            'status', c.status,
                                                            'semester_id', c.semester_id
                                                        ))")
                                                    ])
                                                    ->from('course c')
                                                    ->innerJoin('year y', 'c.year_id = y.id')
                                                    ->where(['c.program_id' => $program->id])
                                                    ->groupBy('y.id')
                                                    ->all();
                                                ?>
                                                <div class="tab-pane position-relative fade in box-shadow-quadruple-large border-radius-8px  <?=$index == 0 ? 'active show' : ''?>   p-3" id="tab_four<?=$program->id?>" role="tabpanel" style="">
                                                    <?php if (!empty($courses)): ?>
                                                    <?php foreach ($courses as $cours): ?>
                                                    <?php
                                                        $subjects = json_decode($cours['courses'] , true);
                                                    ?>
                                                    <span class="text-dark-gray fw-700 mb-15px fs-28 ls-minus-05px d-inline-block"><?=$program->name?></span>
                                                    <div class="responsive-table">
                                                        <table class="table w-100 table-bordered text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="4" style="background-color: #00AF6B;color: white"><?=\common\models\Year::getYerById((int)$cours['year_id'])?></th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Semester</th>
                                                                    <th>Course</th>
                                                                    <th>Prerequisite</th>
                                                                    <th>ECTS</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php if (!empty($subjects)): ?>
                                                            <?php foreach ($subjects as $subject): ?>
                                                                <tr>
                                                                    <td><?=Program::getSemesterName($subject['semester_id'])?></td>
                                                                    <td><?=$subject['course_name']?></td>
                                                                    <td><?=$subject['prerequisite']?></td>
                                                                    <td><?=$subject['ects']?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_six2" role="tabpanel">
                            <div class="row justify-content-center pricing-table-style-07">
                                <div class="col-md-3">
                                    <!-- start tab navigation -->
                                    <ul class="nav nav-tabs  border-0 text-left appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-30, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [1.1, 1], &quot;rotateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" role="tablist">
                                        <?php
                                        if (!empty($programs2)): ?>
                                            <?php foreach ($programs2 as $index => $program): ?>
                                                <li class="nav-item mb-30px p-0 border-0" role="presentation" style="">
                                                    <a data-bs-toggle="tab" href="#tab_four<?=$program->id?>" class="nav-link box-shadow-extra-large lg-p-5 xs-p-8 border-radius-8px <?=$index == 0 ? 'active' : ''?>" aria-selected="false" role="tab" tabindex="-1">
                                                        <div class="flex-column flex-sm-row d-flex align-items-center">
                                                            <div class="col-auto align-items-center d-flex  ">
                                                                <div class="icon w-30px h-30px d-flex flex-shrink-0 align-items-center justify-content-center fs-11 border border-2 border-radius-100 me-10px">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </div>
                                                                <div class="fs-16  text-dark-gray fw-700 "><?=$program->name?></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </ul>
                                    <!-- end tab navigation -->
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-30, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [1.05, 1], &quot;rotateX&quot;: [5, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                        <?php if (!empty($programs2)):?>
                                            <?php foreach ($programs2 as $index => $program):?>
                                                <?php


                                                $courses = (new Query())
                                                    ->select([
                                                        'y.id as year_id',
                                                        'courses' => new Expression("JSON_ARRAYAGG(JSON_OBJECT(
                                                            'id', c.id,
                                                            'course_code', c.course_code,
                                                            'subjectboard_id', c.subjectboard_id,
                                                            'course_name', c.course_name,
                                                            'course_type', c.course_type,
                                                            'prerequisite', c.prerequisite,
                                                            'lecture', c.lecture,
                                                            'tutorial_and_lab', c.tutorial_and_lab,
                                                            'ects', c.ects,
                                                            'status', c.status,
                                                            'semester_id', c.semester_id
                                                        ))")
                                                    ])
                                                    ->from('course c')
                                                    ->innerJoin('year y', 'c.year_id = y.id')
                                                    ->where(['c.program_id' => $program->id])
                                                    ->groupBy('y.id')
                                                    ->all();
                                                ?>
                                                <div class="tab-pane position-relative fade in box-shadow-quadruple-large border-radius-8px  <?=$index == 0 ? 'active show' : ''?>   p-3" id="tab_four<?=$program->id?>" role="tabpanel" style="">
                                                    <?php if (!empty($courses)): ?>
                                                        <?php foreach ($courses as $cours): ?>
                                                            <?php
                                                            $subjects = json_decode($cours['courses'] , true);
                                                            ?>
                                                            <span class="text-dark-gray fw-700 mb-15px fs-28 ls-minus-05px d-inline-block"><?=$program->name?></span>
                                                            <div class="responsive-table">
                                                                <table class="table w-100 table-bordered text-center">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="4" style="background-color: #00AF6B;color: white"><?=\common\models\Year::getYerById((int)$cours['year_id'])?></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Semester</th>
                                                                        <th>Course</th>
                                                                        <th>Prerequisite</th>
                                                                        <th>ECTS</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php if (!empty($subjects)): ?>
                                                                        <?php foreach ($subjects as $subject): ?>
                                                                            <tr>
                                                                                <td><?=Program::getSemesterName($subject['semester_id'])?></td>
                                                                                <td><?=$subject['course_name']?></td>
                                                                                <td><?=$subject['prerequisite']?></td>
                                                                                <td><?=$subject['ects']?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start footer -->
<footer class="pt-5 pb-5 sm-pt-40px sm-pb-45px footer-dark bg-extra-medium-slate-blue">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <img src="images/newuu/newuu-logo.png" data-at2x="images/newuu/newuu-logo.png" alt="" width="150">
                <br>
                <div class="pt-30px">
                            <span><i class="feather icon-feather-map-pin text-white me-10px"></i> New Uzbekistan University, Conference Hall, UCA Building,
                            <br> Movarounnahr Street 1, Tashkent, Uzbekistan</span><br>
                    <a  href="tel:+998 (71) 202-41-11"><i class="feather icon-feather-phone-call text-white me-10px"></i> +998 (71) 202-41-11</a><br>
                    <a  href="mailto:registrar@newuu.uz"> <i class="feather icon-feather-mail text-white me-10px"></i> registrar@newuu.uz</a></div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- end footer -->
<!-- start scroll progress -->
<div class="scroll-progress d-none d-xxl-block">
    <a href="demo-business-about.html#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>