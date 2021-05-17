<?php
require "common.php";
$url = '';
if(isset($_POST['CheckSSL']))
{
    $url = $_POST['url'];
    $ssl_checker_req = new ssl_checker_request();
    $ssl_checker_req->HostName = $url;
    $ssl_checker_resp = $ssl_api->ssl_checker($ssl_checker_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">
    <?php
    if($ssl_checker_resp->isCertificateFound == true)
    {
        $certificate_start_date = date('M d,Y', strtotime($ssl_checker_resp->ServerCertInfo->CertificateStartDate));
        $certificate_end_date = date('M d,Y', strtotime($ssl_checker_resp->ServerCertInfo->CertificateEndDate));
        $certificate_organization_name = $ssl_checker_resp->ServerCertInfo->OrganizationName;
        $no_of_chain_cert = count($ssl_checker_resp->ChainCertInfo);
        ?>

            <div class="result-list">
                <ul>
                    <li><span>Server IP address : </span> <?php echo $ssl_checker_resp->ServerIP; ?> </li>
                    <li><span>Server Type : </span> <?php echo $ssl_checker_resp->ServerType; ?> </li>
                    <li><span>Issuer : </span> <?php echo $ssl_checker_resp->ServerCertInfo->Issuer; ?> </li>
                    <li><span>Expiring In : </span> <?php echo $ssl_checker_resp->ServerCertInfo->RemainingDays; ?> Days</li>

                    <?php
                    if(empty($ssl_checker_resp->ChainCertInfo)){ ?>
                        <li><span>Chain Certificate Status: &nbsp;</span><strong class='alert'>No Intermediate/Chain certificate were found.</strong></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="result-box">
                <p><img src="images/ico-server.png" width="96" height="144" alt="Server"></p>
                <ul>
                    <li><span>Common name : </span> <?php echo $ssl_checker_resp->ServerCertInfo->CommonName; ?> </li>
                    <li><span>Alternative names (SANs) : </span> <?php echo $ssl_checker_resp->ServerCertInfo->SANs; ?> </li>
                    <?php if(!empty($certificate_organization_name)){?>
                        <li><span>Organization: </span><?php echo $certificate_organization_name; ?></li>
                    <?php
                    }
                    ?>
                    <li><span>Valid </span>From <?php echo $certificate_start_date; ?> to <?php echo $certificate_end_date; ?> </li>
                    <li><span>Signature Algorithm : </span> <?php echo $ssl_checker_resp->ServerCertInfo->SignatureAlgorithm; ?> </li>
                    <li><span>Issuer : </span> <?php echo $ssl_checker_resp->ServerCertInfo->Issuer ?> </li>
                </ul>
                <div class="clear"></div>
            </div>
            <?php
            for($i = 0; $i < $no_of_chain_cert; $i++) {
                $chain_certificate_start_date = date('M d,Y', strtotime($ssl_checker_resp->ChainCertInfo[$i]->CertificateStartDate));
                $chain_certificate_end_date = date('M d,Y', strtotime($ssl_checker_resp->ChainCertInfo[$i]->CertificateEndDate));
                $chain_certificate_organization_name = $ssl_checker_resp->ChainCertInfo[$i]->OrganizationName;
                $chain_certificate_common_name = $ssl_checker_resp->ChainCertInfo[$i]->CommonName;

            ?>
            <div class="downarrow"><img src="images/down-arrow.png" width="74" height="55"></div>
            <div  class="result-box">
                <p><img src="images/ico-chain.png" width="96" height="144" alt="Server"></p>
                <ul>
                    <li><span>Common name : </span><?php echo $chain_certificate_common_name; ?> </li>
                    <?php if(!empty($certificate_organization_name)) {?>
                        <li><span>Organization : </span><?php echo $certificate_organization_name; ?></li>
                    <?php } ?>
                    <li><span>Location : </span> <?php echo $ssl_checker_resp->ChainCertInfo[$i]->Location; ?> </li>
                    <li><span>Valid </span>From <?php echo $chain_certificate_start_date; ?> to  <?php echo $chain_certificate_end_date; ?> </li>
                    <li><span>Signature Algorithm : </span> <?php echo $ssl_checker_resp->ChainCertInfo[$i]->SignatureAlgorithm; ?> </li>
                    <li><span>Issuer : </span> <?php echo $ssl_checker_resp->ChainCertInfo[$i]->Issuer; ?> </li>
                </ul>
                <div class="clear"></div>
            </div>


            <?php
            }
            if(empty($ssl_checker_resp->ChainCertInfo)){ ?>

                <div><img src='images/img-ssltool-arrowbroken.png'/></div>

            <?php
            }
    }
    else{
        if($ssl_checker_resp->AuthResponse->isError == true)
        { ?>
            <p class="errormsg"><span><?php echo $ssl_checker_resp->AuthResponse->Message[0]; ?></span></p>
        <?php
        }
        else
        { ?>
            <p class="warningmsg"><span>No SSL certificates were found on <?php echo $url; ?></span></p>
        <?php
        }
    }
    ?>
    </div>
    <?php

}
?>