<?php
require_once('common.php');

if(isset($_POST['CertKeyMatcher']))
{

        $cert_key_matcher_req = new certificate_key_matcher_request();
        $cert_key_matcher_req->Certificate = $_POST['certificate'];
        if($_POST['match_element_type'] == 'CSR') {
            $cert_key_matcher_req->CSR = $_POST['csr'];
        }
        if($_POST['match_element_type'] == 'PrivateKey') {
            $cert_key_matcher_req->PrivateKey = $_POST['private_key'];
        }

        $cert_key_matcher_resp = $ssl_api->certificate_key_matcher($cert_key_matcher_req);

        ?>
        <div class="result-dtl" xmlns="http://www.w3.org/1999/html">
        <?php

        if($cert_key_matcher_resp->AuthResponse->isError == true){ ?>

            <p class="errormsg">
                <span><?php echo $cert_key_matcher_resp->AuthResponse->Message[0]; ?> </span>
            </p>

        <?php
        }
        else
        {
            //For CSR
            if($cert_key_matcher_resp->IsCSRMatched) {
            ?>
                <p class="succesmsg"><span>Certificate matches with CSR.</span></p>
            <?php
            }
            elseif($_POST['match_element_type'] == 'CSR'){ ?>

                <p class="warningmsg"><span>Certificate does not match with CSR.</span></p>

            <?php
            }

            //For Private Key
            if($cert_key_matcher_resp->IsPrivateKeyMatched){ ?>

                <p class="succesmsg"><span>Certificate matches with Private Key.</span></p>

            <?php
            }
            elseif($_POST['match_element_type'] == 'PrivateKey'){ ?>

                <p class="warningmsg"><span>Certificate does not match with Private Key.</span></p>

            <?php
            }

        }
    ?>
    </div>
    <?php
}
?>