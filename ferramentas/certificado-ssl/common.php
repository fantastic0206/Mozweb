<?php
require "api/sslstore.php";

$partner_code = '83042904';
$auth_token = '4D99DE2E5B135048B1E89AC85F5951B6';
$mode = 'LIVE'; //'TEST' or 'LIVE'

$ssl_api = new sslstore($partner_code, $auth_token, $token = '',$token_id = '',$token_code = '', $is_used_for_token_system = false, $mode);