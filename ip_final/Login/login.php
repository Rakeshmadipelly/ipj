<!DOCTYPE html>
<html>
<head>
<title>DCS | Login</title>
<link rel="stylesheet" href="login.css">
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
        
        <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">

            <div id="error"></div>
                <table>
                    <tbody>
                        <tr >
                            <td >Email :</td>
                            <td><input type="text" name="uname" id="fname" onkeydown="HideError()" size="20px;"/></td>
                        </tr>
                        <tr >
                            <td >Password :</td>
                            <td><input type="password" name="password" id="password" onkeydown="HideError()" size="20px;"/></td>
                        </tr>
                    
                        <tr >
                            <td><input id="logbtn" type="submit" name="submit" value="Login" /></td>
                        </tr>
                        <!-- <tr >    
                            <td><button><a id="forgotbtn" href="#" onclick="getPage('forgetPassword.php')"><i id="forgotbtntext">forgot password</i></a></button></td>
                        </tr> -->
                    </tbody>
                </table>
        </form>

    </div>

</div>

<div id="footer">

    <P>IP Project</P>

</div>

</body>
</html>
