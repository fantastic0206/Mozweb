<?php
class baserequest
{
    public $AuthRequest;
    public function __construct()
    {
        $this->AuthRequest = new apirequest();
    }
    public function __toString()
    {
        return var_export($this,true);
    }
}


class apirequest
{
    public $PartnerCode = '';
    public $AuthToken = '';
    public $ReplayToken = '';
    public $UserAgent = '';
    public $TokenID = '';
    public $TokenCode = '';
    public $IPAddress = '';
    public $IsUsedForTokenSystem = false;
    public $Token = '';
}

class CA{
    public $CAName;
    public $IsNonWildCardDomain = false;
    public $IsWildCardDomain = false;
}

class ssl_checker_request extends baserequest{
    public $HostName;
}

class csr_decoder_request extends baserequest{
    public $CSR;
}

class certificate_decoder_request extends baserequest{
    public $Certificate;
}

class certificate_key_matcher_request extends baserequest{
    public $Certificate;
    public $CSR;
    public $PrivateKey;
}

class ssl_converter_request extends baserequest{
    public $Certificate;
    public $PrivateKey;
    public $RootCA;
    public $IntermediatesCA;
    public $KeyPassword;
    public $ConvertFrom;
    public $ConvertTo;
}

class csr_generator_request extends baserequest{
    public $CommonName;
    public $OrganizationName;
    public $OrganizationUnit;
    public $Locality;
    public $State;
    public $Country;
    public $Email;
    public $KeySize;
    public $SignatureAlgorithm;
}

class why_no_padlock_request extends baserequest{
    public $URL;
}

class caa_record_generator_request extends baserequest{
    public $HostName;
    public $CA;
}
class server_checker_request extends baserequest{
    public $HostName;
}