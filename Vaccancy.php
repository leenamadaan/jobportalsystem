
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
                    include("company.php");
                    ?>
                </td>
            </tr>
            <tr>

                <td width="900"  height="500" valign="top">
                    <span style="padding-left: 20px;text-align: justify;" class="text-11" >
                        <div class="body-cont-col" style="height: 450px;overflow: auto;">
                            <div style="height: 20px;"></div>
                            <div class="head1" align="center"><strong>User List</strong></div>
                            <div style="height: 500px;width: 920px;overflow: auto;">
                                     <form id="frm" action="Vaccancy1.php" method="post">
                                <table width="900"  align="center" border="0" >
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
                                    <?php
                                            include_once "connection/dbconfig.php";
                                            // $query = ("select * from student order by (StudentId)desc limit 1 ");
                                            //$r = mysql_query($query);
                                            $result = mysql_query("select * from vacancy order by (a1)desc limit 1");
                                            while ($row = mysql_fetch_array($result)) {
                                                //echo  "abc";
                                                $num = $row['a1'];
                                                //echo $num;
                                                $n = (int) $num;
                                                //echo $n;
                                                //$num = $num + 1;
                                                $a1 = $n + 1;
                                            }
                                    ?>
                                            <tr>
                                                <td class="text">Job ID:</td>
                                                <td class="text"><input type="text"  id="txtid" name="txtid" style="width: 250px; height: 25px;" readonly value="<?php echo $a1 ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="text">Job For:</td>
                                                <td class="text">
                                                    <select   id="txtapp" name="txtapp" style="width: 250px; height: 25px;">
                                                        <option value="select"> - - - -Select - - - - </option>
                                                        <option value="HR">HR</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Accountant">Accountant</option>
                                                        <option value="IT">IT</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text">Name:</td>
                                                <td class="text"><input type="text"  id="txt_name" name="txt_name" style="width: 250px; height: 25px;"></td>
                                            </tr>
                                            <tr>
                                                <td class="text">Date Of Post:</td>
                                                <td class="text"><input type="text"  id="txt_dob" name="txt_dob"style="width: 250px; height: 25px;" readonly onclick="scwShow(this,event)"></td>
                                            </tr>
                                            <tr>
                                                <td class="text">Exprience:</td>
                                                <td class="text">
                                                    <select   id="txt_gndr" name="txt_gndr" style="width: 250px; height: 25px;">
                                                        <option value="select"> - - - -Select - - - - </option>
                                                        <option value="Fresher">Fresher</option>
                                                        <option value="Below 1 Year">Below 1 Year</option>

                                                        <option value="Below 2 Year">Below 2 Year</option>
                                                        <option value="Below 3 Year">Below 3 Year</option>
                                                        <option value="Below 4 Year">Below 4 Year</option>
                                                        <option value="Below 5 Year">Below 5 Year</option>
                                                        <option value="Above 5 Year">Above 5 Year</option>



                                                    </select>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td class="text"> Qualification:</td>
                                                <td class="text"><textarea row="5" cols="25" name="txtaqu" id="txtaqu"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="text">Contact Us:</td>
                                                <td><input type="text"  id="txt_phone" name="txt_phone" style="width: 250px; height: 25px;" onkeyup="contact(this,value)" onblur="mob()"></td>
                                            </tr>
                                         <tr>
                                                <td class="text">Email:</td>
                                                <td class="text"><input type="text"  id="txt_eml" name="txt_eml" style="width: 250px; height: 25px;" onblur="valid()"></td>
                                            </tr>

                                            <tr>
                                                <td class="text">Job Location:</td>
                                                    <td>
                                                                    <select name="txtstate" id="txtstate">
                                                                        <option value="">Select State</option>
                                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                        <option value="Assam">Assam</option>
                                                                        <option value="Bihar">Bihar</option>
                                                                        <option value="Chandigarh">Chandigarh</option>

                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                                        <option value="Delhi">Delhi</option>
                                                                        <option value="Goa">Goa</option>
                                                                        <option value="Gujarat">Gujarat</option>
                                                                        <option value="Haryana">Haryana</option>
                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>

                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                        <option value="Karnataka">Karnataka</option>
                                                                        <option value="Kerala">Kerala</option>
                                                                        <option value="Lakshadeep">Lakshadeep</option>
                                                                        <option value="Madya Pradesh">Madya Pradesh</option>
                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                        <option value="Manipur">Manipur</option>
                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                        <option value="Mizoram">Mizoram</option>

                                                                        <option value="Nagaland">Nagaland</option>
                                                                        <option value="Orissa">Orissa</option>
                                                                        <option value="Pondicherry">Pondicherry</option>
                                                                        <option value="Punjab">Punjab</option>
                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                        <option value="Sikkim">Sikkim</option>
                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                        <option value="Tripura">Tripura</option>
                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>

                                                                        <option value="Uttaranchal">Uttaranchal</option>
                                                                        <option value="West Bengal">West Bengal</option>
                                                                    </select></td>
                                           </tr>

                                           
                                            <tr>
                                                <td align="center" colspan="2">
                                                    <input type="submit" class="button" value="Submit" onclick="return validate();">
                                                    <input type="reset" class="button" value="Reset">
                                                </td>
                                            </tr>
                                        </table>
                                     </form>
                                    </div>
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

