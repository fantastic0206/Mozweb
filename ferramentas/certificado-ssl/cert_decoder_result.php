<?php
require_once('common.php');
if(isset($_POST['CertDecode']))
{
    $certificate = $_POST['certfield'];
    $cert_decoder_req = new certificate_decoder_request();
    $cert_decoder_req->Certificate = $certificate;

    $cert_decoder_resp = $ssl_api->certificate_decoder($cert_decoder_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">
    <?php
    if($cert_decoder_resp->AuthResponse->isError == true){ ?>
       <p class="errormsg"><span><?php echo $cert_decoder_resp->AuthResponse->Message[0]; ?></span></p>
    <?php
    }
    else {
        $certificate_start_date = date('M d,Y', strtotime($cert_decoder_resp->CertificateStartDate));
        $certificate_end_date = date('M d,Y', strtotime($cert_decoder_resp->CertificateEndDate));
        ?>
        <h3>Certificate Information:</h3>
        <div class="result-box">
            <ul>
                <?php if(!empty($cert_decoder_resp->CommonName)){?>
                    <li><span>Common Name : </span><?php echo $cert_decoder_resp->CommonName; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->AlternativeNames)){?>
                    <li><span>Alternative Names : </span><?php echo $cert_decoder_resp->AlternativeNames; ?></li>
                 <?php
                }

                if(!empty($cert_decoder_resp->OrganizationName)){?>
                    <li><span>Organization : </span><?php echo $cert_decoder_resp->OrganizationName; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->OrganizationUnit)){?>
                    <li><span>Organization Unit : </span><?php echo $cert_decoder_resp->OrganizationUnit; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->Locality)){?>
                    <li><span>Locality : </span><?php echo $cert_decoder_resp->Locality; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->State)){?>
                    <li><span>State : </span><?php echo $cert_decoder_resp->State; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->Country)){?>
                    <li><span>Country : </span><?php echo $cert_decoder_resp->Country; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->CertificateStartDate)){?>
                    <li><span>Valid From : </span><?php echo $certificate_start_date; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->CertificateEndDate)){?>
                    <li><span>Valid To : </span><?php echo $certificate_end_date; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->Issuer)){?>
                    <li><span>Issuer : </span><?php echo $cert_decoder_resp->Issuer; ?></li>
                <?php
                }

                if(!empty($cert_decoder_resp->SerialNumber)){?>
                    <li><span>Serial Number : </span><?php echo $cert_decoder_resp->SerialNumber; ?></li>
                <?php
                }
                ?>
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