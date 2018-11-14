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
                        <h4>[insert key copy highlighting the difference between popertee &amp; marketplace competitors here]
                        </h4>
                    </div>
                </div>
            </div>

            <div class="cell">
                <hr>
            </div>

            <div class="cell">
                <fieldset>
                    <legend>Choose Your Favorite</legend>
                    <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Red</label>
                    <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" data-toggle-focus="form-callout"><label for="pokemonBlue">Blue</label>
                    <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
                </fieldset>
                <div class="secondary callout is-hidden" id="form-callout" data-toggler="is-hidden">
                    <p>This is only visible when the above field has focus.</p>
                </div>
            </div>

            <!-- choice panel -->
            <div id="choice" class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div id="j1-hero" class="large-6 cell">
                        <h2>Journey 1</h2>
                        <ul>
                            <li>User knows audience</li>
                            <li>User wants to find out best location/space to engage with their target audience </li>
                            <li>Map lead journey </li>
                            <li>User can download data pack</li>
                        </ul>
                        <a href="#" class="button large secondary">Journey 1</a>
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
