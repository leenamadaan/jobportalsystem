
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<?php
error_reporting(0);
ob_start();
session_start();
   //Connection */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Job Portal</title>
         <script type="text/JavaScript" src="js/scw.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css">
   <script type="text/javascript">
            function contact(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');

                }
            }
                function mob()
            {
                var rl=document.getElementById("number").value;
                if(rl.toString().length<10)
                {
                    alert("Contact No. should be of ten digits");
                    return false;
                }

            }
               function valid() {
                //alert('calling');
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                // var address = document.forms[form_id].elements[txtemail_id].value;
                var address = document.getElementById('txtemail').value;
                if(reg.test(address) == false) {
                    alert('Invalid Email Address');
                    return false;
                }
            }

        </script>
    </head>
    <body>
        <table  cellspacing="0" cellpadding="0" align="center" border="0" class="body_content">
            <tr>
                <td colspan="3"  height="80" class="red-font-bold" align="center">
                     <?php
                                include("header.php");
                                ?>
                </td>
            </tr>
            <tr>

                <td width="900"  height="500" valign="top">
                    <span style="padding-left: 20px;text-align: justify;" class="text-11" >
  <div class="body-cont-col" style="height: 450px;overflow: auto;">
                        <div style="height: 20px;"></div>
                        <div class="head1" align="center"><strong></strong></div>
                     <form id="frm" action="Login1.php" method="post">
                                <fieldset style="height: auto;width: 500px; padding: 20px;">
                                    <legend>Login</legend>
                                    <table align="center" cellpadding="5" cellspacing="5">
                                        <tr>
                                            <td class="text">
                                                Login As
                                            </td>
                                            <td class="text">
                                                <input type="radio" name="rdologin" id="rdodoctor" value="admin"/>&nbsp;&nbsp;&nbsp;Admin
                                                <input type="radio" name="rdologin" id="rdopatient" value="user"/>&nbsp;&nbsp;&nbsp;User
												 <input type="radio" name="rdologin" id="rdopatient" value="company"/>&nbsp;&nbsp;&nbsp;Company
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text">User Name:</td>
                                            <td class="text"><input type="text" id="txtemailid" name="txtemailid" style="font-size: 15px; width: 180px; height: 30px;"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">Password:</td>
                                            <td class="text"><input type="password" id="txtpass" name="txtpass" style="font-size: 15px; font-weight: bold; height: 30px; width: 180px;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="right">
                                                <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
                                            </td>
                                        </tr>
                                    </table>

                                </fieldset>
                            </form>
                    </div>  </td>
                </span>
                </td>

            </tr>
            <tr>
                <td colspan="3" width="100%" class="footer" align="center">
                      <?php
                                include("footer.php");
                                ?>
                </td>
            </tr>
        </table>
    </body>
</html>

