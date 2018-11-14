<div class="cell">
    <div id="patient-summary" class="grid-x grid-padding-x">
        <div class="cell">
            <div class="grid-x grid-padding-x">
                <div id="summary-name" class="large-6 medium-5 cell summary-panel">
                    <div class="grid-x">
                        <!-- <div class="shrink cell">
                                <img src="img/tiger.png" style="width: 100px;">
                            </div> -->
                        <div class="auto cell">
                            <span class="summary-label">Full name:</span><br/><span class="summary-info summary-info-name"><?php echo $firstname ?> <?php echo $surname ?></span><br/>
                            <span class="summary-info summary-info-gender-age" style="padding-top: 100px !important;"><?php echo $gender ?> <span style="color: lightgray">|</span> 42 years old</span>
                        </div>
                    </div>
                </div>
                <div class="large-2 medium-shrink small-6 cell summary-panel">
                    <span class="summary-label">NHS No:</span><br/>
                    <span class="summary-info"><?php echo $nhsno ?></span><br/><br/>
                    <span class="summary-label summary-info-gender-age">DOB:</span><br/>
                    <span class="summary-info"><?php echo $dob ?></span>
                </div>
                <div id="summary-address" class="large-2 medium-shrink small-6 cell summary-panel">
                    <span class="summary-label">Address:</span><br/>
                    <span class="summary-info">
                        <?php include("include-concept-a-address.php"); ?>
                    </span>
                </div>
                <div class="large-2 medium-auto small-12 cell summary-panel">
                    <div class="grid-x grid-padding-x">
                        <div class="small-6 medium-12 cell">
                            <span class="summary-label">Mobile:</span><br/>
                            <span class="summary-info">07123 456 789</span><br/><br/>
                        </div>
                        <div class="small-6 medium-12 cell">
                            <span class="summary-label summary-info-gender-age">Email:</span><br/>
                            <span class="summary-info">bill@thebard.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
