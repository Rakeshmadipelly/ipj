<!DOCTYPE html>
<html>
<head>
<title>DCS | Success</title>
<link rel="stylesheet" href="./success.css">
</head>
<body>



<div id="main">

    <div id="header">
        <h1>DCS | <span>Message</span></h1>  
    </div>

    <div id="content">
        
        <h1 > Success</h1>
        <h2 >User deleted successfully</h2>

    </div>

</div>


<div id="footer">

    <P>IP Project</P>

</div>








</body>
</html>
<?php
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>