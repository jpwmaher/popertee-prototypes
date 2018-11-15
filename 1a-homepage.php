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
                        <h1>Remove the guesswork.</h1>
                        <h4>[insert key copy highlighting the difference between popertee &amp; marketplace competitors here]
                        </h4>
                    </div>
                </div>
            </div>

            <div class="cell">
                <hr>
            </div>

            <!-- choice panel -->
            <div id="choice" class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div id="j1-hero" class="large-6 cell">
                        <h3><img src="img/Big-Ben@2x.png" style="height: 32px;">&nbsp;Find your perfect London pop-up</h3>
                        <h6>Here's a sentence about London/Discover BETA explaining briefly how the results can be filtered by audience various audience criteria <span style="font-size: 10px !important; color: #f39 !important">(BETA)</span></h6>
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <label>Type of space
  <select id="spacetype">
    <option value="space-any">Any</option>
    <option value="space-offices">Offices</option>
      <option value="space-offices">Galleries</option>
      <option value="space-offices">Retail</option>
  </select>
</label></div>
                            <div class="large-6 cell"><label>Dates
          <input type="text" placeholder="When would you like to pop-up?">
        </label>
                            </div>
                        </div>
                        <br/>
                        <a class="button secondary large" href="2b-map.php">Search for London pop-ups</a>

                    </div>
                    <div id="j2-hero" class="large-6 cell">
                        <h3>Looking elsewhere?</h3>
                        <h6>We have over 20,000 spaces in places like Manchester - Dublin - Bristol - Liverpool - Birmingham</h6>
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <label>Type of space
  <select id="spacetype">
    <option value="space-any">Any</option>
    <option value="space-offices">Offices</option>
      <option value="space-offices">Galleries</option>
      <option value="space-offices">Retail</option>
  </select>
</label></div>
                            <div class="large-6 cell"><label>Dates
          <input type="text" placeholder="When would you like to pop-up?">
        </label>
                            </div>
                        </div>
                        <br/>
                        <a href="#" class="button large secondary">Search for pop-ups</a>
                    </div>
                </div>
            </div>

            <div class="cell">
                <hr>
            </div>

            <!-- J3 panel -->
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-1 cell"></div>
                    <div id="j3" class="large-10 cell">
                        <div class="grid-x grid-padding-x grid-margin-x">
                            <div id="j3-hero" class="large-6 cell">
                                <h3>Looking for data insights on an area of London?</h3>
                                <h6>Here's a sentence explaining the data pack proposition and pricing</h6>
                            </div>
                            <div id="j3-hero-form" class="large-6 cell">
                                <label>Choose an area of London
                                    <input type="text" placeholder="Enter a borough, postcode or address">
                                </label>
                                <a class="button secondary expanded">Search for data packs</a>
                            </div>
                        </div>
                    </div>
                    <div class="large-1 cell"></div>
                </div>
            </div>


        </div>
    </div>

    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
