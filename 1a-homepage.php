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
                        <h3><img src="img/Big-Ben@2x.png">&nbsp;Find your perfect London pop-up</h3>
                        <h6>Here's a sentence explaing London/Discover BETA</h6>
                        <label>Type of space
  <select id="spacetype">
    <option value="space-any">Any</option>
    <option value="space-offices">Offices</option>
      <option value="space-offices">Galleries</option>
      <option value="space-offices">Retail</option>
  </select>
</label>
                        <label>Dates
          <input type="text" placeholder="When would you like to pop-up?">
        </label>
                        <br/>
                        <a class="button secondary large" href="2b-map.php">Search for London pop-ups</a>

                    </div>
                    <div id="j2-hero" class="large-6 cell">
                        <h3>Looking elsewhere?</h3>
                        <h6>We have over 20,000 spaces in places like Manchester - Dublin - Bristol - Liverpool - Birmingham</h6>

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
                    <div class="large-2 cell"></div>
                    <div id="j3" class="large-8 cell">
                        <div class="grid-x grid-padding-x grid-margin-x">
                            <div id="j3-hero" class="large-6 cell">
                                <h2>Journey 3</h2>
                                <ul>
                                    <li>User knows location (address)</li>
                                    <li>User wants data insights on a specific location</li>
                                    <li>User can enter location download a data pack</li>
                                </ul>
                            </div>
                            <div id="j3-hero-form" class="large-6 cell">
                                <form>
                                    <div class="grid-x grid-padding-x">
                                        <div class="cell">
                                            <input type="text" placeholder="Where do you want to pop-up"><br/></div>
                                    </div>
                                    <div class="grid-x grid-padding-x">
                                        <div class="cell">
                                            <input type="text" placeholder="When do you want to pop-up"><br/></div>
                                    </div>
                                </form>
                                <a href="#" class="button large secondary">Journey 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="large-2 cell"></div>
                </div>
            </div>


        </div>
    </div>

    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
