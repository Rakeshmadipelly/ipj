
<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<h2 style="text-align: center;">User Registration form </h2>
<form name="Myform" id="Myform" action="User/RegisterProcess.php" method="post" onsubmit="return(Validate());">
   
    <table style=" margin-left: 11em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>First name</td>
                <td><input type="text" name="fname" id="fname" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="mobile" id="mobile" maxlength="10" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Email address</td>
                <td><input type="text" name="email" id="email" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="lname" id="lname" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>User Type</td>
                <td>
                    <select name="usertype" id="usertype" onkeydown="HideError()">
                        <option value="user" selected>Select User type</option>
                        <option value="Normal">Normal</option>
                        <option value="Admin" >Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add" /></td>
            </tr>
        
        </tbody>
    </table>
</form>

