<?php
require "common.php";
$url = '';
if(isset($_POST['CheckServer']))
{
    $url = $_POST['url'];
    $server_checker_req = new server_checker_request();
    $server_checker_req->HostName = $url;
    $server_checker_resp = $ssl_api->server_checker($server_checker_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">
        <?php
        if($server_checker_resp->AuthResponse->isError == true){ ?>
            <p class="errormsg">
                <span><?php echo $server_checker_resp->AuthResponse->Message[0]; ?></span>
            </p>
        <?php
        }
        else{
            foreach($server_checker_resp->EndPoints as $endPoint){
                ?>
                <div class="result-box">
                    <div class="sectionTitle">Summary</div>
                    <div class="sectionBody">
                        <table class="tblreport">
                            <tbody>
                                <tr>
                                    <td>Overall Rating:</td>
                                    <td><?php echo $endPoint->grade; ?></td>
                                </tr>
                                <tr>
                                    <td>Host:</td>
                                    <td><?php echo $server_checker_resp->Host; ?></td>
                                </tr>
                                <tr>
                                    <td>Server Host Name:</td>
                                    <td><?php echo $endPoint->serverName; ?></td>
                                </tr>
                                <tr>
                                    <td>IP Address:</td>
                                    <td><?php echo $endPoint->ipAddress; ?></td>
                                </tr>
                                <tr>
                                    <td>Assesment Duration:</td>
                                    <td><?php echo $endPoint->duration.' seconds'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>


                <div class="result-box">
                    <div class="sectionTitle">Certificate</div>
                    <div class="sectionBody">
                        <!-- START SERVER CERTIFICATE -->
                        <table class="tblreport">
                            <thead>
                            <tr>
                                <td class="tblhead" colspan="2">Server certificate</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Common Name</td>
                                    <td><?php echo $endPoint->serverCert->commonName; ?></td>
                                </tr>
                                <tr>
                                    <td>Alternative Names</td>
                                    <td><?php echo $endPoint->serverCert->altNames; ?></td>
                                </tr>
                                <tr>
                                    <td>Valid From</td>
                                    <td><?php echo date("d M Y H:i:s", ($endPoint->serverCert->validFrom/1000)) ?></td>
                                </tr>
                                <tr>
                                    <td>Valid Untill</td>
                                    <td><?php echo date("d M Y H:i:s", ($endPoint->serverCert->validTo/1000)); ?></td>
                                </tr>
                                <tr>
                                    <td>Issuer</td>
                                    <td><?php echo $endPoint->serverCert->issuer; ?></td>
                                </tr>
                                <tr>
                                    <td>Signature Algorithm</td>
                                    <td><?php echo $endPoint->serverCert->signatureAlgorithm; ?></td>
                                </tr>
                                <tr>
                                    <td>Validation Type</td>
                                    <td><?php echo $endPoint->serverCert->SSLValidationType; ?></td>
                                </tr>
                                <tr>
                                    <td>Certificate Transparency</td>
                                    <td><?php echo ($endPoint->serverCert->certTransparency ? 'YES' : 'NO'); ?></td>
                                </tr>
                                <tr>
                                    <td>OCSP Must Staple</td>
                                    <td><?php echo ($endPoint->serverCert->OCSPMustStaple ? 'YES' : 'NO'); ?></td>
                                </tr>
                                <tr>
                                    <td>Revocation Information</td>
                                    <td>
                                        <?php echo ($endPoint->serverCert->revocationCRLURI ? 'CRL:'.$endPoint->serverCert->revocationCRLURI : ''); ?>
                                        <br>
                                        <?php echo ($endPoint->serverCert->revocationOCSPURI ? 'OCSP:'.$endPoint->serverCert->revocationOCSPURI : ''); ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- END SERVER CERTIFICATE -->

                        <!-- START ADDITIONAL CERTIFICATE -->

                        <?php
                        $i = 0;
                        foreach($endPoint->chainCert as $chainCert) {
                            $i++;
                            ?>

                            <table class="tblreport">
                                <thead>
                                    <tr>
                                        <td class="tblhead" colspan="2">Additional certificate<?php echo '(#'.$i.')' ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Subject</td>
                                        <td><?php echo $chainCert->subject; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Valid From</td>
                                        <td><?php echo date("d M Y H:i:s", ($chainCert->validFrom/1000)); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Valid Untill</td>
                                        <td><?php echo date("d M Y H:i:s", ($chainCert->validTo/1000)); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Key</td>
                                        <td><?php echo $chainCert->keyAlgorithm.' '.$chainCert->keySize.' bits'; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Issuer</td>
                                        <td><?php echo $chainCert->issuer; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Signature Algorithm</td>
                                        <td><?php echo $chainCert->signatureAlgorithm; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                        }
                        ?>
                        <!-- END ADDITIONAL CERTIFICATE -->
                    </div>
                </div>
                <br>

                <div class="result-box">
                    <div class="sectionTitle">Configuration</div>
                    <div class="sectionBody">
                        <!-- START PROTOCOL -->
                        <table class="tblreport">
                            <thead>
                            <tr>
                                <td class="tblhead" colspan="2">Supported Protocols</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //Get Protocol list
                            foreach($endPoint->protocols as $protocol => $support) {
                                ?>
                                <tr>
                                    <td><?php echo $protocol; ?></td>
                                    <td><?php echo ($support ? 'YES' : 'NO'); ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                        <!-- END PROTOCOL -->

                        <!-- START Handshake Simulation -->
                        <table class="tblreport">
                            <thead>
                            <tr>
                                <td class="tblhead" colspan="4">Handshake Simulation</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($endPoint->simulations as $simulation) {
                                ?>
                                <tr>
                                    <td><?php echo $simulation->name; ?></td>
                                    <td><?php echo $simulation->protocol; ?></td>
                                    <td><?php echo $simulation->suite; ?></td>
                                    <td><?php echo $simulation->keyExchange; ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                        <!-- END Handshake Simulation -->
                        <!-- START Not Simulated -->
                        <?php
                        if(!empty($endPoint->notSimulations)) {
                            ?>
                            <table class="tblreport">
                                <thead>
                                <tr>
                                    <td class="tblhead" colspan="2">Handshake Simulation</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($endPoint->notSimulations as $notSimulation) {
                                    ?>
                                    <tr>
                                        <td><?php echo $notSimulation->name; ?></td>
                                        <td>Protocol mismatch (not simulated)</td>
                                    </tr>
                                <?php
                                }
                                ?>

                                </tbody>
                            </table>
                        <?php
                        }
                        ?>
                        <!-- END Not Simulated -->
                        <!-- START PROTOCOL -->
                        <table class="tblreport">
                            <thead>
                            <tr>
                                <td class="tblhead" colspan="2">Protocol Details</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Support ALPN</td>
                                    <td><?php echo ($endPoint->supportALPN ? 'YES' : 'NO'); ?></td>
                                </tr>
                                <tr>
                                    <td>Support NPN</td>
                                    <td><?php echo ($endPoint->supportNPN ? 'YES' : 'NO'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END PROTOCOL -->
                    </div>
                </div>

            <?php
            }
        }
        ?>
    </div>
    <?php
}