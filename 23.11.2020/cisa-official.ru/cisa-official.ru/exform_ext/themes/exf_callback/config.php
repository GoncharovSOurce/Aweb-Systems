<?php
if(!isset($_REQUEST['mf_theme'])) die('Restricted access');

$config->theme = basename(dirname(__FILE__));

//$config->mail = 'your@mail.com';

//$config->form_addmsg = '*Если Вы спешите - укажите только свой номер телефона';
//$config->form_header = 'Закажите обратный звонок';
//$config->phone_time_title = 'Удобное время для звонка';
//$config->phone_time_value = 'в любое время';
$config->phone_title = 'Номер телефона';
$config->submit_title = 'Получить консультацию специалиста';

$config->require_phone = true;
$config->enable_captcha = false;
$config->button_close = false;

$field_value = $field_class = array_merge($field_value, array('phone_time'=>'')); 
?>