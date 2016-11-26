<?php 

	/*
	 * sample example code for BingSearch.php class
	 * @author Marimuthu M marimuthu@17educations.com
	 * @license apache 2.0
	 * @bingapiurl https://dev.cognitive.microsoft.com/docs/services/56b43eeccf5ff8098cef3807/operations/56b4447dcf5ff8098cef380d
	 *@bing api documentation https://msdn.microsoft.com/en-US/library/mt707570.aspx
	 */


	ini_set('display_errors','1');
	require('BingSearchV5.php');
	
	//register for key on windows azure
	$apiKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX';
	
	$bing = new BingSearchV5($apiKey);
	
	$r = $bing->queryImage(array(
		'q'=>"'India'",//string
		'count'=>"2",//integer
		'mkt'=>"'en-in'"//string
	));

	// $r = $bing->queryWeb(array(
	// 	'q'=>"'India'",//string
	// 	'responseFilter'=>"webpages",//String
	// ));

	// $r = $bing->queryVideo(array(
	// 	'q'=>"'India'",//string
	// ));

	// $r = $bing->queryNews(array(
	// 	'q'=>"'India'",//string
	// ));

	// $r = $bing->queryRelatedSearch(array(
	// 	'q'=>"'India'",//string
	// 	'responseFilter'=>"relatedsearches",//String
	// ));

	// $r = $bing->querySpellingSuggestions(array(
	// 	'q'=>"'India'",//string
	// 	'responseFilter'=>"spellsuggestions",//String
	// ));
	echo '<pre>';
	var_dump($r);
