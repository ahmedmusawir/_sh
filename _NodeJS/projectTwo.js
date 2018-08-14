const https = require('https');

const printMessage = (userName, badgeCount, points) => {
	
	const message = `${userName} has ${badgeCount} total badges and ${points} points in JS}`;
	
	console.log(message);
}

const getProfile = (userName) => {

	const req = https.get(`https://teamtreehouse.com/${userName}.json`, (res) => {	

		let body = "";
		
		res.on('data', (d) => {
			body += d.toString();
		});
		
		res.on('end', () => {

			let jsonProfile = JSON.parse(body);
	 		
			printMessage(userName, jsonProfile.badges.length, jsonProfile.points.JavaScript);	

		});
		
	}).on('error', (e) => {
		console.error("an error occured " + e);
	});
}

const users = ['chalkers','mike','john','dan'];

users.forEach(userName => {
	getProfile(userName);
});


users.forEach(getProfile);

