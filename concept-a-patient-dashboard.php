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
    #tab-1 {
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

            <div class="cell show-for-medium">
                <hr>
            </div>

            <div class="large-12 medium-12 cell">
                <div id="centre-col" class="grid-x grid-padding-x">

                    <!-- Grid list switch 
                    <div id="grid-list-switch" class="cell show-for-medium"><i class="fi-thumbnails" style="color: #005EB8;"></i>&nbsp;&nbsp; <i class="fi-list" style="color: lightgray"></i></div> -->

                    <div class="cell">

                        <div class="grid-x grid-padding-x grid-margin-x small-up-1 medium-up-3 large-up-4">
                            <div class="cell dashboard-panel alert-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell"><?php echo $label_alerts ?></div>
                                        <div class="large-shrink medium-shrink small-1  cell"><i class="fi-alert" style="color: white"></i></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Violent behaviour</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Drug-seeking behaviour</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel flag-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell"><?php echo $label_flags ?></div>
                                        <div class="large-shrink medium-shrink small-1  cell"><i class="fi-flag" style="color: white"></i></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">DNR</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Reasonable adjustments</div>
                                            <div class="large-shrink medium-shrink small-1 cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">HIV+</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Care plans</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/plan.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">
                                                <a href="<?php echo $link_mhcp ?>">
                                                    <?php echo $label_mhcp ?>
                                                </a>
                                            </div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="<?php echo $link_eolp ?>">End of Life Plan</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Recent events</div>               
                                <div class="large-shrink medium-shrink small-1  cell"><img src="img/clock.svg" style="height: 24px;"></div>
                            </div>
                            </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="<?php echo $link_provider ?>#key-details">17-Jun-18: &nbsp;</a></div>
                                            <div class="large-12 medium-12 small-12 cell"><a href="<?php echo $link_provider ?>#key-details"><strong>GP appointment</strong></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="<?php echo $link_timeline ?>#nov16">17-Jun-18: &nbsp;</a></div>
                                            <div class="large-12 medium-12 small-12 cell"><a href="<?php echo $link_timeline ?>#nov16"><strong>Diagnosis: angina</strong></a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Medicines</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/pill.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="<?php echo $link_medication ?>#current-repeat">6 current repeat medications</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="<?php echo $link_medication ?>#current-acute">3 acute medications</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="<?php echo $link_medication ?>#previous-repeat">4 discontinued medications</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Allergies</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/allergy-torso.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell">12-Feb-14: &nbsp;</div>
                                            <div class="large-12 medium-12 small-12 cell"><strong>Erythromycin</strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell">04-Oct-87: &nbsp;</div>
                                            <div class="large-12 medium-12 small-12 cell"><strong>Penicillin</strong></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel panel-greyed-out">
                                <span class="number-centre" style="margin-top: 40px;"><img src="img/plus.svg"></span><br/>
                                <span class="dashboard-label">Add panel to summary view</span>
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
