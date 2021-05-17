<?php
class baseresponse
{
    public $AuthResponse;
    public function __construct()
    {
        $this->AuthResponse = new apiresponse();
    }
}

class apiresponse
{
    public $isError = false;
    public $Message;
    public $Timestamp = '';
    public $ReplayToken = '';
    public $InvokingPartnerCode='';
}
class curlresponse
{
    public $info;
    public $response;
    public $error='';
}

class server_cert_info{
    public $CommonName;
    public $SANs;
    public $OrganizationName;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $SignatureAlgorithm;
    public $Issuer;
}

class chain_cert_info{
    public $CommonName;
    public $OrganizationName;
    public $Location;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $SignatureAlgorithm;
    public $Issuer;
}

class ssl_checker_response extends baseresponse{
    public $isCertificateFound;
    public $ServerIP;
    public $ServerType;
    public $Issuer;
    public $ExpirationDate;
    public $ServerCertInfo;
    public $ChainCertInfo;
    public function __construct()
    {
        $this->ServerCertInfo = new server_cert_info();
        $this->ChainCertInfo = new chain_cert_info();
    }
}

class csr_decoder_response extends baseresponse{
    public $CommonName;
    public $OrganizationName;
    public $OrganizationUnit;
    public $Locality;
    public $State;
    public $Country;
    public $Email;
    public $KeySize;
}

class certificate_decoder_response extends baseresponse{
    public $CommonName;
    public $AlternativeNames;
    public $OrganizationName;
    public $OrganizationUnit;
    public $Locality;
    public $State;
    public $Country;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $Issuer;
    public $SerialNumber;
}

class certificate_key_matcher_response extends baseresponse{
    public $IsCSRMatched = false;
    public $IsPrivateKeyMatched = false;
}

class ssl_converter_response extends baseresponse{
    public $Certificate;
    public $PrivateKey;
    public $ChainCertificates = array();
}

class csr_generator_response extends baseresponse{
    public $CSR;
    public $PrivateKey;
}

class why_no_padlock_response extends baseresponse{
    public $Domain;
    public $URLTested;
    public $ServerIP;
    public $isCertificateFound;
    public $CommonName;
    public $Issuer;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $InsecureLinks = array();
    public $ExternalInsecureLinks = array();
}

class caa_record_generator_response extends baseresponse{
    public $StandardZone = array();
    public $LegacyZone = array();
    public $TinyDNS = array();
}

class server_checker_response extends baseresponse{
    public $Host;
    public $Port;
    public $Protocol;
    public $AssesmentStartTime;
    public $TestTime;
    public $EndPoints = array();
}