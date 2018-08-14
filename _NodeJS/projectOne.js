const https = require('https');
const userName = "chalkers";

const printMessage = (userName, badgeCount, points) => {
	
	const message = `${userName} has ${badgeCount} total badges and ${points} points in JS}`;
	
	console.log(message);
}

const req = https.get(`https://teamtreehouse.com/${userName}.json`, (res) => {	

	let body = "";
	
//	console.log('statusCode: ', res.statusCode);
//	console.log('headers: ', res.headers);
	
	res.on('data', (d) => {
//		process.stdout.write(d);
//		console.log(d.toString());
		body += d.toString();
	});
	
	res.on('end', () => {
//		console.log(body);
//		console.log(typeof body);
		
		let jsonProfile = JSON.parse(body);
 		
		printMessage(userName, jsonProfile.badges.length, jsonProfile.points.JavaScript);		
//		console.dir(jsonProfile);
	});
	
}).on('error', (e) => {
	console.error("an error occured " + e);
});


