
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
                        <div class="head1" align="center"><strong>SignUp Form</strong></div>
                     <form id="frm" action="Registration1" method="post">
                            <table  border="0" cellspacing="20" cellpadding="8" style align="center">
                                <tr>
                                    <td>
                                        <fieldset>
                                            <legend>Login Information</legend>
                                            <table cellpadding="5" cellspacing="5">
                                               
                                                <tr>
                                                    <td class="text"><span style="color: red;"></span>User Id:</td>
                                                    <td> <input type= "text" size="25"  id="txthidden" name="txthidden"></td>

                                                    <td class="text"><span style="color: gray;">*</span> User Name:</td>
                                                    <td class="text-1"><input type="text" size="25"  id="uname" name="uname"></td>

                                                </tr>
                                                <tr>
                                                        <td class="text"><span style="color: red;">*</span>Password :</td>
                                                    <td> <input type= "password" size="25"  id="pwd" name="pwd"></td>
                                                   
                                                </tr>
                                            </table>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <fieldset>
                                            <legend>Personal Information</legend>
                                            <table cellpadding="5" cellspacing="5">
                                          
                                                <tr>
                                                    <td class="text"><span style="color: red;">*</span>First Name:</td>
                                                    <td><input type="text" size="25"  id="txtname" name="txtname" onblur=" CheckForAlphabets(this)" ></td>
                                                    <td class="text"><span style="color: red;">*</span>Last Name :</td>
                                                    <td> <input type= text size="25"  id="txtlname" name="txtlname" onblur=" CheckForAlphabets(this)" ></td>
                                                </tr>
                                                <tr>
                                                    <td class="text"><span style="color: red;">*</span>
                                                        Gender
                                                    </td>
                                                    <td class="text">
                                                        <select  id="cmbgender" name="cmbgender" style="width: 180px">
                                                            <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </td>
                                                    <td class="text"><span style="color: red;">*</span>Date of Birth</td>
                                                    <td> <input type= text size="25" name="txtdb"  id="txtdb" readonly onclick="scwShow(this,event)" ></td>
                                                </tr>
                                                <tr>
                                                    <td class="text"><span style="color: red;">*</span>Contact Number:</td>
                                                    <td> <input type= text size="25"  id="number" name="number" onkeyup="contact(this)" onblur="mob()"></td>
                                                    <td class="text"><span style="color: red;">*</span>Email Id:</td>
                                                    <td><input type="text" size="25" id="txtemail" name="txtemail"  onblur="valid()"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text">Address:</td>
                                                    <td><input type= text size="25"  id="txtaddress" name="txtaddress"></td>

                                                    <td class="text">City:</td>
                                                    <td>
                                                        <select id="cmbcity"   name="cmbcity" style="width: 180px;">
                                                            <option value="Select"> Select </option>
                                                            <option value="Delhi">  Delhi </option>
                                                            <option value="Gurgoan"> Gurgoan </option>
                                                            <option value="Noida"> Noida </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text">Pin Code:</td>
                                                    <td> <input type= text size="25"  id="txtpin" name="txtpin" onkeyup="contact(this)" onblur="pin()"></td>
                                                    <td class="text">State:</td>
                                                    <td><input type= text size="25"  id="txtstate" name="txtstate"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text">Country:</td>
                                                    <td>
                                                        <select  id="cmbcountry"name="cmbcountry" style="width:180px">
                                                            <option value="Select">- - - - Select - - - - </option>
                                                            <option value="America">America</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Africa">Africa</option>
                                                            <option value="Bangalore">Bangalore</option>
                                                            <option value="Bangkok">Bangkok</option>
                                                            <option value="India">India</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td align="center" colspan="2" >
                                        <input type="submit" value="Submit">
                                        <input type= "reset" value="Reset">
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

