<form name="Myform" id="Myform" action="forgetProcess.php" method="post" onsubmit="return(Validate());">
    
     <table >
         <thead></thead>
         <tbody>
             <tr>
                 <td >Email</td>
                 <td ><input type="text" name="fname" id="fname" onkeydown="HideError()" size="20px;"/></td>
             </tr>
             <tr>
                 <td >Phone number</td>
                 <td ><input type="text" name="mobile" id="password" onkeydown="HideError()" size="20px;"/></td>
             </tr>
             <tr>
                 <td >New Password</td>
                 <td ><input type="password" name="password" id="password" maxlength="8" onkeydown="HideError()" size="20px;"/></td>
             </tr>
             
             <tr>
                 
                 <td ><input  style= "background: rgba(255, 255, 255,0.5);
                    box-sizing: border-box; border-radius: 25px;
                    backdrop-filter: blur(5px);
                    width: 180px; cursor: pointer;
                    height: 30px;
                    border: 1px solid rgba(255, 255, 255,0.6); text-align: center;"
                    type="submit" name="submit" value="Change Password" /></td>
             </tr>
             <tr>
                 
                 <td style= " text-align: center; width: 180px; height: 30px;">
                 <a style="text-decoration: none; color: black;
                 background: rgba(255, 255, 255,0.5); padding: 2px 68px;
                 box-sizing: border-box; border-radius: 25px;
                 backdrop-filter: blur(5px); cursor: pointer;
                 border: 1px solid rgba(255, 255, 255,0.6);" 
                 href="login.php"><i>Back</i></a></td>
             </tr>
         
         </tbody>
     </table>
 </form>