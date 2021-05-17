<?php
require_once('common.php');
?>
<?php
if(isset($_POST['DecodeCSR']))
{

    $CSR = $_POST['csrfield'];
    $csr_decoder_req = new csr_decoder_request();
    $csr_decoder_req->CSR = $CSR;

    $csr_decoder_resp = $ssl_api->csr_decoder($csr_decoder_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">
    <?php

    if($csr_decoder_resp->AuthResponse->isError == true){ ?>
        <p class="errormsg"><span><?php echo $csr_decoder_resp->AuthResponse->Message[0]; ?></span></p>
    <?php
    }
    else{ ?>
        <h3>CSR Information:</h3>
        <div class="result-box">
            <ul>
                <li><span>Common Name : </span> <?php echo $csr_decoder_resp->CommonName; ?> </li>
                <li><span>Organization : </span> <?php echo $csr_decoder_resp->OrganizationName; ?> </li>
                <li><span>Organization Unit : </span> <?php echo $csr_decoder_resp->OrganizationUnit; ?> </li>
                <li><span>Locality : </span> <?php echo $csr_decoder_resp->Locality; ?></li>
                <li><span>State : </span> <?php echo $csr_decoder_resp->State; ?></li>
                <li><span>Country : </span> <?php echo $csr_decoder_resp->Country; ?></li>
                <li><span>Email : </span> <?php echo $csr_decoder_resp->Email; ?></li>
                <li><span>Key size (bits) : </span> <?php echo $csr_decoder_resp->KeySize; ?> </li>
            </ul>
            <div class="clear"></div>
        </div>
    <?php
    }
    ?>
    </div>
    <?php
}
?>
