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
                                <h6>We have over 20,000 pop-ups in the UK &amp; Ireland. <br/><br/> And for London we have a unique collection of audience data to help you find your perfect pop-up <span style="font-size: 10px !important; color: #f39 !important">(BETA)</span></h6><br/>
                                <label>Location
  <select>
    <option value="none">Where do you want to pop-up</option>
      <option value="audience-search">London</option>
    <option value="yellow">Somewhere else</option>
  </select>
</label>
                                <label>Type of space
  <select id="spacetype">
    <option value="space-any">Any</option>
    <option value="space-offices">Offices</option>
      <option value="space-offices">Galleries</option>
      <option value="space-offices">Retail</option>
  </select>
</label>
                                <br/>
                                <a class="button secondary expanded" href="2b-map.php">Search for pop-ups</a>

                            </div>
                            <div class="tabs-panel" id="panel2">
                                <h6>As part of our London coverage we can offer in-depth audience data packs on boroughs, postcodes and streets within London. <span style="font-size: 10px !important; color: #f39 !important">(BETA)</span></h6><br/>
                                <label>Choose an area of London
                                    <input type="text" placeholder="Enter a borough, postcode or address">
                                </label>
                                <p>Here's some copy which explains what can be expected in the data packs, and perhaps pricing etc</p>
                                <a class="button secondary expanded">Search for data packs</a>
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
