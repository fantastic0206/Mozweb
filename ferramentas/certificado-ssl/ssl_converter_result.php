<?php
require_once('common.php');
$error = '';
if(isset($_POST['sslconvert'])){

    require_once("Zip.php");

    $from_type = $_POST['from_type'];
    $to_type = $_POST['to_type'];
    $certificate = (!empty($_FILES['certificate']['tmp_name'])) ? file_get_contents($_FILES['certificate']['tmp_name']) : '';
    $root_cert = (!empty($_FILES['root_cert']['tmp_name'])) ? file_get_contents($_FILES['root_cert']['tmp_name']) : '';
    $intermediate_cert = (!empty($_FILES['intermediate_cert']['tmp_name'])) ? file_get_contents($_FILES['intermediate_cert']['tmp_name']) : '';
    $private_key = (!empty($_FILES['private_key']['tmp_name'])) ? file_get_contents($_FILES['private_key']['tmp_name'])  : '';
    $key_password = $_POST['key_password'];

    if(($from_type == 'DER' && $to_type == 'PEM') || ($from_type == 'PFX' && $to_type == 'PEM')){
        $certificate = base64_encode($certificate);
    }



    $ssl_converter_req = new ssl_converter_request();
    $ssl_converter_req->Certificate = $certificate;
    $ssl_converter_req->PrivateKey = $private_key;
    $ssl_converter_req->RootCA = $root_cert;
    $ssl_converter_req->IntermediatesCA = $intermediate_cert;
    $ssl_converter_req->KeyPassword = $key_password;
    $ssl_converter_req->ConvertFrom = $from_type;
    $ssl_converter_req->ConvertTo = $to_type;

    $ssl_converter_resp = $ssl_api->ssl_converter($ssl_converter_req);

    if($ssl_converter_resp->AuthResponse->isError == true){
        $error = $ssl_converter_resp->AuthResponse->Message[0];
    }
    else
    {
        if($from_type == 'PEM' && $to_type == 'DER'){
            $file_name = "Certificate.der";
            file_put_contents($file_name, base64_decode($ssl_converter_resp->Certificate));

            header('Content-Description: File Transfer');
            header('Content-Type: application/der');
            header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_name));
            ob_clean();
            flush();
            readfile($file_name);
            unlink($file_name);
            exit;

        }
        elseif($from_type == 'PEM' && $to_type == 'PFX'){
            $file_name = "Certificate.pfx";
            file_put_contents($file_name, base64_decode($ssl_converter_resp->Certificate));

            header('Content-Description: File Transfer');
            header('Content-Type: application/pfx');
            header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_name));
            ob_clean();
            flush();
            readfile($file_name);
            unlink($file_name);
            exit;
        }
        elseif($from_type == 'PEM' && $to_type == 'P7B'){

            $file_name = "Certificate.p7b";

            file_put_contents($file_name,$ssl_converter_resp->Certificate);

            header('Content-Description: File Transfer');
            header('Content-Type: application/p7b');
            header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_name));
            ob_clean();
            flush();
            readfile($file_name);
            unlink($file_name);
            exit;

        }
        elseif($from_type == 'DER' && $to_type == 'PEM'){
            $file_name = "Certificate.pem";
            file_put_contents($file_name, $ssl_converter_resp->Certificate);

            header('Content-Description: File Transfer');
            header('Content-Type: application/pem');
            header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_name));
            ob_clean();
            flush();
            readfile($file_name);
            unlink($file_name);
            exit;
        }
        elseif($from_type == 'PFX' && $to_type == 'PEM'){
            $zip = new Zip();

            $fileDir = './';
            $zip->addFile($ssl_converter_resp->Certificate, "Certificate.cer");

            $zip->addFile($ssl_converter_resp->PrivateKey, "PrivateKey.key");

            $count = 1;
            foreach($ssl_converter_resp->ChainCertificates as $cert){
                $zip->addFile($cert, "CACertificate".$count.".cer");
                $count++;
            }

            if ($handle = opendir($fileDir)) {
                /* This is the correct way to loop over the directory. */
                while (false !== ($file = readdir($handle))) {
                    if (strpos($file, ".html") !== false) {
                        $pathData = pathinfo($fileDir . $file);
                        $fileName = $pathData['filename'];

                        $zip->addFile(file_get_contents($fileDir . $file), $file, filectime($fileDir . $file));
                    }
                }
            }

            $zip->sendZip("certificates.zip");
            exit;
        }
        elseif($from_type == 'P7B' && $to_type == 'PEM'){

            $zip = new Zip();

            $fileDir = './';
            $zip->addFile($ssl_converter_resp->Certificate, "Certificate.cer");

            $count = 1;
            foreach($ssl_converter_resp->ChainCertificates as $cert){
                $zip->addFile($cert, "CACertificate".$count.".cer");
                $count++;
            }

            if ($handle = opendir($fileDir)) {
                /* This is the correct way to loop over the directory. */
                while (false !== ($file = readdir($handle))) {
                    if (strpos($file, ".html") !== false) {
                        $pathData = pathinfo($fileDir . $file);
                        $fileName = $pathData['filename'];

                        $zip->addFile(file_get_contents($fileDir . $file), $file, filectime($fileDir . $file));
                    }
                }
            }

            $zip->sendZip("certificates.zip");
            exit;
        }
        elseif($from_type == 'P7B' && $to_type == 'PFX'){
            $file_name = "Certificate.pfx";
            file_put_contents($file_name, base64_decode($ssl_converter_resp->Certificate));

            header('Content-Description: File Transfer');
            header('Content-Type: application/pfx');
            header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_name));
            ob_clean();
            flush();
            readfile($file_name);
            unlink($file_name);
            exit;
        }
    }



}

?>
