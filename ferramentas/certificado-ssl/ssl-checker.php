<?php
require "ssl_checker_result.php";
$pageTitle = "SSL Tools - SSL Checker";
$keywords = "";
$metaDescription = "";
require "header.php";
$hostName = (isset($_REQUEST['hostname']) ? $_REQUEST['hostname'] : '');
if(!empty($hostName)){
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#CheckSSL').click();
	});
</script>
<?php	
}
?>

        <div class="content">
            <div class="tool-txt">
                <h1>SSL Checker</h1>
                <h2 >Review your SSL Certificate's Installation</h2>
                <p>
                    Check if your SSL Certificate is installed properly and trusted by browsers.
                </p>
                <p>
                    This tool can verify that the SSL Certificate on your web server is properly installed and trusted. SSL Checker will display the Common Name, server type, issuer, validity, certificate chaining, and more certificate details. By simply entering your server hostname or IP address in the box below and clicking "Check", you can immediately view the details pertaining to your SSL Certificate.
                </p>
            </div>
            <div class="form-wrap">
                <form name="frm_ssl_checker" id="frm_ssl_checker" method="post">
                    <div class="formraw">
                        <label>Server Hostname:</label>
                        <input class="inputtxt" type="text" name="url" id="url" value="<?php echo $hostName; ?>"/>
                        <span class="form-hint">(e.g. www.google.com)</span>
                    </div>
                    <div class="formraw">
                        <input type="submit" name="CheckSSL" id="CheckSSL" value="Check"/>
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