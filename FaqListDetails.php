<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["NAME"];
if ($UNAME != null) {

    ob_start();
              include_once "connection/dbconfig.php";
    $MSG = null;
    $MSG = $_SESSION['MSG'];
?>      <script type="text/javascript">
                //function for balnk field
                function validate(){
                    var  img = document.getElementById('fileimage');
                    if(img.value.trim() == ""){
                        alert('Please select image.!!');
                        img.focus();
                        return false;
                    }
                }


  </script>
 <script type="text/javascript" src="js/scw.js"></script>
   <script type="text/javascript">
            function contact(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');

                }
            }
            function CheckForAlphabets(elem)
            {
                var alphaExp = /^[a-z A-Z]+$/;
                if(elem.value.match(alphaExp)){
                    return true;
                }else{
                    alert("give alphabatic name ");
                    return false;
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
        </script>
        <script type="text/javascript">
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
          <script type="text/javascript">

                 function pin()
            {
                var rl=document.getElementById("txtpwd").value;
                if(rl.toString().length<6)
                {
                    alert("Pin Number should be of Six digits");
                    return false;
                }

            }

        </script>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback Management System</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
body {
	background-color: #363687;
	margin-left: 200px;
	margin-right: 200px;
	margin-top: 30px;
	margin-bottom: 100px;
}
-->
</style></head>
    <body>
        <div id="header">

            <tr>
                <td height="800">
                    <?php
                    include("user.php");
                    ?>
                </td>
            </tr>



        </div>
        <div>
            &nbsp;
        </div>
        <div>
            &nbsp;
        </div>
        <div>
            &nbsp;
        </div>

        <div id="contents">
            <div>
                <div class="body" style="height: 560px;width: 900px;overflow: auto;">
                    <tr>
                        <td  height="500" valign="top" style="padding-centre: 50px;">
                              <table width="900"  align="center" border="0" >
                                        <tr align="center" style="background-color:white;" class="bold_matter">
                                            <td class="heading_lable">Email Id </td>
                                            <td class="heading_lable">Company </td>
											 <td class="heading_lable">Job For </td>
										    <td class="heading_lable">Reply</td>

                                        </tr>
                                        <?php
                                        $result = mysql_query("select * from reply");
                                        while ($row = mysql_fetch_array($result)) {
                                        ?>
                                            <tr align="center" bgcolor="#F9F9F9">
                                                <td class="login-text"><?php echo $row ['a15']; ?></td>
                                                <td class="login-text"><?php echo $row ['company']; ?></td>
                                                <td class="login-text"><?php echo $row ['jobfor']; ?></td>
                                              <td class="login-text"><?php echo $row ['reply']; ?></td>
                                             </tr>

                                        <?php
                                        }
                                        ?>
                                    </table>
                        </td>
                    </tr>
                </div>
            </div>
        </div>
        <div id="footer">
            <div>
  <?php
                    include("footer.php");
                    ?>

            </div>
        </div>
    </body>
</html>
<?php
                                            } else {

                                                header("location:logout.php");
                                            }
?>