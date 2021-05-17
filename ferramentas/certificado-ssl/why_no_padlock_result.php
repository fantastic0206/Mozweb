<?php
require_once('common.php');

if(isset($_POST['CheckPadlock']))
{
    $why_no_padlock_req = new why_no_padlock_request();
    $why_no_padlock_req->URL = $_POST['url'];

    $why_no_padlock_resp = $ssl_api->why_no_padlock($why_no_padlock_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">

    <?php

    if($why_no_padlock_resp->AuthResponse->isError == true){ ?>
        <p class="errormsg">
            <span><?php echo $why_no_padlock_resp->AuthResponse->Message[0]; ?></span>
        </p>
    <?php
    }
    else{
        ?>
        <div class="result-list">
            <ul>
                <li><span>Domain name : </span><?php echo $why_no_padlock_resp->Domain; ?> </li>
                <li><span>IP Address : </span><?php echo $why_no_padlock_resp->ServerIP; ?> </li>
                <li><span>URL Tested : </span><?php echo $why_no_padlock_resp->URLTested; ?> </li>



        <?php if($why_no_padlock_resp->isCertificateFound){

            $certificate_start_date = date('M d,Y', strtotime($why_no_padlock_resp->CertificateStartDate));
            $certificate_end_date = date('M d,Y', strtotime($why_no_padlock_resp->CertificateEndDate));

            ?>

                    <li><span>Common name : </span><?php echo $why_no_padlock_resp->CommonName; ?> </li>
                    <li><span>Issuer : </span><?php echo $why_no_padlock_resp->Issuer; ?> </li>
                    <li><span>Valid : </span>From <?php echo $certificate_start_date; ?> to  <?php echo $certificate_end_date; ?> </li>

        <?php
        }
        ?>
            </ul>
        </div>
        <?php
        $no_of_insecure_links = count($why_no_padlock_resp->InsecureLinks) + count($why_no_padlock_resp->ExternalInsecureLinks);
        if($no_of_insecure_links > 0){ ?>
            <div class="warningmsg">
                <span><strong>Number of Insecure links found: <?php echo $no_of_insecure_links; ?></strong></span>
                <?php
                if(!empty($why_no_padlock_resp->InsecureLinks)){ ?>
                    <span><strong>Line Numbers - Insecure Links</strong></span>
                    <?php
                    foreach ($why_no_padlock_resp->InsecureLinks as $links) { ?>
                        <span><?php echo $links->Line; ?> - <?php echo $links->Link; ?></span>
                    <?php
                    }
                }
                foreach($why_no_padlock_resp->ExternalInsecureLinks as $file_name => $links){ ?>
                    <hr>
                    <strong>Found In : <?php echo $file_name; ?></strong>
                    <?php foreach($links as $link) { ?>
                        <span>Insecure Link: - <?php echo $link; ?></span>
                    <?php
                    }
                }
                ?>
            </div>
        <?php
        }
        elseif($why_no_padlock_resp->isCertificateFound && $no_of_insecure_links == 0){?>
          <p class="succesmsg"><span>All items called securely!</span></p>
        <?php
        }
    }
    ?>
    </div>
    <?php

}