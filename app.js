// Problem : Sometimes, developpement push modified robots.txt and Google gets blocked by disallow in robots.txt files.
// Solution : Checking each morning for good robots.txt settings of numerous websites, with node js.

// test

// 1. Creating a web sever
const http = require('http');

const port =  process.en.PORT || 1337 ;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World\n');
});

/*

// Declaring variables
var siteUrl = "http://www.loicjulien.fr/"

// Getting robots.txt
// console.log(">> Getting robots.txt");
var request = http.get(siteUrl + "robots.txt", function(response) {

	var robotsTxtContent = "Robots.txt : \n" ;
	var robotsTxtData = "";

	// Checking status code
	// console.log(response.statusCode);

	// Read the data
	// console.log(">> Reading robots.txt");
	
	response.on("data", function (chunck) {
		robotsTxtContent  = robotsTxtContent + chunck;
	});

	response.on("end", function () {
		// console.log(robotsTxtContent);
	});

	// Checking if robots.txt is Google friendly
	var robotsTxtGoogleFriendly = robotsTxtContent.includes("Disallow: /");
	console.log(robotsTxtGoogleFriendly);

});

request.on("error", function(error) {
	console.error(error.message);
});

/*

User-agent: *
Disallow: /

*/