<?php 
if($_SERVER['REQUEST_METHOD'] != 'POST'){ exit;}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$initial_post_data = $_POST;

$result_post_data = [];

if(!$initial_post_data){
    die("Error during send process!");
}


foreach ($initial_post_data as $key => $value) {
   
    $result_post_data[test_input($key)] = test_input($value);
    
}

function dataArrayToStringForMessage($data){
    $result_str = '';
    foreach ($data as $key => $value) {        
        $result_str.= ''.$key.': '.$value.'
        ';
    }
    return $result_str;
}


$url = url();

$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/plain;charset=utf-8\r\n";
$headers.= "From:".$url." <admin@example.com>\r\n";
$to = "toEmail-1@example.com,toEmail-2@example.com"; // Обратите внимание: если несколько адресоа, то через запятую

$subject  = 'New order from our form';
$message = ''.$subject.'
'.dataArrayToStringForMessage($result_post_data).
            'from: '.$url;

if(mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers)){
        die('success');
    echo json_encode($result);
} else{
    exit;
};

// get Current URL domain

function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}
 ?>