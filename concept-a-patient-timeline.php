<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-concept-a-head.php"); ?>
</head>

<?php include("variables-concept-a.php"); ?>

<style>
    #tab-4 {
        background-color: #005EB8 !important;
        color: #fefefe;
        font-weight: bold;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
    }

</style>

<body>

    <?php include("include-concept-a-scrolltotop.php"); ?>

    <div id="content-main" class="grid-container full">
        <div class="grid-x grid-padding-x grid-margin-x">

            <!-- Masthead -->
            <?php include("include-concept-a-masthead.php"); ?>

            <!-- Patient summary -->
            <?php include("include-concept-a-patient-summary.php"); ?>

            <!-- Tabbed nav -->
            <?php include("include-concept-a-tabbed-nav.php"); ?>

            <!-- Timeline filters -->
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div id="timeline-filters" class="cell">
                        <div class="grid-x grid-padding-x">
                            <fieldset class="large-10 medium-9 small-12 cell">
                                <input id="checkbox1" type="checkbox" checked><label for="checkbox1">Care events</label>
                                <input id="checkbox2" type="checkbox" checked><label for="checkbox2">Diagnoses</label>
                                <input id="checkbox3" type="checkbox" checked><label for="checkbox3">Medications</label>
                                <input id="checkbox4" type="checkbox" checked><label for="checkbox4">Results</label>
                            </fieldset>
                            <div class="large-2 medium-3 small-12 cell" style="float: right;">
                                <a class="button hollow tiny expanded" style="font-weight: 300;"><i class="fi-magnifying-glass"></i>&nbsp;Search timeline</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x">

                    <!-- Timeline menu -->
                    <div class="large-shrink medium-shrink cell" data-sticky-container>
                        <div id="side-nav-timeline" class="sticky" data-sticky data-anchor="nhs-timeline" style="border-right: 1px solid lightgrey;">

                            <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                <li><a href="#first"><strong>&nbsp;2018&nbsp;</strong></a></li>
                                <li><a href="#jul18">&nbsp;- July&nbsp;</a></li>
                                <li><a href="#apr18">&nbsp;- April&nbsp;</a></li>
                                <li><a href="#second"><strong>&nbsp;2017&nbsp;</strong></a></li>
                                <li><a href="#nov17">&nbsp;- November&nbsp;</a></li>
                                <li><a href="#aug17">&nbsp;- August&nbsp;</a></li>
                                <li><a href="#third"><strong>&nbsp;2016&nbsp;</strong></a></li>
                                <li><a href="#dec16">&nbsp;- December&nbsp;</a></li>
                                <li><a href="#nov16">&nbsp;- November&nbsp;</a></li>
                                <li><a href="#may16">&nbsp;- May&nbsp;</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Timeline -->
                    <div id="nhs-timeline" class="large-auto medium-auto cell">

                        <div class="timeline">

                            <div id="first" class="timeline-item" data-magellan-target="first">
                                <div class="timeline-icon">
                                    <img src="img/pill.svg" class="timeline-icon-new">
                                </div>
                                <div id="jul18" class="timeline-content" data-magellan-target="jul18">
                                    <hr>
                                    <p class="timeline-content-date">18-Jul-18</p>
                                    <a href="<?php echo $link_medication ?>#current-acute">
                                        <h5><strong>New acute medication</strong></h5>
                                        <p>Flucloxacillin</p>
                                        <p>240 dose</p>
                                        <p>Once per day</p>
                                    </a>
                                    <p><span class="summary-label">Prescribed by Dr. Doctor</span></p>
                                    <hr>
                                </div>
                            </div>

                            <div id="apr18" class="timeline-item" data-magellan-target="apr18">
                                <div class="timeline-icon">
                                    <img src="img/heart.svg" class="timeline-icon-new">
                                </div>
                                <div class="timeline-content right">
                                    <hr>
                                    <p class="timeline-content-date">23-Apr-18</p>
                                    <a href="<?php echo $link_results ?>">
                                        <h5><strong>Heart scan</strong></h5>
                                        <img src="img/heart-results.jpg" style="max-width: 200px;">
                                        <p>View report</p>
                                    </a>
                                    <p><span class="summary-label">Pinderfields General Hospital</span></p>
                                    <hr>
                                </div>
                            </div>

                            <div id="second" class="timeline-item" data-magellan-target="second">
                                <div class="timeline-icon">
                                    <img src="img/steth.svg" class="timeline-icon-new">
                                </div>
                                <div id="nov17" class="timeline-content" data-magellan-target="nov17">
                                    <hr>
                                    <p class="timeline-content-date">21-Nov-17</p>
                                    <a href="<?php echo $link_provider ?>#key-details">
                                        <h5><strong>GP appointment</strong></h5>
                                        <p>Blood pressure abnormal (high)</p>
                                        <p>Shortness of breath</p>
                                    </a>
                                    <p><span class="summary-label">Appointment with Dr. Livingstone</span></p>
                                    <hr>
                                </div>
                            </div>

                            <div id="aug17" class="timeline-item" data-magellan-target="aug17">
                                <div class="timeline-icon">
                                    <img src="img/heart.svg" class="timeline-icon-new">
                                </div>
                                <div class="timeline-content right">
                                    <hr>
                                    <p class="timeline-content-date">23-Aug-17</p>
                                    <a href="<?php echo $link_results ?>">
                                        <h5><strong>Heart scan</strong></h5>
                                        <p>View report
                                        </p>
                                    </a>
                                    <p><span class="summary-label">Pinderfields General Hospital</span></p>
                                    <hr>
                                </div>
                            </div>

                            <div id="third" class="timeline-item" data-magellan-target="third">
                                <div class="timeline-icon">
                                    <img src="img/hospital.svg" class="timeline-icon-new">
                                </div>
                                <div id="dec16" class="timeline-content" data-magellan-target="dec16">
                                    <hr>
                                    <p class="timeline-content-date">21-Dec-16</p>
                                    <a href="<?php echo $link_provider_hosp ?>#key-details">
                                        <h5><strong>A&amp;E visit</strong></h5>
                                        <p>Blood pressure abnormal (high)</p>
                                        <p>Shortness of breath</p>
                                    </a>
                                    <p><span class="summary-label">Appointment with Dr. Livingstone</span></p>
                                    <hr>
                                </div>
                            </div>

                            <div id="nov16" class="timeline-item" data-magellan-target="nov16">
                                <div class="timeline-icon">
                                    <img src="img/ambulance.svg" class="timeline-icon-new">
                                </div>
                                <div class="timeline-content right">
                                    <hr>
                                    <p class="timeline-content-date">23-Nov-16</p>
                                    <a href="<?php echo $link_provider_hosp ?>#key-details">
                                        <h5><strong>Ambulance dispatched</strong></h5>
                                        <p>Treated at home</p>
                                    </a>
                                    <hr>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <img src="img/hospital.svg" class="timeline-icon-new">
                                </div>
                                <div class="timeline-content">
                                    <hr>
                                    <p class="timeline-content-date">21-Nov-16</p>
                                    <a href="<?php echo $link_provider_hosp ?>#key-details">
                                        <h5><strong>A&amp;E visit</strong></h5>
                                        <p>Blood pressure abnormal (high)</p>
                                        <p>Shortness of breath</p>
                                    </a>
                                    <p><span class="summary-label">Appointment with Dr. Livingstone</span></p>
                                    <hr>
                                </div>
                            </div>

                            <div id="may16" class="timeline-item" data-magellan-target="may16">
                                <div class="timeline-icon">
                                    <img src="img/ambulance.svg" class="timeline-icon-new">
                                </div>
                                <div class="timeline-content right">
                                    <hr>
                                    <p class="timeline-content-date">23-May-16</p>
                                    <a href="<?php echo $link_provider_hosp ?>#key-details">
                                        <h5><strong>Ambulance dispatched</strong></h5>
                                        <p>Treated at home</p>
                                    </a>
                                    <hr>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <?php include("include-concept-a-javascripts.php"); ?>

</body>

</html>
