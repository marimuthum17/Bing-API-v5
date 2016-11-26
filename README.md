# Bing-API-v5


Microsoft have announced they are replacing the Bing search api that we are currently using  with a new version, this will happen from December 9th 2016.
Here We have implemented the sample code using PHP.

Bing Have Following Bing APIS

1. Image Data Source
2. News Data Source
3. Video Data Source
4. Web Data Source
5. RelatedSearch Data Source
6. SpellingSuggestions Data Source

Example :

Step 1 : Include BingSearch.php File
require('BingSearchV5.php');
	
Step 2 : Replace Registerd API key
	//register for key on windows azure
	$apiKey = 'XXXXXXXXXXXXXXXXXXXXX';

Step 3 : Create Object For The Class
	$bing = new BingSearch($apiKey);

Step 4 : Start Accessing API:

1. Image Data Source

  $r = $bing->queryImage(array(
		'q'=>"'India'",//string
		'count'=>"2",//integer
		'mkt'=>"'en-in'"//string
	));

2. News Data Source

	$r = $bing->queryNews(array(
	 	'q'=>"'India'",//string
	));	

3. Video Data Source

 	$r = $bing->queryVideo(array(
	 	'q'=>"'India'",//string
	));

4. Web Data Source

	$r = $bing->queryWeb(array(
	 	'q'=>"'India'",//string
	 	'responseFilter'=>"webpages",//String
	));

5. RelatedSearch Data Source

	$r = $bing->queryRelatedSearch(array(
	 	'q'=>"'India'",//string
	 	'responseFilter'=>"relatedsearches",//String
	));

6. SpellingSuggestions Data Source

	$r = $bing->querySpellingSuggestions(array(
	 	'q'=>"'India'",//string
	 	'responseFilter'=>"spellsuggestions",//String
	));
