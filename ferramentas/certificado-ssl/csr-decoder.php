<?php
require "csr_decoder_result.php";
$pageTitle = "SSL Tools - CSR Decoder";
$keywords = "";
$metaDescription = "";
require "header.php";
?>

    <div class="content">
        <div class="tool-txt">
            <h1>CSR Decoder</h1>
            <h2>Decode your Certificate Signing Request (CSR)</h2>
            <p>
                This tool allows you to check CSRs and view the information contained in them. Simply enter your CSR and the CSR Decoder will do the rest.
            </p>
            <p>
                The Certificate Signing Request (CSR) Decoder is a simple tool that decrypts information about your Certificate Signing Request to verify that it contains the correct information. CSRs are encrypted messages containing identifying information sent to a Certificate Authority in order to apply for a SSL Certificate. Your CSR should start with:   -----BEGIN CERTIFICATE REQUEST-----   and end with:   -----END CERTIFICATE REQUEST-----
            </p>
        </div>

        <div class="form-wrap">
            <form name="frm_csr_decoder" id="frm_csr_decoder" method="post">
                <div class="formraw">
                    <label>Enter your Certificate Signing Request (CSR): </label>
                    <textarea class="inputtxt" name="csrfield" rows="10" id="csrfield"></textarea>
                </div>
                <div class="formraw">
                    <input type="submit" name="DecodeCSR" id="submit" value="Decode CSR"/>
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
