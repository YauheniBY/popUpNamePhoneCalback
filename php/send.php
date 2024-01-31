<?php 
if($_SERVER['REQUEST_METHOD'] != 'POST'){ exit;}
$post_data = $_POST;

$user_phone = $post_data['phonenumber']; 
$user_name = htmlspecialchars($post_data['name']); 
if(!preg_match('/([\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/',substr($user_phone, 3 ) ) || empty(trim($user_name)) || strlen($user_name)<2 ) {
    exit;
}
$url = url();

$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/plain;charset=utf-8\r\n";
$headers.= "From:".$url." <admin@example.com>\r\n";
$to = "eluli2009@yandex.com,eluli2000@yandex.com"; // Обратите внимание: если несколько адресоа, то через запятую

$subject  = 'New order from our form';
$message = ''.$subject.'
            User name: '.$user_name.'
            User phone: '.$user_phone.'
            from: '.$url;

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