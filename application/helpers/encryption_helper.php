<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


function encrypt( $string ) {
    // you may change these values to your own
    $secret_key = getSiteKey();
    $secret_iv = 'hacker';
 
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    
    return $output;
}

function decrypt( $string ) {
    // you may change these values to your own
    $secret_key = getSiteKey();
    $secret_iv = 'hacker';
 
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    
    return $output;
}

function getSiteKey(){
    $ci = &get_instance();
    $ci->db->where("name","site_key");
    $query = $ci->db->get("site_options");
    if($query->num_rows() > 0){
        return $query->row()->value;
    }else{
        return "eff8e7ca506627fe15dda5e0e512fcaad70b6d520f37cc76597fdb4f2d83a1a3";
    }
}
function getLastRegId(){
    $ci = &get_instance();
    $ci->db->select("registration_id");
    $ci->db->limit(1);
    $ci->db->order_by("registration_id","desc");
    $query = $ci->db->get("user_registration");
    if($query->num_rows() > 0){
        $id = $query->result()[0]->registration_id;
        return explode("-",$id)[1];
    }else{
        return "15000";
    }
}
?>


