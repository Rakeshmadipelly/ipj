<!DOCTYPE html>
<html>
<head>
<title>DCS | Success</title>
<link rel="stylesheet" href="./success.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body>


<div id="main">

    <div id="header">
        <h1>DCS | <span>Login</span></h1>  
    </div>

    <div id="content">
        
        <h1 > Success</h1>
        <h2 >Your Password has been changed successfully</h2>

    </div>

</div>


<div id="footer">

    <P>IP Project</P>

</div>




</body>
</html>
<?php
    $loc = "./login.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>