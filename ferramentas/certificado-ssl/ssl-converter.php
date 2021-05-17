<?php
require "ssl_converter_result.php";
$pageTitle = "SSL Tools - SSL Converter";
$keywords = "";
$metaDescription = "";
require "header.php";
?>

        <div class="content">
            <div class="tool-txt">
                <h1>SSL Converter</h1>
                <h2>FREE SSL Format Converter</h2>
                <p>
                    If your certificate was issued in the format not compatible with the server, convert it below:
                </p>
                <ul>
                    <li> Find current type,</li>
                    <li> Check the new format,</li>
                    <li> Select your certificate file,</li>
                    <li> Click convert button.</li>
                </ul>
            </div>
            <div class="form-wrap">
                <form name="frm_ssl_converter" id="frm_ssl_converter" method="post" enctype="multipart/form-data">
                    <div class="formraw">
                        <label>Current type :</label>
                            <input type="radio" name="from_type" value="PEM" id="from_type_pem" />PEM
                            <input type="radio" name="from_type" value="DER" id="from_type_der" />DER
                            <input type="radio" name="from_type" value="PFX" id="from_type_pfx" />PFX
                            <input type="radio" name="from_type" value="P7B" id="from_type_p7b" />P7B
                    </div>
                    <div class="formraw">
                        <label>Change for :</label>
                            <span id="wrap_to_type_pem">
                               <input type="radio" name="to_type" disabled="disabled" value="PEM" id="to_type_pem" />PEM
                            </span>
                            <span id="wrap_to_type_der">
                                <input type="radio" name="to_type" disabled="disabled" value="DER" id="to_type_der" />DER
                            </span>
                            <span id="wrap_to_type_pfx">
                                <input type="radio" name="to_type" disabled="disabled" value="PFX" id="to_type_pfx" />PFX
                            </span>
                            <span id="wrap_to_type_p7b">
                                <input type="radio" name="to_type" disabled="disabled" value="P7B" id="to_type_p7b" />P7B
                            </span>
                    </div>

                    <div class="formraw" id="div_certificate">
                        <label>Certificate :</label>
                        <input class="inputtxt" type="file" name="certificate" id="certificate">
                    </div>

                    <div class="formraw" id="div_private_key">
                        <label>Private Key :</label>
                        <input class="inputtxt" type="file" name="private_key" id="private_key">
                    </div>

                    <div class="formraw" id="div_root_cert">
                        <label>Root CA (option) :</label>
                        <input class="inputtxt" type="file" name="root_cert" id="root_cert">
                    </div>

                    <div class="formraw" id="div_intermediate_cert">
                        <label>Intermediate(s) CA (option) :</label>
                        <input class="inputtxt" type="file" name="intermediate_cert" id="intermediate_cert">
                    </div>
                    <div class="formraw" id="div_key_password">
                        <label>Set key password: :</label>
                        <input class="inputtxt" type="password" name="key_password" id="key_password">
                    </div>

                    <div class="formraw">
                        <input type="submit" name="sslconvert" id="sslconvert" value="Convert">
                    </div>
                </form>
            </div>
            <div id="results">
                <?php
                if(trim($error) != '') {
                    ?>
                    <p class="errormsg"><span><?php echo $error; ?></span></p>
                <?php
                }
                ?>
            </div>
        </div>
<?php
require "footer.php";
?>