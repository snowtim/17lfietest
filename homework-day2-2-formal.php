<?php

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, "http://www.cpbl.com.tw/");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$curl_result = curl_exec($curl);

	preg_match_all('/<a href="\/news\/view\/(.*?)">/', $curl_result, $topnews_href);	
	preg_match_all('/">(.*?)<\/a><\/li>/', $curl_result, $topnews_title);	

?>

<?php for($i=0; $i<5; $i++) { ?>
	<li>
		<a href="http://www.cpbl.com.tw/news/view/<?php echo $topnews_href[1][$i]; ?>">
			<?php echo $topnews_title[1][$i+24]; ?>
		</a>
	</li>
<?php } ?>