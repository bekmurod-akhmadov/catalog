<?php

use common\models\Program;
use yii\db\Query;
use yii\db\Expression;
use common\models\Course;
$this->title = 'Curriculum';
?>
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background" data-parallax-background-ratio="0.5" style="background-repeat: no-repeat;background-image: url(/images/newuu/breadcrump2.jpg);">
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
                                                    ->where(['like', 'program_id', '"'.$program->id.'"'])
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
<!--                                                                        --><?php //echo '<pre>';
//                                                                        print_r($subject)?>
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
                                                    ->where(['like', 'program_id', '"'.$program->id.'"'])
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
