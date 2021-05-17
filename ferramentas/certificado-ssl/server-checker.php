<?php
require "server_checker_result.php";
$pageTitle = "SSL Tools - Test Your Server";
$keywords = "";
$metaDescription = "";
require "header.php";
?>

    <div class="content">
        <div class="tool-txt">
            <h1>Test Your Server</h1>
            <h2 >Review your Server</h2>
            <p>
                Check if your SSL Certificate is installed properly and trusted by browsers.
            </p>
            <p>
                This free online service performs a deep analysis of the configuration of any SSL web server on the public Internet. Please note that the information you submit here is used only to provide you the service. We don't use the domain names or the test results, and we never will.
            </p>
        </div>
        <div class="form-wrap">
            <form name="frm_server_checker" id="frm_server_checker" method="post">
                <div class="formraw">
                    <label>Server Hostname:</label>
                    <input class="inputtxt" type="text" name="url" id="url"/>
                    <span class="form-hint">(e.g. www.google.com)</span>
                </div>
                <div class="formraw">
                    <input type="submit" name="CheckServer" id="CheckServer" value="Check"/>
                </div>
            </form>
        </div>
        <div class="loader"><img class="" src="images/loader.gif"><p>(Please wait this may take long time!)</p></div>
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