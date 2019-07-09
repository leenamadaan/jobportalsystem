<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["ADMIN"];
if ($UNAME != null) {

    ob_start();
                include_once "connection/dbconfig.php";
    $MSG = null;
    $MSG = $_SESSION['MSG'];
?>        <script type="text/javascript">
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
        </head>
        <body>
            <div id="header">

                <tr>
                    <td height="100">
                    <?php
                    include("company.php");
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
                        <td >
                            <div>
                                    <div>
                                  <form  action="replyquery.php" method="post">
                                            <table  width="50%" border="0" cellpadding="5" cellspacing="5" style="margin-top: 10%" align="center">

                                                <?php
                                                include_once "connection/dbconfig.php";
                                                $update = $_GET['id'];
                                                ?>
                                                <?php
                                                include_once "connection/dbconfig.php";
                                                $result = mysql_query("select * from vacancy1 where a15 = '$update'");

                                                while ($row = mysql_fetch_array($result)) {
                                                ?>
  <tr>
                                <td align="center"class="head">
                                  Reply:
                                </td>
                            </tr>
                                                    <tr>
                                                        <td class="login-text">
                                                            Email id
                                                        </td>
                                                        <td>
                                                            <input type= text size="30"  id="txtcls" name="txtcls" value="<?php echo $row ['a15']; ?>">
                                                        </td>
                                                    </tr>
													
													 <tr>
                                                        <td class="login-text">
                                                            Company
                                                        </td>
                                                        <td>
                                                            <input type="text" name="txtc" id="txtc"  size="30">
                                                        </td>
                                                    </tr>
													 <tr>
                                                        <td class="login-text">
                                                            Job For
                                                        </td>
                                                        <td>
                                                            <input type="text" name="txtj" id="txtj"  size="30">
                                                        </td>
                                                    </tr>
                                                           <tr>
                                                        <td class="login-text">
                                                            Reply
                                                        </td>
                                                        <td>
                                                            <input type="text" name="txtr" id="txtr"  size="30">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td align="center" colspan="4">
                                                            <input type="submit" value="Submit" class="button">
                                                        </td>
                                                    </tr>

                                                <?php
                                                }
                                                ?>
                                            </table>

                                        </form>
                                </div>
                            </div>
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