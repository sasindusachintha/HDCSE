let numbers= [10, 20, 30]

function addNumber(num){
    numbers.push(num);
}

function showNumbers(){
    numbers.forEach(function(n){
        console.log(n);
    });
}

addNumber(40) ;
showNumbers();

//arrow function
const greet = () =>{
    console.log("good morning");
}

greet();