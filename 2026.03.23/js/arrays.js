let num = [10, 20, 30, 40, 50];

console.log("First Index Value", num[0]);
console.log("Second Index Value", num[1]);
console.log("Third Index Value", num[2]);
console.log("Fourth Index Value", num[3]);

console.log("############################# for loop ###################################")
for (let i = 0; i < num.length; i++) {
    console.log(num[i]);
}

console.log("############################# While loop ###################################")
let i = 0;

while (i < num.length) {
    console.log(num[i]);
    i++;
}

