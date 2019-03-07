<head>
           <a href="http://localhost:8000/Ebus1.php">BACK</a>
      <style>
            body{
                background-color: #848484;
            }
            body{font-family: gadugi
            }
            body{color: white
            }
        /* unvisited link */
        a:link {
         color: white;
        }

        /* visited link */
        a:visited {
        color: whitesmoke;
        }
        </style>
<?php
session_start();
$fullNameValue ="";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number 
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
/*
 * Allocate the mobile number session variable to a text box
 */
?>

<!DOCTYPE html>
        <html>
            <head>
                <title>EBusiness2</title>
            </head>
            
            <body>
            <center>
                <div class="form">
                    <h1><center><u><font face="Castellar" color="white">Please enter your details below<u></center></h1>
                    <form name="Details" method="post" action="EBusiness3.php">
                        <center>
                            <table cellspacing="10">
                               
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                                </tr>
                                <tr>
                                    <td>Phone number</td>
                                    <td><input type="tel" id="txtNum" name="txtNum" value="" minlength="10" maxlength="10" required/></td>
                                     
                                </tr>
                                <tr>
                                    <td>Pin</td>
                                    <td><input type="password" id="txtPassword" name="txtPassword" value="" minlength="4" maxlength ="4" required/></td>
                                </tr>
                                <tr>
                                    <td><input type ="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" name="btncontinue" id="btnContinue" onclick="http://localhost:8000/ebus3.php" value="Continue"/>
                            </center>
                </div>
            </center>
                    </form>
                                     <img  src="ebus.jpg" alt="ebus" height="250" width="400">
    <img src="ebus1.jpg" alt="ebus" height="250" width="400">
    <img src="ebus2.jpg" alt="ebus" height="250" width="400">
            </body>
    </html>
