
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
                    include("user.php");
                    ?>
                </td>
            </tr>
            <tr>

                <td width="900"  height="500" valign="top">
                    <span style="padding-left: 20px;text-align: justify;" class="text-11" >
                        <div class="body-cont-col" style="height: 450px;overflow: auto;">
                            <div style="height: 20px;"></div>
                            <div class="head1" align="center"><strong>Job List</strong></div>
                            <div style="height: 500px;width: 920px;overflow: auto;">
                                <table width="900"  align="center" border="0" >
                                    <tr>
                                        <td class="text1" colspan="2">Job&nbsp;List...</td>
                                    </tr>
                                    <tr align="center">
                                        <td class="heading_lable">Apply</td>
                                        <td class="heading_lable">Job ID </td>
                                        <td class="heading_lable">Job Type</td>
                                        <td class="heading_lable">Name</td>
                                        <td class="heading_lable">Date</td>
                                        <td class="heading_lable">Experiance</td>
                                        <td class="heading_lable">Qualification</td>
                                        <td class="heading_lable">Contact Us</td>
                                        <td class="heading_lable">Email</td>
                                        <td class="heading_lable">Location</td>
                                    </tr>
                                    <?php
                                    include_once "connection/dbconfig.php";
                                    $user_id1 = "";
                                    $user_id1 = $_GET['type'];
                                    ?>
                                    <?php
                                    $result = mysql_query("select * from vacancy where a2 = '$user_id1'");
                                    while ($row = mysql_fetch_array($result)) {
                                        $ctr++;
                                    ?>
                                        <tr>
                                            <td><a href="ApplyVacancy.php?id=<?php echo $row['a1']; ?>"style="color:red;text-decoration:none">Apply Now</a></td>


                                            <td><?php echo $row['a1']; ?></td>
                                            <td><?php echo $row['a2']; ?></td>
                                            <td><?php echo $row['a3']; ?></td>
                                            <td><?php echo $row['a4']; ?></td>
                                            <td><?php echo $row['a5']; ?></td>
                                            <td><?php echo $row['a6']; ?></td>
                                            <td><?php echo $row['a7']; ?></td>
                                            <td><?php echo $row['a8']; ?></td>
                                            <td><?php echo $row['a9']; ?></td>

                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </table>
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

