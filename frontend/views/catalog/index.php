<?php

use common\models\Catalog;
use common\models\Department;
use common\models\Program;
use common\models\SubjectBoard;
$this->title = "Catalog";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>NEWUU</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="NEWUU">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="New Uzbekistan University     ">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/newuu/newuu-logo.png">
    <link rel="apple-touch-icon" href="images/newuu/newuu-logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/newuu/newuu-logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/newuu/newuu-logo.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="css/vendors.min.css"/>
    <link rel="stylesheet" href="css/icon.min.css"/>
    <link rel="stylesheet" href="css/style.min.css"/>
    <link rel="stylesheet" href="css/responsive.min.css"/>
    <link rel="stylesheet" href="demos/business/business.css" />
</head>
<body data-mobile-nav-style="classic">
<!-- start header -->
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
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Catalog</h1>
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
<section class="bg-gradient-very-light-gray position-relative">
    <div class="container-fluid">
        <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col tab-style-01">
                    <ul class="nav nav-tabs justify-content-end border-1 pb-1 text-center fs-18 alt-font fw-600 mb-3" role="tablist">
                        <li class="nav-item rounded" role="presentation">
                            <a class="nav-link <?=isset($_GET['department']) && !empty($_GET['department']) ? '' : 'active' ?>" data-bs-toggle="tab" href="#tab_sec1" aria-selected="true" role="tab">Search Courses</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?=isset($_GET['department']) && !empty($_GET['department']) ? 'active' : '' ?>" data-bs-toggle="tab" href="#tab_sec2" aria-selected="false" role="tab" tabindex="-1">Browse by Degree</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in <?=isset($_GET['department']) && !empty($_GET['department']) ? '' : 'active show' ?> " id="tab_sec1" role="tabpanel">
                            <div class="row">
                                <div class="g-0">
                                    <div class="w-100 bg-light-blue py-5 rounded-4">
                                        <form action="<?=\yii\helpers\Url::to(['/catalog/'])?>" method="get" class="d-flex justify-content-start">
                                            <div class="row p-2 w-100">
                                                <div class="col-md-3 mt-2">
                                                    <div class="d-flex align-items-center">
                                                        <input value="<?= isset($_GET['search']) && !empty($_GET['search']) ? $_GET['search'] : ''?>" class="input-medium w-100 border-radius-4px form-control" type="text" id="full-search" name="search" placeholder="Search by Keyword">
                                                        <div class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-14 w-100 text-center position-absolute z-index-1 d-none"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 mt-2">
                                                    <select class="form-select h-100" id="inlineFormSelectPref" name="term">
                                                        <option value=""></option>
                                                        <?php if (!empty(Catalog::getTermList())): ?>
                                                        <?php foreach (Catalog::getTermList() as $key => $item):?>
                                                        <option <?= isset($_GET['term']) && $_GET['term'] == $key ? 'selected': ''?> value="<?=$key?>"><?=$item?></option>
                                                        <?php endforeach;?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 mt-2">
                                                    <select class="form-select h-100" id="inlineFormSelectPref2" name="category">
                                                        <option value=""></option>
                                                        <?php if (!empty($catalog_categories)):?>
                                                        <?php foreach ($catalog_categories as $category):?>
                                                        <option <?= isset($_GET['category']) && $_GET['category'] == $category->id ? 'selected': ''?> value="<?=$category->id?>"><?=$category->name?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 mt-2">
                                                    <button type="submit" class="btn text-white rounded-3 w-100 fw-bold h-100 none-hover" style="background-color: #092545">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-xl-3 col-lg-4 col-md-5 tab-style-07 d-flex align-items-start">
                                        <ul class="nav nav-tabs justify-content-start border-0 text-left fs-22 md-fs-19 fw-500 bg-light-blue rounded-4 overflow-auto" role="tablist" style="max-height: 400px;">
                                            <li>
                                                <h5 class="fw-semibold text-base-color pt-5 ps-5">Search Results</h5>
                                            </li>
                                            <?php if (!empty($dataProvider->getModels())): ?>
                                                <?php $i=1; foreach ($dataProvider->getModels() as $index => $model): ?>
                                                    <li class="nav-item" role="presentation">
                                                        <a data-bs-toggle="tab" href="#tab_seven<?=$model->id?>" class="nav-link <?=$index == 0 ? 'active' : ''?> text-start" aria-selected="false" role="tab" tabindex="-1">
                                                            <span class="fs-19"><span class="me-10px fw-500"><?=$i++?></span><?=$model->course_name ?? ''?></span>
                                                            <span class="bg-hover bg-base-color"></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tab-content h-100">
                                            <?php if (!empty($dataProvider->getModels())): ?>
                                            <?php foreach ($dataProvider->getModels() as $index => $model): ?>
                                            <div class="tab-pane fade in h-100 <?=$index == 0 ? 'active show' : ''?>" id="tab_seven<?=$model->id?>" role="tabpanel">
                                                <div class="row h-100">
                                                    <div class="col-md-12 mx-auto rounded-4">
                                                        <div class="table-responsive border rounded-4">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="3" class="fs-5 rounded-top-4" style="background-color: #173e7d;color: white;padding: 12px">Deep Learning</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td scope="row" class="px-2 py-0 border-bottom-0">
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Term:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->term ? Catalog::getTermList()[$model->term] : ''?></span>
                                                                        </div>
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Part of term:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->part_of_team ?? ''?></span>
                                                                        </div>
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Format:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->format ?? ''?></span>
                                                                        </div>
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Waitlist Total:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->waitlist_total ?? ''?></span>
                                                                        </div>
<!--                                                                        <div class="pt-1">-->
<!--                                                                            <span class="text-base-color fs-6 fw-semibold">Credits:</span><br>-->
<!--                                                                            <span class="fs-14 catalog-res">4</span>-->
<!--                                                                        </div>-->
                                                                    </td>
                                                                    <td class="border-bottom-0 px-2 py-0">
<!--                                                                        <div class="pt-1">-->
<!--                                                                            <span class="text-base-color fs-6 fw-semibold">Credit Status:</span><br>-->
<!--                                                                            <span class="fs-14 catalog-res">Graduate</span>-->
<!--                                                                        </div>-->
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Section Status:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->secton_status ?? ''?></span>
                                                                        </div>
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Maximum Enrollment:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->maximum_enrollment ?? ''?></span>
                                                                        </div>
                                                                        <div class="pt-1">
                                                                            <span class="text-base-color fs-6 fw-semibold">Seats Avail:</span><br>
                                                                            <span class="fs-14 catalog-res"><?=$model->seats_avail ?? ''?></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Deadlines</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td scope="row" class="px-2 py-0"><span class="text-base-color fs-6 fw-semibold p-0">Last day to register</span></td>
                                                                    <td class="fs-14 catalog-res px-2 py-0"><?=$model->last_day_to_register ? date("F j, Y", strtotime($model->last_day_to_register)) : '';?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row" class="px-2 py-0"><span class="text-base-color fs-6 fw-semibold">Last day to make course and credit status <br> changes, and drop for 100% refund</span></td>
                                                                    <td class="fs-14 catalog-res px-2 py-0"><?=$model->last_date_to_add_or_drop ? date("F j, Y", strtotime($model->last_date_to_add_or_drop)) : '';?></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <?php if(isset($model->findInstructor) && !empty($model->findInstructor)): ?>

                                                            <table class="table">

                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Instructor Info</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td scope="row" class="border-bottom-0 px-2 py-0">
                                                                        <span class="fs-5 fw-semibold py-0"><?=$model->findInstructor->first_name . ' ' . $model->findInstructor->last_name ?>, <?=$model->findInstructor->academic_degree ?></span><br>
                                                                        <span class="fs-14 catalog-res py-0"><?=$model->findInstructor->description?>l</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <?php endif; ?>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Meeting Info</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td scope="row" colspan="2" class="px-2 py-0"><?=$model->meeting_info ?? ''?></td>
                                                                </tr>
<!--                                                                <tr>-->
<!--                                                                    <td scope="row" class="fs-14 border-bottom-0 px-2 py-0"><span class="text-base-color fs-6 fw-semibold">Participation Option</span></td>-->
<!--                                                                    <td class="fs-14 border-bottom-0 catalog-res px-2 py-0">Online Synchronous</td>-->
<!--                                                                </tr>-->
                                                                </tbody>
                                                            </table>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Description</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td scope="row" colspan="2" class="border-bottom-0 catalog-res px-2 py-0 fs-14">
                                                                        <?=$model->description ?? ''?>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Notes</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td scope="row" colspan="2" class="border-bottom-0 catalog-res px-2 py-0 fs-14">  <?=$model->notes ?? ''?></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Syllabus</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row" colspan="2" class="border-bottom-0 p-1">
                                                                        <a href="#" class="btn btn-very-small bg-base-color text-white hover-base rounded">View Syllabus <i class="fa-solid fa-arrow-right fs-12"></i></a>
                                                                    </th>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in <?=isset($_GET['department']) && !empty($_GET['department']) ? 'active show' : ''?> " id="tab_sec2" role="tabpanel">
                            <div class="row my-5">
                                <form action="<?=\yii\helpers\Url::to(['/catalog'])?>">
                                <!-- Step Form -->
                                <div class="row p-3 bg-light-blue rounded-4">
                                    <div class="col-md-4 mt-2">
                                        <div id="step-1">
                                            <select id="building" class="form-select h-100">
                                                <option value="">Search by Degree</option>
                                                <?php if (!empty(Department::getGraduates())):?>
                                                    <?php foreach (Department::getGraduates() as $key => $item):?>
                                                        <option value="<?=$key?>"><?=$item?></option>
                                                    <?php endforeach;?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <div id="step-2">
                                            <select name="department"  id="room" class="form-select h-100">
                                                <option value="">Search by Department</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <button id="search-btn" class="w-100 btn btn-primary h-100 rounded" style="background-color: #092545">Search</button>
                                    </div>
                                </div>
                                </form>
                                <div class="row mt-2">
                                    <div class="col-xl-3 col-lg-4 col-md-5 tab-style-07 d-flex align-items-start">
                                        <ul class="nav nav-tabs justify-content-start border-0 text-left fs-22 md-fs-19 fw-500 bg-light-blue rounded-4 overflow-auto" role="tablist" style="max-height: 400px;">
                                            <li>
                                                <h5 class="fw-semibold text-base-color pt-5 ps-5">Search Results</h5>
                                            </li>
                                            <?php if (!empty($dataProvider2->getModels())): ?>
                                                <?php $i=1; foreach ($dataProvider2->getModels() as $index => $model): ?>
                                                    <li class="nav-item" role="presentation">
                                                        <a data-bs-target="#tab_six<?= $model->id ?>"
                                                           data-bs-toggle="tab" href="#tab_six<?=$model->id?>"
                                                           class="nav-link <?=$index == 0 ? 'active' : ''?> text-start tab-pane-custom"
                                                           aria-selected="<?= $index == 0 ? 'true' : 'false' ?>"
                                                           type="button"
                                                           role="tab"
                                                           tabindex="-1"
                                                           aria-controls="tab_six<?= $model->id ?>"
                                                           id="tab-btn-<?= $model->id ?>"
                                                        >
                                                            <span class="fs-19"><span class="me-10px fw-500"><?=$i++?></span><?=$model->course_name ?? ''?></span>
                                                            <span class="bg-hover bg-base-color"></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tab-content h-100">
                                            <?php if (!empty($dataProvider2->getModels())): ?>
                                                <?php foreach ($dataProvider2->getModels() as $index => $model): ?>
                                                    <div
                                                            class="tab-pane fade in h-100 <?=$index == 0 ? 'active show' : ''?>"
                                                            id="tab_six<?=$model->id?>"
                                                            role="tabpanel"
                                                            aria-labelledby="tab-btn-<?= $model->id ?>"
                                                    >
                                                        <div class="row h-100">
                                                            <div class="col-md-12 mx-auto rounded-4">
                                                                <div class="table-responsive border rounded-4">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="fs-5 rounded-top-4" style="background-color: #173e7d;color: white;padding: 12px">Deep Learning</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td scope="row" class="px-2 py-0 border-bottom-0">
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Term:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->term ? Catalog::getTermList()[$model->term] : ''?></span>
                                                                                </div>
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Part of term:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->part_of_team ?? ''?></span>
                                                                                </div>
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Format:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->format ?? ''?></span>
                                                                                </div>
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Waitlist Total:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->waitlist_total ?? ''?></span>
                                                                                </div>
                                                                                <!--                                                                        <div class="pt-1">-->
                                                                                <!--                                                                            <span class="text-base-color fs-6 fw-semibold">Credits:</span><br>-->
                                                                                <!--                                                                            <span class="fs-14 catalog-res">4</span>-->
                                                                                <!--                                                                        </div>-->
                                                                            </td>
                                                                            <td class="border-bottom-0 px-2 py-0">
                                                                                <!--                                                                        <div class="pt-1">-->
                                                                                <!--                                                                            <span class="text-base-color fs-6 fw-semibold">Credit Status:</span><br>-->
                                                                                <!--                                                                            <span class="fs-14 catalog-res">Graduate</span>-->
                                                                                <!--                                                                        </div>-->
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Section Status:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->secton_status ?? ''?></span>
                                                                                </div>
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Maximum Enrollment:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->maximum_enrollment ?? ''?></span>
                                                                                </div>
                                                                                <div class="pt-1">
                                                                                    <span class="text-base-color fs-6 fw-semibold">Seats Avail:</span><br>
                                                                                    <span class="fs-14 catalog-res"><?=$model->seats_avail ?? ''?></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Deadlines</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td scope="row" class="px-2 py-0"><span class="text-base-color fs-6 fw-semibold p-0">Last day to register</span></td>
                                                                            <td class="fs-14 catalog-res px-2 py-0"><?=$model->last_day_to_register ? date("F j, Y", strtotime($model->last_day_to_register)) : '';?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" class="px-2 py-0"><span class="text-base-color fs-6 fw-semibold">Last day to make course and credit status <br> changes, and drop for 100% refund</span></td>
                                                                            <td class="fs-14 catalog-res px-2 py-0"><?=$model->last_date_to_add_or_drop ? date("F j, Y", strtotime($model->last_date_to_add_or_drop)) : '';?></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <?php if(isset($model->findInstructor) && !empty($model->findInstructor)): ?>

                                                                        <table class="table">

                                                                            <thead>
                                                                            <tr>
                                                                                <th scope="col" colspan="2" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Instructor Info</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td scope="row" class="border-bottom-0 px-2 py-0">
                                                                                    <span class="fs-5 fw-semibold py-0"><?=$model->findInstructor->first_name . ' ' . $model->findInstructor->last_name ?>, <?=$model->findInstructor->academic_degree ?></span><br>
                                                                                    <span class="fs-14 catalog-res py-0"><?=$model->findInstructor->description?>l</span>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php endif; ?>
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Meeting Info</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td scope="row" colspan="2" class="px-2 py-0"><?=$model->meeting_info ?? ''?></td>
                                                                        </tr>
                                                                        <!--                                                                <tr>-->
                                                                        <!--                                                                    <td scope="row" class="fs-14 border-bottom-0 px-2 py-0"><span class="text-base-color fs-6 fw-semibold">Participation Option</span></td>-->
                                                                        <!--                                                                    <td class="fs-14 border-bottom-0 catalog-res px-2 py-0">Online Synchronous</td>-->
                                                                        <!--                                                                </tr>-->
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Description</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td scope="row" colspan="2" class="border-bottom-0 catalog-res px-2 py-0 fs-14">
                                                                                <?=$model->description ?? ''?>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Notes</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td scope="row" colspan="2" class="border-bottom-0 catalog-res px-2 py-0 fs-14">  <?=$model->notes ?? ''?></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="fs-5" style="background-color: #173e7d;color: white;padding: 12px">Syllabus</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row" colspan="2" class="border-bottom-0 p-1">
                                                                                <a href="#" class="btn btn-very-small bg-base-color text-white hover-base rounded">View Syllabus <i class="fa-solid fa-arrow-right fs-12"></i></a>
                                                                            </th>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
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
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>
<!-- end scroll progress -->
<!-- javascript libraries -->
<!--<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.js"></script>-->
<!--<script type="text/javascript" src="js/vendors.min.js"></script>-->
<!--<script type="text/javascript" src="js/main.js"></script>-->
<?php
$js = <<<JS
     $(document).ready(function(){
        $(".tab-pane-custom").on("click", function (e) {
            e.preventDefault();
            var target  = $(this).attr("data-bs-target");
            if ($(this).hasClass("active")) {
                return;
            }
        
            $(".tab-pane, .tab-pane-custom").removeClass("active show");
        
            $(target).addClass("active show");
            $(this).addClass("active");
        });

        $("#building").change(function(){
            var graduate_id = $(this).val();
            if ($("#building").val() !== "" || $("#room option").length > 1) {
                $("#step-2").removeClass("d-none");
            }
            $("#room").html('<option value="">Search by Department</option>');
            $.ajax({
                url: '/catalog/get-departments',
                type: 'GET',
                data: { graduate_id: graduate_id },
                dataType: 'json',
                success: function(data) {
                    $.each(data.data, function(index, dept){
                        $("#room").append('<option value="'+ dept.id +'">'+ dept.name +'</option>');
                    });
                    $("#step-2").removeClass("d-none");
                },
                error: function(xhr, status, error) {
                    console.error("Xatolik yuz berdi: " + error);
                }
            });
        });
    });
JS;
$this->registerJs($js , \yii\web\View::POS_END)
?>
</body>
</html>