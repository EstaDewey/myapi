<?php
/**
* class shortUrl
* desc 短连接生成类
* author dewey
* createtime 2018-05-23
*/
class ShortUrl
{
	
	function __construct($url)
	{
		$this->url = $url;
	}

	public function getShortUrl(){
		$ch = curl_init();
		$url = 'http://api.c7.gg/api.php?url='.urlencode($this->url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_HTTPGET,1);
		curl_setopt($ch, CURLOPT_REFERER, 'http://api.c7.gg');
		curl_setopt($ch,CURLOPT_HEADER,0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$ret = curl_exec($ch);
		curl_close($ch);
		return $ret;
	}
}
$url = 'www.baidu.com';
$class = new ShortUrl($url);
$url = $class->getShortUrl();
echo $url;