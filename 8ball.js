//What the user wants to ask the 8-ball
let userName='Adam'
userName=true?console.log(`Hello, ${userName}!`):console.log('Hello!')
let userQuestion='Will I win?'
console.log(`The user asked "${userQuestion}"`)
let randomNumber=Math.floor(Math.random()*8);
let eightBall=randomNumber
switch(eightBall){
  case 0:
  eightBall='It is certain';
  break;
  case 1:
  eightball='It is decidedly so';
  break;
  case 2:
  eightBall='Replay hazy try again';
  break;
  case 3:
  eightBall='Cannot predict now';
  break;
  case 4:
  eightBall='Do not count on it';
  break;
  case 5:
  eightBall='My sources say no';
  break;
  case 6:
  eightBall='Outlook not so good';
  break;
  case 7:
  eightBall='Signs point to yes';
  break;
}
console.log(eightBall)
