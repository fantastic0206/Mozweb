<?php
require "caa_record_generator_result.php";
$pageTitle = "SSL Tools - CAA Record Generator";
$keywords = "";
$metaDescription = "";
require "header.php";
$supportedCA = array('DigiCert','Comodo','Certum');
$subCA = array('DigiCert' => 'Symantec, GeoTrust, Thawte, RapidSSL');
?>

    <div class="content">
        <div class="tool-txt">
            <h1>CAA Record Generator</h1>
            <h2 >State your Preferred Certificate Authority</h2>
            <p>
                Certification Authority Authorization (CAA) is a powerful record in your DNS settings that allows you to control which Certificate Authorities (CA) can issue SSL certificates for specific domains in your organization. Think of the record as your domain’s medical record. Hospitals will refer to the record before issuing any remedies to ensure they’re not providing you with any medicine that might trigger an allergic reaction! The same concept applies with CAA Records, but with domains and SSL certificates - and a lot less nausea.
            </p>
            <p>
                Starting September 8, 2017, CAs will be required by the industry’s governing body to check the CAA record before issuing any type of SSL certificates (DV, OV, EV) for your domain(s). This DNS setting allows organizations to further protect their brand reputation, security integrity, and customers’ trust, while minimizing the possibilities of finding random expired SSL certificates from rogue employees.
            </p>
            <p>
                Let’s face it. Nobody ever wants to have their website down because of an SSL Certificate issue. Nobody wants to miss out on revenue. So, let’s prevent those issues and specify your CAA Record today!
            </p>
        </div>
        <div class="form-wrap">
            <form name="frm_caa_generator" id="frm_caa_generator" method="post">
                <div class="formraw">
                    <label>Enter Your Domain Name: </label>
                    <input class="inputtxt" id="host_name" name="host_name" type="text">
                </div>
                <div class="formraw">

                    <label>Select Authorized CA: </label>
                    <table class="domainchecktbl" border="0" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>CA Name</td>
                            <td>Non-Wildcard</td>
                            <td>Wildcard</td>
                        </tr>

                    <?php
                    foreach($supportedCA as $ca){
                        $subCAspan = '';
                        if(isset($subCA[$ca])){
                            $subCAspan = '</br><span class="form-hint">('.$subCA[$ca].')</span>';
                        }
                        echo '<tr>
                            <td>'.$ca.$subCAspan.'</td>
                            <td><input class="cacheck" type="checkbox" name="'.strtolower($ca).'_non_wildcard" value=""></td>
                            <td><input class="cacheck" type="checkbox" name="'.strtolower($ca).'_wildcard" value=""></td>
                        </tr>';
                    }
                    ?>
                    </table>
                    <span class="chkerror"></span>
                </div>
                <div class="formraw">
                    <input type="submit" name="GenerateCAA" id="GenerateCAA" value="Generate Now"/>
                </div>
            </form>
        </div>
        <div class="loader"><img class="" src="images/loader.gif"></div>
        <div id="results"></div>
    <div class="tool-txt">
        <h3>Using your Domain Registrar’s DNS or another Service?</h3>
        <p class="chkcmn" itemprop="description">
            No worries! Many of the most popular domain registrars and DNS providers support CAA Records, with many more adopting the record on a daily basis! Below is a brief overview of some of the largest providers of DNS services that support CAA Records. Don’t see your provider? Drop them a support ticket and ask
            <span style="font-size:20px;">&#9786;</span>
        </p>
        <p><a target="_blank" href="https://documentation.cpanel.net/display/66Docs/66+Release+Notes#id-66ReleaseNotes-NewDNSrecordtype">- cPanel v66+ </a> </p>
        <p><a target="_blank" href="https://support.cloudflare.com/hc/en-us/articles/115000310792-Configuring-CAA-Records-">- Cloudflare</a></p>
        <p><a target="_blank" href="http://help.dnsmadeeasy.com/managed-dns/records/caa-records/#tutorials">- DNS Made Easy </a></p>
        <p><a target="_blank" href="https://help.dyn.com/zone-records/#(CAA)">- DYN Managed DNS</a></p>
        <p><a target="_blank" href="https://wiki.gandi.net/en/ssl/caa">- Gandi</a></p>
        <p>- Hurricane Electric (HE) DNS</p>
        <p><a target="_blank" href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/ResourceRecordTypes.html#CAAFormat">- Amazon Route 53</a></p>
        </div>
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