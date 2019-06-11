function keymap(l) {
 
    if(l.length !== 10){
        console.log(false)
    }
    else {

    for(var i = 0 ; i < 10 ; i++){

if (l[i]==="A" || l[i] === "B" || l[i] === "C" ){
  console.log(2)
}
else if (l[i]==="D" || l[i] === "E" || l[i] === "F") {
  console.log(3)
}
else if (l[i]==="G" || l[i] === "H" || l[i] === "I") {
  console.log(4) 
}
else if (l[i]==="J" || l[i] === "K" || l[i] === "L") {
    console.log(5)
  }