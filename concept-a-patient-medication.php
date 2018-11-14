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
    #tab-2 {
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

            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x grid-margin-x">

                    <!-- Mobile side nav -->
                    <div class="hide-for-medium cell">
                        <div id="side-nav">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_1 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-a-nav-cat-1.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_2 ?>
                                            </a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <?php include("include-concept-a-nav-cat-2-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_3 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <?php include("include-concept-a-nav-cat-3.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_4 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-4.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_5 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-5.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">
                                                <?php echo $label_alerts ?> &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-alerts.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">
                                                <?php echo $label_flags ?> &nbsp;<i class="fi-flag" style="color: white"></i> (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-flags.php"); ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medium-up side nav -->
                    <div class="large-3 medium-4 show-for-medium cell" data-sticky-container>
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_1 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-a-nav-cat-1.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_2 ?>
                                            </a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <?php include("include-concept-a-nav-cat-2-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_3 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <?php include("include-concept-a-nav-cat-3.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_4 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-4.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_5 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-5.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">
                                                <?php echo $label_alerts ?> &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-alerts.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">
                                                <?php echo $label_flags ?> &nbsp;<i class="fi-flag" style="color: white"></i> (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <?php include("include-concept-a-nav-cat-flags.php"); ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main content -->
                    <div id="nhs-timeline" class="large-10 medium-auto small-12 cell">

                        <h2>Medication <img src="img/pill.svg" style="height: 24px;"></h2><br/>

                        <div id="current-repeat" class="cell" data-magellan-target="current-repeat">
                            <h5>Current repeat medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Mental Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>22-Jun-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Sudocreme</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>apply when itchy</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>100ml</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="current-acute" class="cell" data-magellan-target="current-acute">
                            <br/><br/><br/>
                            <h5>Current acute medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="previous-repeat" class="cell" data-magellan-target="previous-repeat">
                            <br/><br/><br/>
                            <h5>Previous repeat medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Mental Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>22-Jun-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Sudocreme</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>apply when itchy</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>100ml</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Mental Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>22-Jun-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Sudocreme</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>apply when itchy</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>100ml</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>22-Jun-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Sudocreme</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>apply when itchy</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>100ml</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="previous-acute" class="cell" data-magellan-target="previous-acute">
                            <br/><br/><br/>
                            <h5>Previous acute medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
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
