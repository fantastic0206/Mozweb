<?php  
require "ssl_checker_result.php";
$pageTitle = "SSL Tools - Certificate Decoder";
$keywords = "";
$metaDescription = "";
require "header.php";
?>
        <div class="content">
            <div class="tool-txt">
                <h1>Certificate Decoder</h1>
                <h2>Verify your SSL Certificate is Correct</h2>
                <p>
                    The Certificate Decoder allows you to instantly decode an SSL Certificate. Use this to decode your PEM, DER, or PFX encoded SSL Certificate and verify that all the information is correct. You can use this certificate decoder by simply pasting your certificate into the box below and the decoder will do the rest. Your Certificate Decoder should start with:   -----BEGIN CERTIFICATE REQUEST-----   and end with:   -----END CERTIFICATE REQUEST-----
                </p>
                <p>
                    Once the SSL Certificate is installed on the web server, you can use the SSL Checker to check and make sure it is installed correctly.
                </p>
            </div>
            <div class="form-wrap">
                <form name="frm_cert_decoder" id="frm_cert_decoder" method="post">
                    <div class="formraw">
                        <label>Certificate:</label>
                        <textarea class="inputtxt" name="certfield" rows="10" id="certfield"></textarea>
                    </div>
                    <div class="formraw">
                        <input type="submit" name="CertDecode" id="CertDecode" value="Decode Certificate"/>
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