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
        <div id="propety-filters" class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-8">
            <div class="cell">
                <label>Type</label>
                <select>
                    <option value="none">Any</option>
      <option value="">Office</option>
    <option value="">Showroom</option>
                </select>
            </div>
            <div class="cell"> <label>Rent</label></div>
            <div class="cell"> <label>Size</label></div>
            <div class="cell"> <label>Features</label></div>
        </div>

        <!-- Audience filters -->
        <div id="audience-filters" class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-8">
            <div class="cell">Gender</div>
            <div class="cell">Age</div>
            <div class="cell">Earnings</div>
            <div class="cell">Features</div>
        </div>



    </div>

    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
