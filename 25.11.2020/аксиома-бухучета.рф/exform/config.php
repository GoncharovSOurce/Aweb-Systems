<?php
if(!isset($_REQUEST["mf_path"]) && !isset($_REQUEST["mf_captcha_code"])) die("Restricted access");
class mform_config{
	public $mail = 'info@asbu.ru'; //e-mail, на который должны отправлятся сообщения
	public $mail_subject = 'Новое сообщение отправленное с сайта';
	public $mail_from = 'test@gmail.com';
	public $form_header = 'Форма обратной связи';
	public $name_title 	= 'Ваше имя';
	public $phone_title = 'Ваш телефон';
	public $email_title = 'Email';
	public $message_title = 'Комментарий';
	public $message_required = 'Поля обязательные для заполнения';
	public $submit_title = 'Отправить';
	public $close_title = 'Закрыть';
	public $captcha_refresh = 'Обновить';
	public $captcha_code = 'Защитный код';
	public $empty_value = 'Поле не заполнено';
	public $error_name_value = 'Имя введено не корректно';
	public $error_phone_value = 'Телефон введен не корректно';
	public $error_email_value = 'Email введен не корректно';
	public $error_captcha_value = 'Неверный код';
	public $error_mail = 'Ошибка при отправке почты';
	public $final_message = 'Ваша заявка успешно отправлена! Благодарим за обращение!';
	public $enable_captcha = true;
}
?>