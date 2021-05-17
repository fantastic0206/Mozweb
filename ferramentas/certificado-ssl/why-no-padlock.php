<?php
require "why_no_padlock_result.php";
$pageTitle = "SSL Tools - Why No Padlock";
$keywords = "";
$metaDescription = "";
require "header.php";
?>

        <div  class="content">
            <div class="tool-txt">
                <h1>Why No Padlock?</h1>
                <h2>Check for Insecure Links</h2>
                <p>
                    If you feel your website is not displaying the proper security lock, the Why No Padlock tool is just for you! By simply entering your URL into the box below, you can instantaneously check if there are ANY insecure links found within your URL.
                </p>
            </div>
            <div class="form-wrap">
                <form name="frm_why_no_padlock" id="frm_why_no_padlock" method="post">
                    <div class="formraw">
                        <label>Secure URL:</label>
                        <input class="inputtxt" type="text" name="url" id="url"/>
                        <span class="form-hint">(example: https://www.your_domain.com/secure_page.html)</span>
                    </div>
                    <div class="formraw">

                        <input type="submit" name="CheckPadlock" id="CheckPadlock" value="Check"/>
                    </div>
                </form>
            </div>
            <div class="loader"><img class="" src="images/loader.gif"></div>
            <div id="results"></div>
            <div class="gdpr-txt">
                <p></p>
                <p>
                    <strong>Note:</strong> We do not save any of the information derived from the use of these tools.
                </p>
            </div>
        </div>
<?php
require "footer.php";
?>