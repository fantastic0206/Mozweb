<?php
set_time_limit(500); 

include_once "requests.php";
include_once "responses.php";

class sslstore
{
    public static $API_MODE_LIVE='LIVE';
    public static $API_MODE_TEST='TEST';
    public static $LOG_ALLAPICALLS=false;

    private $_apimode='TEST';
    private $_partnerCode='';
    private $_authToken='';
    private $_token='';
    private $_tokenID='';
    private $_tokenCode='';
    private $_IsUsedForTokenSystem=false;
    private $_userAgent='';

    function __construct($partnerCode,$authToken,$token,$tokenID,$tokenCode,$IsUsedForTokenSystem,$apimode,$userAgent='SSLTools-SDK-UI')
    {
            $this->_apimode = $apimode;
            $this->_partnerCode = $partnerCode;
            $this->_authToken = $authToken;
            $this->_token = $token;
            $this->_tokenID = $tokenID;
            $this->_tokenCode = $tokenCode;
            $this->_IsUsedForTokenSystem = $IsUsedForTokenSystem;
            $this->_userAgent = $userAgent;
    }

    private function getAPIRequest()
    {
            $AuthRequest = new apirequest();
            $AuthRequest->AuthToken = $this->_authToken;
            $AuthRequest->PartnerCode = $this->_partnerCode;
            $AuthRequest->UserAgent = $this->_userAgent;
            $AuthRequest->Token = $this->_token;
            $AuthRequest->TokenID = $this->_tokenID;
            $AuthRequest->TokenCode = $this->_tokenCode;
            $AuthRequest->IsUsedForTokenSystem = $this->_IsUsedForTokenSystem;
            $AuthRequest->ReplayToken = uniqid('SSLTools-PHP-SDK');
            return $AuthRequest;
    }

    private function cloneObjectFromJson($obj,$jsonobj)
    {
        if($jsonobj!=null && is_object($jsonobj))
        {
            foreach ($jsonobj AS $key => $val) $obj->{$key} = $val;
            return $obj;
        }
        else
            return $jsonobj; //No need to map as it's a scalar value
    }

    private function getCURL($url,$method,$message='')
    {
            $ch = curl_init();
            if (!$ch)
            {
                    die("Couldn't initialize a cURL handle");
            }
            curl_setopt($ch, CURLOPT_URL,$url);
            if($method=='POST')
            {
                    curl_setopt($ch, CURLOPT_POST, 1);
            }
            else
            {
                    curl_setopt($ch,CURLOPT_HTTPGET,1);
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            if($message!='')
                    curl_setopt($ch, CURLOPT_POSTFIELDS,$message); //Append POST messages
            curl_setopt($ch,CURLOPT_HTTPHEADER,array ("Content-Type: application/json; charset=utf-8"));
            return $ch;
    }

    private function getCURLResponse($curl)
    {
            $returnresp = new curlresponse();
            $returnresp->response = curl_exec($curl);
            if(curl_errno($curl))
                    $returnresp->error = curl_error($curl);
            $returnresp->info = curl_getinfo($curl);
            curl_close($curl); // close cURL handler
            return $returnresp; //Return Result
    }

    private function postToCurl($url,$requestData,$responseData,$HttpMethod='POST')
    {
        $logid = uniqid('api-without-token-'); //for calls without ID
        if(isset($requestData->AuthRequest))
        {
            $requestData->AuthRequest = $this->getAPIRequest();
            $logid = $requestData->AuthRequest->ReplayToken;
        }
        $msg = '';
        if($requestData!=null)
            $msg = json_encode($requestData); //SET JSON FORMAT if not null

       	$curl = $this->getCURL($url,$HttpMethod, $msg);
       	$response = $this->getCURLResponse($curl);

        if(sslstore::$LOG_ALLAPICALLS)
        {
            $requestfile = $logid . '-request.json';
            $responsefile = $logid . '-response.json';
            file_put_contents($requestfile, $msg);
            file_put_contents($responsefile, $response);
        }
        if($response->error=='')
       	{
       		$respobj = json_decode($response->response);
       		if($responseData!=null) //Indicates if Casting required to a class type
               $result = $this->cloneObjectFromJson($responseData,$respobj);
            else
               $result = $respobj; //Returns raw response if not

           if(isset($result->AuthRequest))
           {
                if($result->AuthResponse->ReplayToken!=$requestData->AuthRequest->ReplayToken)
                {
                       $result = $responseData;
                       die('Something wrong with API, ReplayTokens does not match!');
                }
           }
            return $result;
        }
        else
        {

            $responseData->AuthResponse->isError = true;
            $responseData->AuthResponse->Message = array($response->error);
            return $responseData;
        }
    }

	public function getURL()
	{
		if(strtoupper($this->_apimode)=='LIVE')
		{
		   return 'https://api.thesslstore.com/rest/ssltools';
		}
		else
        {
            return 'https://sandbox-wbapi.thesslstore.com/rest/ssltools';
        }
	}

    /**
     * @param ssl_checker_request $ssl_checker_request
     * @return ssl_checker_response
    */
    public function ssl_checker($ssl_checker_request)
    {
        $url = $this->getURL() . '/sslchecker/';
        $resp = new ssl_checker_response();
        return $this->postToCurl($url,$ssl_checker_request,$resp);
    }
    
    /**
     * @param csr_decoder_request $csr_decoder_request
     * @return csr_decoder_response
    */
    public function csr_decoder($csr_decoder_request)
    {
        $url = $this->getURL() . '/csrdecoder/';
        $resp =  new csr_decoder_response();
        return $this->postToCurl($url,$csr_decoder_request,$resp);
    }

    /**
     * @param certificate_decoder_request $certificate_decoder_request
     * @return certificate_decoder_response
     */
    public function certificate_decoder($certificate_decoder_request)
    {
        $url = $this->getURL() . '/certdecoder/';
        $resp =  new certificate_decoder_response();
        return $this->postToCurl($url,$certificate_decoder_request,$resp);
    }

    /**
     * @param certificate_key_matcher_request $certificate_key_matcher_request
     * @return certificate_key_matcher_response
     */
    public function certificate_key_matcher($certificate_key_matcher_request)
    {
        $url = $this->getURL() . '/certkeymatcher/';
        $resp =  new certificate_key_matcher_response();
        return $this->postToCurl($url,$certificate_key_matcher_request,$resp);
    }

    /**
     * @param ssl_converter_request $ssl_converter_request
     * @return ssl_converter_response
     */
    public function ssl_converter($ssl_converter_request)
    {
        $url = $this->getURL() . '/sslconverter/';
        $resp =  new ssl_converter_response();
        return $this->postToCurl($url,$ssl_converter_request,$resp);
    }

    /**
     * @param csr_generator_request $csr_generator_request
     * @return csr_generator_response
     */
    public function csr_generator($csr_generator_request)
    {
        $url = $this->getURL() . '/csrgenerator/';
        $resp =  new csr_generator_response();
        return $this->postToCurl($url,$csr_generator_request,$resp);
    }

    /**
     * @param why_no_padlock_request $why_no_padlock_request
     * @return why_no_padlock_response
     */
    public function why_no_padlock($why_no_padlock_request)
    {
        $url = $this->getURL() . '/whynopadlock/';
        $resp =  new why_no_padlock_response();
        return $this->postToCurl($url,$why_no_padlock_request,$resp);
    }

    /**
     * @param caa_record_generator_request $caa_record_generator_request
     * @return caa_record_generator_response
     */
    public function caa_record_generator($caa_record_generator_request)
    {
        $url = $this->getURL() . '/caarecordgenerator/';
        $resp =  new caa_record_generator_response();
        return $this->postToCurl($url,$caa_record_generator_request,$resp);
    }

    /**
     * @param server_checker_request $server_checker_request
     * @return server_checker_response
     */
    public function server_checker($server_checker_request)
    {
        $url = $this->getURL() . '/serverchecker/';
        $resp = new server_checker_response();
        return $this->postToCurl($url,$server_checker_request,$resp);
    }


}

class messagehelper
{
    static function writeinfo($msg)
    {
        echo '<strong>' . $msg . '</strong><br/>';
        echo "\n";
    }

    static function writeerror($msg)
    {
        echo '<strong><span style="color:red">';
        echo '<pre>';
        var_dump($msg);
        echo '</pre>';
        echo '</span></strong><br/>';
        echo "\n";
    }

    static function writevarinfo($msg)
    {
        echo '<pre>';
        var_dump($msg);
        echo "</pre></br>\n";
    }
}


?>