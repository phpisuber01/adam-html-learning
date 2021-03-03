et raceNumber = Math.floor(Math.random() * 1000);
let regEarly=false;
let runAge=17;
if (regEarly && 18 < runAge){
raceNumber += 1000;
} 
if (regEarly && 18 < runAge){
  console.log(`You will race at 9\:30 am. Your race number is ${raceNumber}.`);
} else if(!regEarly && 18 < runAge) {
  console.log(`You will race at 11\:00 am. Your race number is ${raceNumber}.`);
}
if (18 > runAge){
  console.log(`You will race at 12\:30 pm. Your race number is ${raceNumber}.`)
} else if (runAge === 18) {
  console.log('Please see registration')
}