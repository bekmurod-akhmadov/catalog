<?php

use common\models\Catalog;
use common\models\Department;
$this->title = 'Catalog';
?>
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background" data-parallax-background-ratio="0.5" style="background-repeat: no-repeat;background-image: url(/images/newuu/breadcrump2.jpg);">
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