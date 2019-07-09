
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
                var rl=document.getElementById("txtcontactno").value;
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
                   
                          <form id="frm" action="Enquiry1.php" method="post">
                                <table align="center" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td colspan="2" height="40px" valign="top" align="center">
                                            <strong style="font-size: 18px;font-weight: bold;">Feedback Service</strong>                            </td>
                                    </tr>




                                    <tr>
                                        <td class="form-field1" align="left">Name</td>
                                        <td class="form-field1" align="left"><input type="text" name="txtname" size="35"></td>
                                    </tr>
                                    <tr>
                                        <td class="form-field1" align="left">Email</td>
                                        <td class="form-field1" align="left"><input type="text" name="txtemail" id="txtemail" size="35" onblur="valid()"></td>
                                    </tr>
                                    <tr>
                                        <td class="form-field1" align="left">Contact No.</td>
                                        <td class="form-field1" align="left"><input type="text" name="txtcontactno" id="txtcontactno" size="35" onkeyup=" return contact(this)" onblur="mob()"></td>
                                    </tr>

                                    <tr>
                                        <td class="form-field1" align="left" >
                                            Enquiry /Feedback / Suggestion&nbsp;&nbsp;

                                        </td>
                                        <td>
                                            <select name="cmbfeedback" style="width:240px;">
                                                <option value="Feedback">Feedback</option>
                                                <option value="Suggestion">Suggestion</option>
                                                 <option value="Enquiry">Enquiry</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="form-field1" align="left">Your Remark</td>
                                        <td class="form-field1" align="left">
                                            <textarea style="width:240px;height: 50px;" name="txtarearemarks" id="txtarearemarks">

                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="form-field1" align="center" width="40%">&nbsp;</td>
                                        <td class="form-field1" align="left">
                                            <input type="submit" name="btnsubmit" class="button" value="Submit">
                                            <input type="reset" name="btnreset" class="button" value="Reset">
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

