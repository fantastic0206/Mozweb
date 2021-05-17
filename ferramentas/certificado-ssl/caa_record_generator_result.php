<?php
require_once('common.php');

if(isset($_POST['GenerateCAA']))
{
    $supportedCA = array('Digicert','Comodo','Certum');
    $caa_record_generator_req = new caa_record_generator_request();
    $caa_record_generator_req->HostName = $_POST['host_name'];
    foreach($supportedCA as $ca){
        if((isset($_POST[strtolower($ca).'_wildcard'])) || (isset($_POST[strtolower($ca).'_non_wildcard']))){
            $caObj = new CA();
            $caObj->CAName = $ca;
            $caObj->IsNonWildCardDomain = (isset($_POST[strtolower($ca).'_non_wildcard'])) ? true : false ;
            $caObj->IsWildCardDomain = (isset($_POST[strtolower($ca).'_wildcard'])) ? true : false ;
            $caa_record_generator_req->CA[] = $caObj;
        }

    }
    $caa_record_generator_resp = $ssl_api->caa_record_generator($caa_record_generator_req);
    ?>
    <div class="result-dtl" xmlns="http://www.w3.org/1999/html">

        <?php

        if($caa_record_generator_resp->AuthResponse->isError == true){ ?>
            <p class="errormsg">
                <span><?php echo $caa_record_generator_resp->AuthResponse->Message[0]; ?></span>
            </p>
        <?php
        }
        else{
            ?>
            <div class="warningmsg">
                <span><strong>Standard BIND Zone File</strong></span>
                <?php
                foreach ($caa_record_generator_resp->StandardZone as $rec) { ?>
                        <span><?php echo $rec; ?></span>
                    <?php
                }
                ?>
            </div>
            <div class="warningmsg">
                <span><strong>Legacy Zone File</strong></span>
                <?php
                foreach ($caa_record_generator_resp->LegacyZone as $rec) { ?>
                    <span><?php echo $rec; ?></span>
                <?php
                }
                ?>
            </div>
            <div class="warningmsg">
                <span><strong>tinydns</strong></span>
                <?php
                foreach ($caa_record_generator_resp->TinyDNS as $rec) { ?>
                    <span><?php echo $rec; ?></span>
                <?php
                }
                ?>
            </div>
            <?php

        }
        ?>
    </div>
<?php

}