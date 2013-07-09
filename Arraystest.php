<?php

$arr = array(
    "bd_user" => "shweta.deshmukh",
    "bd_pass" => "b1prabhat",
    "api_key" => "335ffd7725c549c2aa6c6e99cd34060e"
);

$res = GetSignature($arr);

function GetSignature($arr)
{
    $signature = "";
    $ar        = array();
    $arr1      = array(
        "" => "n1NxmshqHvVMcdX9"
    );
    $arr       = array_merge($arr, $arr1);
    print_r($arr);
    
    $ar = array_keys($arr);
    print_r($ar);
    
    asort($ar);
    print_r($ar);
    foreach ($ar as $value) {
        $signature = $signature . $value . $arr[$value];
    }
    print_r($signature);
    #$signature = GetMD5HashData($signature);
    
    
}
function GetMD5HashData()
{
    return md5($signature);

}
?>
