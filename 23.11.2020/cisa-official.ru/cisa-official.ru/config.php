<?

//====================НАСТРОЙКИ==============================
$site_telephones = '+7-495-532-03-37';
$base_url = 'cisa-official.ru';// Адрес сайта без www
$site_mail = 'servicezamkov@yandex.ru';
$adminmails = 'churakov_06@mail.ru'; //просто сообщение
$site_group_vk_link = 'https://vk.com/public181492164';
$show_alert = 0;
$last_activ = 0;
if($_POST){
    $usercompany = '';
    $usertel = '';
    $userphone = '';
    $usermail = '';
    $usertext = '';
    $spam = '';
    $spam_text = '';
    $login = '';
    $name = '';
    $privacy = false;

    if(isset($_POST['name']) && $_POST['name']){
        $name = htmlspecialchars(strip_tags($_POST['name']));
    }
    if(isset($_POST['login']) && $_POST['login']){
        $login = htmlspecialchars(strip_tags($_POST['login']));
    }

    if($login || $name != "Ваше имя"){
        $spam = 'СПАМ ';
        $spam_text .= 'СПАМ (изменены контрольные поля)'."\r\n";
    }

    if($spam) return;


    if (isset($_POST['formname']) && $_POST['formname']) {
        $formname = $_POST['formname'];
    }

    if(isset($_POST['usercompany']) && $_POST['usercompany']){
        $usercompany = htmlspecialchars(strip_tags($_POST['usercompany']));
        $usertext .= 'Компания: '.$usercompany."\n";
    }
    if(isset($_POST['username']) && $_POST['username']){
        $username = htmlspecialchars(strip_tags($_POST['username']));
        $usertext .= 'Имя: '.$username."\n";
    }
    if(isset($_POST['usermail']) && $_POST['usermail']){
        $usermail = htmlspecialchars(strip_tags($_POST['usermail']));
        $usertext .= 'Телефон: '.$usermail."\n";
    }
    if(isset($_POST['usertext']) && $_POST['usertext']){
        $usertxt = htmlspecialchars(strip_tags($_POST['usertext']));
        $usertext .= 'Примечание: '.$usertxt."\n";
    }


    if($usermail){
        $message = ''.$usertext.' '."\r\n".'Способ связи: '.$usermail.' ';
        $sendtel = $usermail;

        if(!empty($adminmails)){
            mail('churakov_06@mail.ru', "На сайт ".$base_url." поступила заявка от ".$sendtel.".", $message);
            mail('servicezamkov@yandex.ru', "На сайт ".$base_url." поступила заявка от ".$sendtel.".", $message);
            mail('shoplocks@yandex.ru', "На сайт ".$base_url." поступила заявка от ".$sendtel.".", $message);
        }


        $username = '';
        $usermail = '';
        $usertext = '';

        $show_alert = 1;


    }else{
        // Есть не заполненные поля - просим ввести недостающее
        $show_alert = 2;
    }
}

?>