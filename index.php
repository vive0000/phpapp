<!DOCTYPE html>
<html>
<head>
<style>
body
{
background-color:#f9f9f9;
}
h1
{
color:orange;
text-align:center;
}
p
{

font-size:30px;
text-align: center;
}

#content{
	width: 400px;
	margin:0px auto;
	}
#header{
	margin-top: 50px;
	margin-bottom: 50px;
	}

</style>
</head>
	<body>
		<div id="content">
			<div id="header"><img src="http://www.awsps.com.s3.amazonaws.com/training/materials/samplefiles/banner.png"></div>
			<div id="main">
				<p>
				<?php
$url = "http://169.254.169.254/latest/meta-data/instance-id";
$instance_id = file_get_contents($url);
echo "Instance ID: <b>" . $instance_id . "</b><br/>";
$url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
$zone = file_get_contents($url);
echo "Zone: <b>" . $zone . "</b><br/>";
echo "<p color=“blue”><b>I am the blue deployment</b></p>"
?>
				</p>
			</div>
			<div id="footer"> </div>
		</div>
	</body>
</html>