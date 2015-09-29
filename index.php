<?php
// We need these.
require_once("config.php");
require_once("SOAPRegistration.php");

// Initialize session and variables.
$messages = Array();
$showForm = true;

// If form was submitted, carry out the registration.
if(!empty($_POST["submit"]))
{
    $reg = new SOAPRegistration();
    $messages = $reg -> getMessages();
    $showForm = $reg -> showForm();
}

$messagesDisplay = '';
foreach($messages as $msg)
{
    $messagesDisplay .= '<div class="errors">'.$msg.'</div>';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="site.css" />
        <meta name="description" content="<?php echo META_DESCRIPTION; ?>" />
        <meta name="keywords" content="<?php echo META_KEYWORDS; ?>" />
        <meta name="robots" content="<?php echo META_ROBOTS; ?>" />
        <meta name="author" content="CHANGEME" />
        <title><?php echo SITE_TITLE; ?></title>
    </head>
    <body>
	<table class="reg">
            <tr>
                <td>
                    CHANGEME Server Registration Form
               	</td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $messagesDisplay;

                    if ($showForm)
                    { ?>
                    <form action="" method="post" name="reg">
                        <table class="form">
                            <tr>
                               	<td align="right">
                                    Account Name:
                                </td>
                                <td align="left">
                                    <input name="accountname" type="text" maxlength="32" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Password:
                                </td>
                                <td align="left">
                                    <input name="password" type="password" maxlength="128" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Confirm Password:
                               	</td>
                               	<td align="left">
                                    <input name="password2" type="password" maxlength="128" />
                               	</td>
                            </tr>
                            <tr>
                               	<td align="right">
                                    Email Address:
                               	</td>
                               	<td align="left">
                                    <input name="email" type="text" maxlength="254" />
                               	</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" class="sbm" value="Register" name='submit' />
                               	</td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    }
                    ?>
                    <br />
                    <div class="copy">
                       	<b><a href = "https://URL.com">Link Description 1</a></b>
                       	<br />
                        <b><a href = "https://URL.com">Link Description 2</a></b>
                        <br />
                       	<b><a href = "https://URL.com">Link Description 3</a></b>
                    </div>

                </td>
            </tr>
        </table>
    </body>
</html>
