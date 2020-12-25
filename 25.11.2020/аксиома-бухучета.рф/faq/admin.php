<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?
include("config.php");

if ($language == 'En')
include "english.php";
if ($language == 'Ru')
include "russian.php";

function form()
{
echo "
<html>
<head>
<title>ParkerFAQ | Admin it!</title>
<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
<meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1251\">
</head>
<form action=admin.php method=get>
<font face=verdana size=2 color=000000>password:..</font>
<input typy=text name=p size=25 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\">
<input type=submit value=Enter! style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BACKGROUND: ffffff; Font face: Verdana\">
</form>
";
}
if ($p == "$password")
{
?>
<html>
<head>
<title>ParkerFAQ | Admin it!</title>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<?
if ($QUERY_STRING == "p=$p")
{
$general = file("$base");
$messages = count($general);
}
}
?>
</head>
<?
function replace ($string)
{
$string = stripslashes($string);
$string = ereg_replace("<","&lt;",$string);
$string = ereg_replace(">","&gt;",$string);
$string = ereg_replace('\\\"',"&quot;",$string);
$string = ereg_replace("::","&#58;&#58;",$string);
$string = ereg_replace("!","&#33;",$string);
$string = ereg_replace("\r\n","<br>",$string);
$string = ereg_replace("%","&#37;",$string);
$string = ereg_replace("^ +","",$string);
$string = ereg_replace(" +$","",$string);
$string = ereg_replace(" +"," ",$string);
return $string;
}
?>
<left>
<?
$general = file("$base");
if (isset($action))
{
if ($action == "Удалить" or $action == "Ответить/Изменить")
{
$editor = fopen("$base","w");
for ($j = 0; $j < count($general); $j++)
{
if ($j != $number)
{
fputs($editor,$general[$j]);
}
else
{
if ($action == "Ответить/Изменить")
{
$from = replace($from);
$into = replace($into);
$name = replace($name);
$msg = replace($msg);
$mail = replace($mail);
$answer = replace($answer);
$date = replace($date);
$ip = replace($ip);
fputs($editor,"$name::$mail::$msg::$date::$ip::$answer\r\n");
}
}
}
fclose($editor);
$general = file("$base");
}
}
$messages = count($general);
if ($QUERY_STRING == "p=$password" or $menu == "messages" or $page != "")
{
if ($messages > "0")
{
echo "<table width=500 border=0 cellspacing=1 cellpadding=1 bgcolor=000000><tr><td bgcolor=#ffffff align=left><font face=verdana size=2>Вопросов всего: <font color=000000>$messages | << <B><a href = 'faq.php'>На главную страницу</a></B></font></td></tr></table>";
}
$pmessages = file("$base");
if ($page == "")
{
$page = "1";
}
$first = count($pmessages) - ($onlyp * ($page - 1));
$second = count($pmessages) - ($onlyp * $page) + 1;
if ($second < 1)
{
$second = 1;
}
$pages = (int) ((count($pmessages) + $onlyp) / $onlyp);
$line = "|";
for ($onlyp = 1; $onlyp <= $pages; $onlyp++)
{
if ($onlyp != $page)
{
$line .= "<a href=\"admin.php?p=$p&page=$onlyp\"> $onlyp </a>|";
}
if ($onlyp == $page)
{
$line .= "$onlyp |";
}
}
if ($messages > "0")
{
echo "<br>$line<br>";
}
for ( $i = $first-1; $i >= $second-1; $i--)
{
list($name,$mail,$msg,$date,$ip,$answer) = explode("::", $general[$i]);

if ($messages != "0")
{
$answer = str_replace("<br>","\r\n",$answer);
$msg = str_replace("<br>","\r\n",$msg);
$id = $i;
$id++;
echo "<form action=admin.php method=\"get\" name=\"ParkerFAQ$i\">
<input type=\"hidden\" name=\"p\" value=\"$p\"><table width=500 border=0 cellspacing=1 cellpadding=1 bgcolor=ffffff>";
echo "<tr><td align=left bgcolor=#ffffff colspan=2><B><font face=verdana size=1 color=000000>Вопрос номер $id</font></B><BR>...";
echo "<tr><td bgcolor=#ffffff align=left><font color=000000 face=verdana size=2>Имя:</td><td align=left bgcolor=#ffffff><input type=text name=name value=\"$name\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"></td></tr>";
echo "<tr><td bgcolor=#ffffff align=left><font color=000000 face=verdana size=2>E-mail</td><td align=left bgcolor=#ffffff><input type=text name=mail value=\"$mail\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"></td></tr>";
echo "<input type=hidden name=date value=\"$date\" size=30>";
echo "<tr><td bgcolor=#ffffff align=left><font color=000000 face=verdana size=2>IP:</td><td align=left bgcolor=#ffffff><input type=text name=ip value=\"$ip\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"></td></tr>";
echo "<tr><td bgcolor=#ffffff align=left><font color=000000 face=verdana size=2>Вопрос:</td><td align=left bgcolor=#ffffff><textarea rows=5 cols=30 name=msg style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\">$msg</textarea></td></tr>";
echo "<tr><td bgcolor=#ffffff align=left><font color=000000 face=verdana size=2>Ответ:</td><td align=left bgcolor=#ffffff><textarea rows=5 cols=30 name=answer style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\">$answer</textarea></td></tr>";
echo "<tr><td align=center colspan=2 bgcolor=#ffffff><input type=submit name=action value=Удалить style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BACKGROUND: ffffff; Font face: Verdana\">
						     <input type=submit name=action value=\"Ответить/Изменить\" style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BACKGROUND: ffffff; Font face: Verdana\"></td></tr>";
echo "<input type=hidden name=menu value=msg>";
echo "<input type=hidden name=page value=$page>";
echo "<input type=hidden name=number value=$i>";
echo "</table></form>";
}
}
}
if ($messages <= 0)
print "<font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Вопросов в базе даных нет! << <a href = 'add_q.php'>Назад</a></font><BR>"; 
// if ($menu == "users")
?>
</center>
</body>
</html>
<?
if ($QUERY_STRING == "" and $p == "")
{
form();
}
if ($QUERY_STRING != "" and $p != "$password")
{
if(empty($log_ip))
{
if (getenv('HTTP_X_FORWARDED_FOR'))
{
$ip=getenv('HTTP_X_FORWARDED_FOR');
}
else
{
$log_ip=getenv('REMOTE_ADDR');
}
}
form();
}
?>
</body>
</html>
