
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
                                include("admin.php");
                                ?>
                </td>
            </tr>
            <tr>

                <td width="900"  height="500" valign="top">
                    <span style="padding-left: 20px;text-align: justify;" class="text-11" >
  <div class="body-cont-col" style="height: 450px;overflow: auto;">
                        <div style="height: 20px;"></div>
                        <div class="head1" align="center"><strong>Feedback List</strong></div>
                       <div style="height: 500px;width: 920px;overflow: auto;">
                                    <table width="900"  align="center" border="0" >
                               <tr align="center" style="background-color: lightblue;" class="bold_matter">
                                            <td class="heading_lable">Name </td>
                                            <td class="heading_lable">Email</td>
                                            <td class="heading_lable">Contact</td>
                                            <td class="heading_lable">Enquiry Type</td>
                                            <td class="heading_lable">Remarks</td>

                                        </tr>
                                        <?php
                                             include_once "connection/dbconfig.php";
                                        $result = mysql_query("select * from enquiry");
                                        while ($row = mysql_fetch_array($result)) {
                                        ?>
                                            <tr align="center" bgcolor="#F9F9F9">
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['email']; ?></td>
                                                <td><?php echo $row ['contact']; ?></td>
                                                <td><?php echo $row ['enquirytype']; ?></td>
                                                <td><?php echo $row ['remarks']; ?></td>

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

