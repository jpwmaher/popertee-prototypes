<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/vendor/top.js"></script>
<script src="js/vendor/patient-float.js"></script>
<script>
    $(function() {
        $('#colorselector').change(function() {
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });

</script>
