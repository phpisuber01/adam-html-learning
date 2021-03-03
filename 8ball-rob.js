(function() {
	eightball=[
		'It is certain',
		'It is decidedly so',
		'Reply hazy, try again',
		'Cannot predict now',
		'Dont count on it',
		'My sources say no',
		'Outlook not so good',
		'Signs point to yes'
	];

	console.log(eightball[Math.floor(Math.random()*8)]);
})();