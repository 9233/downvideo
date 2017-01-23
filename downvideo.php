	<?php
	
	
	function cut( $from, $start, $end, $lt = false, $gt = false )
    {
        $str = explode( $start, $from );
        if ( isset( $str['1'] ) && $str['1'] != "" )
        {
            $str = explode( $end, $str['1']);
            $strs = $str['0'];
        }
        else
        {
            $strs = "";
        }
        if ( $lt )
        {
            $strs = $start.$strs;
        }
        if ( $gt )
        {
            $strs .= $end;
        }
        return $strs;
    }
	
	//$cookieVerify = dirname(__FILE__)."/17verify.txt";
    //$cookieSuccess = dirname(__FILE__)."/17success.txt";

	// 获取cookie并保存
	//$ch = curl_init(); 
	//curl_setopt($ch, CURLOPT_URL, "http://www.icoolxue.com/play/7888");
	//curl_setopt($ch, CURLOPT_HEADER, 0);
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	//curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieVerify);
	//$rs = curl_exec($ch);
	//curl_close($ch); 
 
 
 
 
 
 for($i=7888;$i<7926;$i++){
 
	$url = "http://www.icoolxue.com/video/play/url/$i"; 
 
	// 返回结果存放在变量中，不输出
     $ch = curl_init();	
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	
	//经测试 cookie不是必要因素可忽略
	//curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieVerify);
	curl_setopt($ch, CURLOPT_HEADER, 1); 
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120); 
			
			
			

			$header = array(
            'Content-Type: application/x-www-form-urlencoded',
			'Accept: application/json, text/javascript, */*; q=0.01',
			'Host: www.icoolxue.com',
			'Referer: http://www.icoolxue.com/play/7888',
			'X-Requested-With: XMLHttpRequest',
			'client: web',
			'method:ajax'
			);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			
    curl_setopt($ch, CURLOPT_REFERER, "http://www.icoolxue.com/play/$i"); 
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result= curl_exec($ch);
	curl_close($ch);

$DownlaodUrl = cut($result,'data":"','"',false,false);


echo $DownlaodUrl;
echo '<br>';

}



		?>
