<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>DCS | Success</title>
<link rel="stylesheet" href="./success.css">
</head>
<body>


<div id="main">

    <div id="header">
        <h1>DCS | <span>Upload</span></h1>  
    </div>

    <div id="content">
        
        <h1 > Success</h1>
        <h2 >Your file successfully Uploaded</h2>

    </div>

</div>


<div id="footer">

    <P>IP Project</P>

</div>


</body>
</html>
<?php
$path = ($_SESSION['type'] == 'Admin') ? "../" : "../Normal/";
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>