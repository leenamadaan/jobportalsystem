
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
                var rl=document.getElementById("txt_phone").value;
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
                var address = document.getElementById('txt_eml').value;
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
                        <div class="head1" align="center"><strong>SignUp Form</strong></div>
                         <form id="frm" action="Registration2.php" method="post">
                                    <table align="center" cellpadding="5" cellspacing="5">
                                        <tr>
                                            <td class="text1" colspan="2">Registration</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="middle" align="center">
                                                <?php
                                                if ($_SESSION['MSG'] != '') {
                                                    echo '<div class="msgbox">' . $_SESSION['MSG'] . '</div>';
                                                    $_SESSION['MSG'] = "";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text">Name:</td>
                                            <td class="text"><input type="text"  id="txt_name" name="txt_name" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">DOB:</td>
                                            <td class="text"><input type="text"  id="txt_dob" name="txt_dob"style="width: 250px; height: 25px;" readonly onclick="scwShow(this,event)"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">Gender:</td>
                                            <td class="text">
                                                <select   id="txt_gndr" name="txt_gndr" style="width: 250px; height: 25px;">
                                                    <option value="select"> - - - -Select - - - - </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text">Phone</td>
                                            <td><input type="text"  id="txt_phone" name="txt_phone" style="width: 250px; height: 25px;" onkeyup="contact(this,value)" onblur="mob()"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">Location:</td>
                                            <td class="text"><input type="text"  id="txt_adrs" name="txt_adrs" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">City:</td>
                                            <td class="text"><input type="text" id="txt_cntas" name="txt_cntas" style="width: 250px; height: 25px;"></td>
                                        </tr>

                                        <tr>
                                            <td class="text">Email:</td>
                                            <td class="text"><input type="text"  id="txt_eml" name="txt_eml" style="width: 250px; height: 25px;" onblur="valid()"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">Password:</td>
                                            <td class="text"><input type="password"  id="txt_pass" name="txt_pass" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                                <input type="submit" class="button" value="Submit" onclick="return validate();">
                                                <input type="reset" class="button" value="Reset">
                                            </td>
                                        </tr>
                                    </table>
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

