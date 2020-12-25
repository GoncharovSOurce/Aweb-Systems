<?php
/**
 *
 * mForm v1.0
 * Lopulyak Oleg < ol_lo@ukr.net >
 * Created 10.02.2013 updated 28.09.2015
 * 
 */
if(!isset($_REQUEST["mf_path"]) && !isset($_REQUEST["mf_captcha_code"])) die("Restricted access");

$boundary = md5(date('r', time()));

$headers =  "MIME-Version: 1.0\r\n".
			"From: ".$config->mail_from."\r\n".
			'X-Mailer: PHP/'.phpversion()."\r\n".
			"Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

$message = "--$boundary
Content-Type: text/html; charset=\"utf-8\"\r\n
".$message;
  
if(is_uploaded_file($_FILES['mf_file']['tmp_name'])){
 $attachment = chunk_split(base64_encode(file_get_contents($_FILES['mf_file']['tmp_name'])));
 $filename = $_FILES['mf_file']['name'];
 $filetype = $_FILES['mf_file']['type'];
 $filesize = $_FILES['mf_file']['size'];
 $message.="

--$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=\"$filename\"

$attachment";
}
 $message .= "
--$boundary--";
			
$mail_status = mail($config->mail, $config->mail_subject, $message, $headers);
?>
