<html>
<head>
<title>����� ��������� ������. ������� ��������.</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta http-equiv="Content-Language" content="ru">
<link rel="shortcut icon" href="http://xn----7sbabeyrptt5atla3a7a.xn--p1ai/favicon.ico" type="image/x-icon">
<meta name="description" content="����� ��������� ������. ������� ��������.">
<meta name="keywords" content="����� ��������� ������. ������� ��������.">
<meta name="resource-type" content="document">
<meta name="robots" content="all">
<meta name="rating" content="general">
<meta name="distribution" content="global">
<meta name="revisit" content="10 days">
<meta name="copyright" content="asbu">
<link rel="stylesheet" href="../src/style_sec.css">
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<?
if($_POST['name']){ // ������� � ������ �������� �����, �� ����� ���� ������
  $znach = array(
    1 => $_POST['name'],
    2 => $_POST['tel'],
  );
  mail("asbu2014@1gb.ru", "����� ������  ".$_SERVER['HTTP_REFERER'], $znach[2]." ".$znach[1]); // ������ �� ���� ����������� ����, �������� �� ���� email
}
Header("Refresh: 8; URL=".$_SERVER['HTTP_REFERER']); // ������ 8 ������ ������� ����� ��������� �� ���������� URL
?>

<!DOCTYPE html>
<title><? print "$znach[1], ������ ������� ����������!"; ?></title>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta name="robots" content="noindex"/>
<style>
body {background: rgba(180,180,180,.9);}
body > div {
  position: absolute;
  top: 50%; left: 50%;
  -ms-transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);
  padding: .5% 1% 1%;
  border: 1px solid rgb(100,100,100);
  font-size: 140%;
  font-weight: 600;
  text-align: right;
  text-shadow: -1px -1px #666;
  color: rgb(240,240,240);
  background: rgb(150,150,150) linear-gradient(rgb(100,100,100), rgb(170,170,170));
}
label:hover {
  color: #dbeaf9;
  cursor: pointer;
}
body > div > div {padding-top: 3%;}
</style>

<div>
<label title="����������">?</label>
<div><? print "$znach[1]"; ?>, ���� ������ ��������!<br>
�� �������� ��� � ������� ����.</div>
</div>

<script> // ����� �� label ���������� ������� �� ���������� ��������, ��� �������� �����
document.getElementsByTagName('label')[0].onclick = function() {
  window.location.href="<? print $_SERVER['HTTP_REFERER']; ?>"
}
</script></body>
</html>