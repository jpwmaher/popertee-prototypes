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
                        <h2>Find your perfect London pop-up</h2>
                        <label>Type of space
  <select id="spacetype">
    <option value="space-any">Any</option>
    <option value="space-offices">Offices</option>
      <option value="space-offices">Galleries</option>
      <option value="space-offices">Retail</option>
  </select>
</label>
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
                        <a class="button secondary large" href="2b-map.php">Search for pop-ups</a>

                    </div>
                    <div id="j2-hero" class="large-6 cell">
                        <h2>Journey 2</h2>
                        <ul>
                            <li>User knows location (address)</li>
                            <li>User wants data insights on a specific location</li>
                            <li>User can enter location download a data pack</li>
                        </ul>
                        <a href="#" class="button large secondary">Journey 2</a>
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
                                <p>BASIC SEARCH: OUTSIDE OF LONDON OR NO DATA JOURNEY.
                                </p>
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
