<!DOCTYPE html>
<html lang="id">
<head>
	<title>Calendar 2019</title>
	<style>
		body{
			font-family: arial;
			margin-right: auto;
			margin-left: auto;
			max-width: 1059px;
		}
		table, th, tr, td{
			border: 1px solid black;
			margin-left: auto;
			margin-right: auto;
		}
		div{
			width: 350px;
			height: 300px;
			position: relative;
			float: left;
		}
		.center{
			text-align: center;
		}
		.hol{
			background-color: #FF0000;
		}
		.today{
			background-color: #FFFF00;
		}
		.noborder{
			border: none;
			margin: 0px;
		}
	</style>

</head>
<body>
<?php
include 'calendar.inc';
?>
<h1 class="center">My Calendar</h1>
<div><?php display_month(1, 2019);?> </div>
<div><?php display_month(2, 2019);?> </div>
<div><?php display_month(3, 2019);?> </div>

<div><?php display_month(4, 2019);?> </div>
<div><?php display_month(5, 2019);?> </div>
<div><?php display_month(6, 2019);?> </div>

<div><?php display_month(7, 2019);?> </div>
<div><?php display_month(8, 2019);?> </div>
<div><?php display_month(9, 2019);?> </div>

<div><?php display_month(10, 2019);?> </div>
<div><?php display_month(11, 2019);?> </div>
<div><?php display_month(12, 2019);?> </div>

<h1>National Holiday</h1>
<?php display_holiday()?>


</body>
</html>