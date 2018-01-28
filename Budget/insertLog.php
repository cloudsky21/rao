<?PHP
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function audit($account, $transaction, $ipAdd){
include("config.php");

date_default_timezone_set("Asia/Manila");
$date_today = date("Y/m/d");
$time_today= date("h:i:s");
$query = "INSERT INTO logs (eventDate, eventTime, account_logged, transaction, ip_address) VALUES ('$date_today','$time_today','$account','$transaction','$ipAdd')";     
	$result = mysqli_query($db,$query);
	$arrows =  mysqli_affected_rows($db);	
		
		

}

?>