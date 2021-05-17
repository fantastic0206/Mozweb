<?php
require "cert_key_matcher_result.php";
$pageTitle = "SSL Tools - Certificate Key Matcher";
$keywords = "";
$metaDescription = "";
require "header.php";
?>

        <div class="content">
            <div class="tool-txt">
                <h1>Match SSL elements</h1>
                <h2>Match Your SSL & Private Key Pairs</h2>
                <p>
                    The Certificate Key Matcher makes it easy to determine whether a private key or CSR file matches a certificate.
                </p>
                <p>
                    The Certificate Key Matcher allows you to check whether a private key matches a certificate, or if a certificate matches a CSR file. Any mismatches between pairs will prevent your certificate from working properly.
                </p>
            </div>
            <div class="form-wrap csrform">
                <form name="frm_cert_key_matcher" id="frm_cert_key_matcher" method="post" >

                    <div class="formraw fullraw">
                        <input type="radio" name="match_element_type" value="CSR" id="csr_radio" />
                        <label for="csr_radio" style="display: inline">CSR File</label>

                        <input type="radio" name="match_element_type" value="PrivateKey" id="private_key_radio" />
                        <label for="private_key_radio" style="display: inline">Private Key</label>

                    </div>

                    <div class="formraw" id="Cert_box" style="display: none;">
                        <label>SSL Certificate:</label>
                        <textarea class="inputtxt" name="certificate" rows="10" id="certificate"></textarea>
                    </div>

                    <div class="formraw" id="CSR_box" style="display: none;">
                        <label>CSR:</label>
                        <textarea class="inputtxt" name="csr" rows="10" id="csr"></textarea>
                    </div>
                    <div class="formraw" id="PrivateKey_box" style="display: none;">
                        <label>Private Key:</label>
                        <textarea class="inputtxt" name="private_key" rows="10" id="private_key"></textarea>
                    </div>

                    <div class="formraw">
                        <input type="submit" name="CertKeyMatcher" id="CertKeyMatcher" value="Check"/>
                    </div>
                   
                </form>
                 <div class="clear"></div>
            </div>
            <div class="loader"><img class="" src="images/loader.gif"></div>
            <div id="results"></div>
        </div>
<?php
require "footer.php";
?>