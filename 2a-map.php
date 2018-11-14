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
        <div id="property-filters" class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-8">
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

        <!-- Audience filters -->
        <div id="audience-filters" class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-6">
            <div class="cell">
                <label>Gender</label>
                <div class="expanded button-group">
                    <a class="tiny button hollow">Male</a>
                    <a class="tiny button hollow">Female</a>
                    <a class="tiny button">Not important</a>
                </div>
            </div>
            <div class="cell">Age</div>
            <div class="cell">Earnings</div>
            <div class="cell">Features</div>
        </div>



    </div>

    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
