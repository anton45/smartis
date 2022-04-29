<?php

use App\Controller\ExchangeRateController;

require_once __DIR__ . '/vendor/autoload.php';

$postData = $_POST;

$controller = new ExchangeRateController($postData);
$result = $controller->main($postData);


?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Example</title>
    <!-- - -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js" type="text/javascript"></script>
    <!-- - -->
    <script type="text/javascript">
        var dat1 = [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4];
        var dat2 = JSON.parse('<?php echo $result; ?>');
    </script>
    <!-- - -->
    <script type="text/javascript">
        var chart1;
        $(document).ready(function(){
            chart1 = new Highcharts.Chart({
                chart: {renderTo: 'container1'},
                series: [{data: dat2}]
            });
        });
    </script>

    <!-- - -->

</head>
<body>
<div id="container1" style="width: 700px; height: 400px "></div>
<form action='/index.php' method='post'>
    <input type="text" name="startDate">
    <input type="text" name="stopDate">
    <input type="submit" name="save" >
</form>
</body>
</html>