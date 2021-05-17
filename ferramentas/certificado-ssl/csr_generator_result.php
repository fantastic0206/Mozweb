<?php
require_once('common.php');

if(isset($_POST['GenerateCSR']))
{
    $csr_generator_req = new csr_generator_request();
    $csr_generator_req->CommonName = $_POST['common_name'];
    $csr_generator_req->OrganizationName = $_POST['organisation_name'];
    $csr_generator_req->OrganizationUnit = $_POST['organisation_unit'];
    $csr_generator_req->Locality = $_POST['locality'];
    $csr_generator_req->State = $_POST['state'];
    $csr_generator_req->Country = $_POST['country'];
    $csr_generator_req->Email = $_POST['email'];
    $csr_generator_req->KeySize = intval($_POST['key_size']);
    $csr_generator_req->SignatureAlgorithm = $_POST['signature_algorithm'];

    $csr_generator_resp = $ssl_api->csr_generator($csr_generator_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">
    <?php
    if($csr_generator_resp->AuthResponse->isError == true){ ?>
        <p class="errormsg">
                <span><?php echo $csr_generator_resp->AuthResponse->Message[0]; ?> </span>
        </p>
    <?php
    }
    else {
        ?>
        <h3>Your CSR for <?php echo $csr_generator_req->CommonName ?> </h3>
        <span>Please save this information in a safe place!</span>
        <div class="result-box">
            <textarea name="csr"> <?php echo $csr_generator_resp->CSR; ?></textarea>
            <div class="clear"></div>
        </div>

        <h3>Your Private Server Key</h3>
        <span>Save this as a .TXT file and keep it secure - your SSL certificate WILL NOT WORK without this.</span>
        <div class="result-box">
            <textarea name="private_key"> <?php echo $csr_generator_resp->PrivateKey; ?></textarea>
            <div class="clear"></div>
        </div>
    <?php
    }
    ?>
    </div>
    <?php
}
?>