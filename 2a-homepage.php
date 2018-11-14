<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-popertee-head.php"); ?>
</head>

<?php include("variables-popertee.php"); ?>

<body>

    <div id="content-main" class="grid-container full">
        <div class="grid-x grid-padding-x grid-margin-x">

            <!-- Masthead -->
            <?php include("include-popertee-masthead.php"); ?>


            <!-- hero panel -->
            <div id="hero" class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="cell">
                        <h1>We know people. <br/>We know places.</h1>
                        <h4>insert key copy highlighting the difference between popertee &amp; marketplace competitors here<br/>
                        </h4>
                    </div>
                </div>
            </div>

            <div id="tabs" class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-3 cell">&nbsp;</div>
                    <div id="main-search-tabs" class="large-6 cell">
                        <ul class="tabs" data-tabs id="example-tabs">
                            <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Find pop-ups &amp; audience</a></li>
                            <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">View location data</a></li>
                        </ul>
                    </div>
                    <div class="large-3 cell"></div>
                </div>
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-3 cell"></div>
                    <div class="large-6 cell">
                        <div class="tabs-content" data-tabs-content="example-tabs">
                            <div class="tabs-panel is-active" id="panel1">
                                <label>Location
  <select id="colorselector">
    <option value="none">Where do you want to pop-up</option>
      <option value="audience-search">London</option>
    <option value="yellow">Somewhere else</option>
  </select>
</label>
                                <label>Type of space
  <select id="spacetype">
    <option value="space-any">Any</option>
    <option value="space-offices">Offices</option>
  </select>
</label>
                                <br/>
                                <div class="output">
                                    <div id="audience-search" class="colors red">
                                        <h4>Find your audience</h4>
                                        <h6>London-only</h6>
                                        <label>Gender</label>
                                        <div class="expanded button-group">
                                            <a class="button hollow">Male</a>
                                            <a class="button hollow">Female</a>
                                            <a class="button">Either</a>
                                        </div>
                                        <label>Age</label>
                                        <div class="slider" data-slider data-initial-start="25" data-initial-end="75">
                                            <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                            <span class="slider-fill" data-slider-fill></span>
                                            <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                            <input type="hidden">
                                            <input type="hidden">
                                        </div>
                                        <label>Earnings</label>
                                        <div class="slider" data-slider data-initial-start="25" data-initial-end="75">
                                            <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                            <span class="slider-fill" data-slider-fill></span>
                                            <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                            <input type="hidden">
                                            <input type="hidden">
                                        </div>
                                        <br/>
                                        <a class="button secondary expanded" href="2b-map.php">Search for pop-ups</a>
                                    </div>
                                    <div id="yellow" class="colors yellow">
                                        <a class="button secondary expanded">Search for pop-ups</a>
                                        <p>Audience data is currently only available for London</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-panel" id="panel2">
                                <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 cell"></div>
                </div>
            </div>
        </div>


    </div>


    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
