<?php
session_start();
if (!isset($_SESSION['myPosition'])) {
  $_SESSION['myPosition'] = false;
} else {
  $_SESSION['myPosition'] = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/myCss2.css">
	<script type="text/javascript" src="js/myScript.js" defer="defer"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="row">
	<br>
        <div class="col-xs-12">
            <div class="well"><i class="fa fa-cutlery fa-3x"></i><b style="font-size: 34px">&emsp;Restauracje</b></div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <button type="button" class="btn btn-primary" id="buttonSort"><i class="fa fa-filter"></i>&emsp;Posortuj</button>
                <a href=showall.php><button type="button" class="btn btn-primary" id="buttonSort"><i class="fa fa-map-o"></i>&emsp;Zobacz wszystkie na mapie</button></a>
            </div>
        </div>
        <div class="col-xs-2">
    
        </div>
    </div>
	
	<div id="rowsContainer"></div>

    <!--<div class="row">
        <div class="col-xs-10">
            <div class="well">
                <i class="fa fa-cutlery fa-2x"></i>
                <b id="1" style="font-size: 15px"></b>
                <button data-toggle="collapse" data-target="#demo" id="rozwin"><i class="fa  fa-level-down"></i></button>
                <div id="demo" class="collapse">
                    <p>Adres restauracji</p>
                    <div id="rating">
                        <i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xs-2">
            <a><button type="button" class="btn btn-primary" id="buttonGPS"><i class="fa fa-map-o"></i></button></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10">
            <div class="well">
                <i class="fa fa-cutlery fa-2x"></i>
                <b id="2" style="font-size: 15px"></b>
                <button data-toggle="collapse" data-target="#demo1" id="rozwin"><i class="fa  fa-level-down"></i></button>
                <div id="demo1" class="collapse">
                    <p>Adres restauracji</p>
                    <div id="rating">
                        <i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star-half-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-xs-2">
            <button type="button" class="btn btn-primary" id="buttonGPS"><i class="fa fa-map-o"></i></button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10">
            <div class="well">
                <i class="fa fa-cutlery fa-2x"></i>
                <b id="3" style="font-size: 15px"></b>
                <button data-toggle="collapse" data-target="#demo2" id="rozwin"><i class="fa  fa-level-down"></i></button>
                <div id="demo2" class="collapse">
                    <p>Adres restauracji</p>
                    <div id="rating">
                        <i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star-half-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-xs-2">
            <button type="button" class="btn btn-primary" id="buttonGPS"><i class="fa fa-map-o"></i></button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10">
            <div class="well">
                <i class="fa fa-cutlery fa-2x"></i>
                <b id="4" style="font-size: 15px"></b>
                <button data-toggle="collapse" data-target="#demo3" id="rozwin"><i class="fa  fa-level-down"></i></button>
                <div id="demo3" class="collapse">
                    <p>Adres restauracji</p>
                    <div id="rating">
                        <i class="fa fa-star fa-1x"></i><i class="fa fa-star-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-xs-2">
            <button type="button" class="btn btn-primary" id="buttonGPS"><i class="fa fa-map-o"></i></button>
        </div>
    </div>-->
 
</body>
</html>