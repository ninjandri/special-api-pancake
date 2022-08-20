<?php

# ------ 
# QXV0aG9y  : cmVhZHNldmVub25l
# bWFpbA==  : cmlkd2FucGFuamkuYWtiYXJAcHJvdG9ubWFpbC5jb20=
# ------

# Global Function disini aja sayang !!
# kita bisa membuat fungsi disini untuk memudahkan scripting.

# Membuat fungsi CURL :
# untuk mengambil data API Url
# 2022-08-20 16:12:50

function http_request($url)
{
    //  inisial curl
    $curl = curl_init();

    // get request url
    curl_setopt($curl, CURLOPT_URL, $url);

    // set user agent default firefox
    curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    
    // kembalikan nilai 1 default
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
    // responses
    $response = curl_exec($curl);
    
    // close curl
    curl_close($curl);

    // return data
    return json_decode($response, true);
}
