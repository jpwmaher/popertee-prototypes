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

        <div class="grid-x grid-padding-x grid-margin-x">

            <!-- Map filters -->
            <div id="filters" style="overflow: hidden;">
                <div id="filters-slidee" style="transform: translateZ(0px); width: 874px;">
                    <div class="facet">
                        <div class="facet-title">TRANSACTION</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true" id="transaction-type-dropdown">
    	<span class="facet-current-value facet-in-play" id="transaction-type-current-value">To rent</span>
    	<span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
    </a>
                            <ul class="dropdown-menu facet-dropdown" role="menu">
                                <li class="active">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a id="facet-switch-transaction-type-context-to-rent"><span class="facet-count pull-right"></span>To rent</a>
                                </li>
                                <li>
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a id="facet-switch-transaction-type-context-for-sale"><span class="facet-count pull-right"></span>For sale</a>
                                </li>
                            </ul>
                        </div>
                    </div>




                    <div class="facet">
                        <div class="facet-title">PROPERTY TYPE</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true" id="buildingtype-dropdown">
    	<span class="facet-current-value" id="buildingtype-current-value"><span class="facet-current-value-any">Any</span></span>
    	<span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
    </a>
                            <ul class="dropdown-menu facet-dropdown" id="buildingtype-terms" role="menu">
                                <li class="active">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="fake-checkbox-any realla-icon realla-icon-icon_tick"></i></span></div><a href="#" class="any-facet facet-link" data-facet="buildingtype"><span class="facet-current-value-any">Any</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_office_0" value="office">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--office" id="" title="Filter results by conventional office" data-activate-id="filter_buildingtype_office_0"><span class="facet-count pull-right">4337</span>Conventional office</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_retail_1" value="retail">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--retail" id="" title="Filter results by retail" data-activate-id="filter_buildingtype_retail_1"><span class="facet-count pull-right">1809</span>Retail</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_serviced_office_2" value="serviced office">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--serviced-office" id="" title="Filter results by serviced office" data-activate-id="filter_buildingtype_serviced_office_2"><span class="facet-count pull-right">1750</span>Serviced office</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_industrial_3" value="industrial">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--industrial" id="" title="Filter results by industrial" data-activate-id="filter_buildingtype_industrial_3"><span class="facet-count pull-right">797</span>Industrial</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_leisure_4" value="leisure">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--leisure" id="" title="Filter results by leisure" data-activate-id="filter_buildingtype_leisure_4"><span class="facet-count pull-right">217</span>Leisure</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_land_5" value="land">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--land" id="" title="Filter results by land" data-activate-id="filter_buildingtype_land_5"><span class="facet-count pull-right">35</span>Land</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_other_6" value="other">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--other" id="" title="Filter results by other" data-activate-id="filter_buildingtype_other_6"><span class="facet-count pull-right">25</span>Other</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_co_working_space_7" value="co working space">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--co-working-space" id="" title="Filter results by co working space" data-activate-id="filter_buildingtype_co_working_space_7"><span class="facet-count pull-right">13</span>Co working space</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_mixed_use_8" value="mixed use">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--mixed-use" id="" title="Filter results by mixed use" data-activate-id="filter_buildingtype_mixed_use_8"><span class="facet-count pull-right">7</span>Mixed use</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_car_showroom_9" value="car showroom">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--car-showroom" id="" title="Filter results by car showroom" data-activate-id="filter_buildingtype_car_showroom_9"><span class="facet-count pull-right">1</span>Car showroom</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_healthcare_10" value="healthcare">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--healthcare" id="" title="Filter results by healthcare" data-activate-id="filter_buildingtype_healthcare_10"><span class="facet-count pull-right">1</span>Healthcare</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][building_type][]" id="filter_buildingtype_warehouse_11" value="warehouse">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or  facet-link-building-type facet-link-building-type--warehouse" id="" title="Filter results by warehouse" data-activate-id="filter_buildingtype_warehouse_11"><span class="facet-count pull-right">1</span>Warehouse</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="facet">
                        <div class="facet-title">RENT (PSF)</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true" id="rentalrentsqft-dropdown">
	  	<span class="facet-current-value" id="rentalrentsqft-current-value"><span class="facet-current-value-any">Any</span></span>
	  	<span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
	  </a>
                            <ul class="dropdown-menu facet-dropdown facet-dropdown-range" role="menu">
                                <div class="facet-range-filter-inputs facet-price-range" id="rentalrentsqft-inputs">
                                    <div class="facet-range-filter-options">
                                        <select name="price_filters[rental_rent_sq_ft][currency]" id="price_filters_rental_rent_sq_ft_currency" class="form-control"><option value="£">£</option>
<option value="$">$</option>
<option value="€">€</option>
<option value="AED">AED</option></select>
                                    </div>
                                    <div class="facet-range-filter-from-to">
                                        <div class="facet-range-filter-input facet-range-filter-from">
                                            <label class="sr-only" for="price_filters[rental_rent_sq_ft][gte]">Min</label>
                                            <input type="text" class="form-control input-sm" id="rental_rent_sq_ft_gte" name="price_filters[rental_rent_sq_ft][gte]" value="" placeholder="From">
                                        </div>
                                        <div class="facet-range-filter-input facet-range-filter-to">
                                            <label class="sr-only" for="price_filters[rental_rent_sq_ft][lte]">Max</label>
                                            <input type="text" class="form-control input-sm" id="rental_rent_sq_ft_lte" name="price_filters[rental_rent_sq_ft][lte]" value="" placeholder="to">
                                        </div>
                                    </div>
                                    <div class="facet-range-filter-submit">
                                        <button id="rental_rent_sq_ft_submit" class="btn btn-default btn-sm">Go</button>
                                    </div>
                                    <a href="/" class="facet-range-filter-clear" data-facet-name="rentalrentsqft">Clear</a>
                                </div>
                                <div class="facet-median-price">Median price: <span id="median-price">£39.17</span></div>
                                <div class="facet-range-terms" id="rentalrentsqft-terms">
                                    <li class="active">
                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="fake-checkbox-any realla-icon realla-icon-icon_tick"></i></span></div><a href="#" class="any-facet facet-link" data-facet="rentalrentsqft"><span class="facet-current-value-any">Any</span></a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £0 to £5" data-activate-id="rental_rent_sq_ft" data-lte="5"><span class="facet-count pull-right">202</span>£0 to £5</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £5 to £10" data-activate-id="rental_rent_sq_ft" data-gte="5" data-lte="10"><span class="facet-count pull-right">163</span>£5 to £10</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £10 to £15" data-activate-id="rental_rent_sq_ft" data-gte="10" data-lte="15"><span class="facet-count pull-right">409</span>£10 to £15</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £15 to £20" data-activate-id="rental_rent_sq_ft" data-gte="15" data-lte="20"><span class="facet-count pull-right">437</span>£15 to £20</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £20 to £25" data-activate-id="rental_rent_sq_ft" data-gte="20" data-lte="25"><span class="facet-count pull-right">500</span>£20 to £25</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £25 to £30" data-activate-id="rental_rent_sq_ft" data-gte="25" data-lte="30"><span class="facet-count pull-right">555</span>£25 to £30</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £30 to £35" data-activate-id="rental_rent_sq_ft" data-gte="30" data-lte="35"><span class="facet-count pull-right">468</span>£30 to £35</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £35 to £40" data-activate-id="rental_rent_sq_ft" data-gte="35" data-lte="40"><span class="facet-count pull-right">481</span>£35 to £40</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £40 to £45" data-activate-id="rental_rent_sq_ft" data-gte="40" data-lte="45"><span class="facet-count pull-right">437</span>£40 to £45</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £45 to £50" data-activate-id="rental_rent_sq_ft" data-gte="45" data-lte="50"><span class="facet-count pull-right">543</span>£45 to £50</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £50 to £60" data-activate-id="rental_rent_sq_ft" data-gte="50" data-lte="60"><span class="facet-count pull-right">742</span>£50 to £60</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £60 to £70" data-activate-id="rental_rent_sq_ft" data-gte="60" data-lte="70"><span class="facet-count pull-right">488</span>£60 to £70</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £70 to £80" data-activate-id="rental_rent_sq_ft" data-gte="70" data-lte="80"><span class="facet-count pull-right">259</span>£70 to £80</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £80 to £90" data-activate-id="rental_rent_sq_ft" data-gte="80" data-lte="90"><span class="facet-count pull-right">189</span>£80 to £90</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £90 to £100" data-activate-id="rental_rent_sq_ft" data-gte="90" data-lte="100"><span class="facet-count pull-right">108</span>£90 to £100</a>
                                    </li>
                                    <li>

                                        <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                        <a href="#" class="facet-range-link  logic-and facet-single" id="" title="Filter results by £100 to max" data-activate-id="rental_rent_sq_ft" data-gte="100"><span class="facet-count pull-right">125</span>£100 to max</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>


                    <div class="facet">
                        <div class="facet-title">SIZE (SQ FT)</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true" id="sizesfromsqft-dropdown">
	  	<span class="facet-current-value" id="sizesfromsqft-current-value"><span class="facet-current-value-any">Any</span></span>
	  	<span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
	  </a>
                            <ul class="dropdown-menu facet-dropdown facet-dropdown-range" role="menu">
                                <div class="facet-range-filter-inputs facet-size-range" id="sizesfromsqft-inputs">
                                    <div class="facet-range-filter-from-to">
                                        <div class="facet-range-filter-input facet-size-range-filter-input facet-range-filter-from">
                                            <label class="sr-only" for="size_filters[sizes_from_sq_ft][gte]">Min</label>
                                            <input type="number" class="form-control input-sm" id="sizes_from_sq_ft_gte" name="size_filters[sizes_from_sq_ft][gte]" value="" placeholder="From">
                                        </div>
                                        <div class="facet-range-filter-input facet-size-range-filter-input facet-range-filter-to">
                                            <label class="sr-only" for="size_filters[sizes_from_sq_ft][lte]">Max</label>
                                            <input type="number" class="form-control input-sm" id="sizes_from_sq_ft_lte" name="size_filters[sizes_from_sq_ft][lte]" value="" placeholder="to">
                                        </div>
                                    </div>
                                    <div class="facet-range-filter-submit facet-size-filter-submit">
                                        <button id="sizes_from_sq_ft_submit" data-facet-name="sizesfromsqft" class="btn btn-default btn-sm">Go</button>
                                    </div>
                                    <a href="/" class="facet-range-filter-clear" data-facet-name="sizesfromsqft">Clear</a>
                                </div>
                            </ul>
                        </div>
                    </div>



                    <div class="facet">
                        <div class="facet-title">DATE ADDED</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true" id="freshness-dropdown">
    	<span class="facet-current-value" id="freshness-current-value"><span class="facet-current-value-any">Any</span></span>
    	<span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
    </a>
                            <ul class="dropdown-menu facet-dropdown" id="freshness-terms" role="menu">
                                <li class="active">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="fake-checkbox-any realla-icon realla-icon-icon_tick"></i></span></div><a href="#" class="any-facet facet-link" data-facet="freshness"><span class="facet-current-value-any">Any</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[and][freshness][]" id="filter_freshness_14112018_0" value="14/11/2018-*">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-and  facet-single" id="" title="Filter results by today" data-activate-id="filter_freshness_14112018_0"><span class="facet-count pull-right">85</span>Today</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[and][freshness][]" id="filter_freshness_07112018_1" value="07/11/2018-*">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-and  facet-single" id="" title="Filter results by this week" data-activate-id="filter_freshness_07112018_1"><span class="facet-count pull-right">525</span>This week</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[and][freshness][]" id="filter_freshness_31102018_2" value="31/10/2018-*">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-and  facet-single" id="" title="Filter results by last week" data-activate-id="filter_freshness_31102018_2"><span class="facet-count pull-right">924</span>Last week</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[and][freshness][]" id="filter_freshness_15102018_3" value="15/10/2018-*">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-and  facet-single" id="" title="Filter results by 30 days" data-activate-id="filter_freshness_15102018_3"><span class="facet-count pull-right">1738</span>30 days</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[and][freshness][]" id="filter_freshness_15092018_4" value="15/09/2018-*">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-and  facet-single" id="" title="Filter results by 60 days" data-activate-id="filter_freshness_15092018_4"><span class="facet-count pull-right">2989</span>60 days</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[and][freshness][]" id="filter_freshness_16082018_5" value="16/08/2018-*">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-and  facet-single" id="" title="Filter results by 90 days" data-activate-id="filter_freshness_16082018_5"><span class="facet-count pull-right">3739</span>90 days</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="facet">
                        <div class="facet-title">SPECIFICATION</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" aria-haspopup="true" href="/users/sign_up" role="button" aria-expanded="true">
                  <span class="facet-current-value"><span class="facet-current-value-any">Sign up</span></span>
                  <span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
                </a>
                        </div>
                    </div>

                    <div class="facet">
                        <div class="facet-title">AGENCY</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" aria-haspopup="true" href="/users/sign_up" role="button" aria-expanded="true">
                  <span class="facet-current-value"><span class="facet-current-value-any">Sign up</span></span>
                  <span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
                </a>
                        </div>
                    </div>






                    <div class="facet">
                        <div class="facet-title">AVAILABILITY</div>
                        <div class="facet-values facet-single dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true" id="salestage-dropdown">
    	<span class="facet-current-value facet-in-play" id="salestage-current-value">Available</span>
    	<span class="facet-caret pull-right"><i class="realla-icon realla-icon-icon_arrow_down_sm "></i></span>
    </a>
                            <ul class="dropdown-menu facet-dropdown" id="salestage-terms" role="menu">
                                <li>
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="fake-checkbox-any realla-icon realla-icon-icon_tick"></i></span></div><a href="#" class="any-facet facet-link" data-facet="salestage"><span class="facet-current-value-any">Any</span></a>
                                </li>
                                <li class="active">
                                    <input type="checkbox" name="search_filters[or][sale_stage][]" id="filter_salestage_available_0" value="available" checked="checked">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or " id="" title="Remove available filtering" data-activate-id="filter_salestage_available_0"><span class="facet-count pull-right">10469</span>Available</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][sale_stage][]" id="filter_salestage_soldorlet_1" value="sold_or_let">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or " id="" title="Filter results by sold or let" data-activate-id="filter_salestage_soldorlet_1"><span class="facet-count pull-right">1421</span>Sold or let</a>
                                </li>
                                <li>
                                    <input type="checkbox" name="search_filters[or][sale_stage][]" id="filter_salestage_underoffer_2" value="under_offer">
                                    <div class="fake-checkbox-container"><span class="fake-checkbox"><i class="realla-icon realla-icon-icon_tick"></i></span></div>
                                    <a href="#" class="facet-link logic-or " id="" title="Filter results by under offer" data-activate-id="filter_salestage_underoffer_2"><span class="facet-count pull-right">1096</span>Under offer</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>

        </div>



    </div>

    <?php include("include-popertee-javascripts.php"); ?>

</body>

</html>
