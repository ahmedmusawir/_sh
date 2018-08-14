const http = require('http');

//https.get('https://www.reddit.com/r/science.json', (res) => {
http.get('http://localhost:3004/posts', (res) => {	
//	console.log('statusCode: ', res.statusCode);
//	console.log('headers: ', res.headers);
	
	res.on('data', (d) => {
		process.stdout.write(d);
	});
	
}).on('error', (e) => {
	console.error("an error occured " + e);
});
