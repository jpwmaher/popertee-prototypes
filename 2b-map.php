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

        </div>

        <!-- Property filters -->
        <div id="property-filters" class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-5">
            <div class="cell">
                <label>Location</label>
                <select id='colorselector2'>
                    <option  value="audience-filters">London</option>
      <option value="">Somewhere else</option>
                </select>
            </div>
            <div class="cell">
                <label>Type</label>
                <select>
                    <option value="none">Any</option>
      <option value="">Office</option>
    <option value="">Showroom</option>
                </select>
            </div>
            <div class="cell"> <label>Rent</label><select>
                    <option value="none">Any</option>
      <option value="">0 - 200</option>
    <option value="">201 - 300</option>
                </select></div>
            <div class="cell"> <label>Size</label><select>
                    <option value="none">Any</option>
      <option value="">Under 500 sq.ft</option>
    <option value="">500 - 1000 sq.ft</option>
                <option value="">Over 1000 sq.ft</option>
                </select></div>
            <div class="cell"> <label>Features</label><select>
                    <option value="none">Any</option>
      <option value="">Office</option>
    <option value="">Showroom</option>
                </select></div>
        </div>

        <div class="grid-x grid-padding-x">
            <div id="audience-filters" class="large-3 cell colors2 red">
                <!-- Audience filters -->
                <div>
                    <h4>Find your audience</h4>
                    <h6>London-only</h6>
                    <div class="grid-x grid-padding-x small-up-1 medium-up-1 large-up-1">
                        <div class="cell">
                            <label>Gender</label>
                            <div class="grid-x grid-padding-x small-up-1 medium-up-1 large-up-3">
                                <div class="cell"><a class="expanded button hollow">Male</a></div>
                                <div class="cell"><a class="expanded button hollow">Female</a></div>
                                <div class="cell"><a class="expanded button">Either</a></div>
                            </div>
                        </div>
                        <div class="cell"><label>Age</label>
                            <div class="slider" data-slider data-initial-start="25" data-initial-end="75">
                                <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                <span class="slider-fill" data-slider-fill></span>
                                <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                <input type="hidden">
                                <input type="hidden">
                            </div>
                        </div>
                        <div class="cell"><label>Earnings</label>
                            <div class="slider" data-slider data-initial-start="25" data-initial-end="75">
                                <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                <span class="slider-fill" data-slider-fill></span>
                                <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                <input type="hidden">
                                <input type="hidden">
                            </div>
                        </div>
                        <div class="cell">Interests</div>
                    </div>
                </div>
            </div>
            <div class="large-auto cell">
                <div class="grid-x grid-padding-x">
                    <div id="map" class="large-12 medium-12 cell">
                        <!-- <h3>Map</h3> -->
                        <img src="img/sketch-london.jpg">
                    </div>
                    <div id="cards" class="large-12 medium-12 cell">
                        <h3>Pop-ups (cards)</h3>
                        <div class="grid-x grid-padding-x small-up-1 medium-up-1 large-up-3">
                            <div class="cell"><a class="expanded button hollow">Pop-up 1</a></div>
                            <div class="cell"><a class="expanded button hollow">Pop-up 2</a></div>
                            <div class="cell"><a class="expanded button hollow">Pop-up 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
