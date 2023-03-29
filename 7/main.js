let numbers = [2, 5, 12, 13, 15, 18, 22];

for (let i = 0; i < 22; i++){
    isEven(numbers[i]);
}

function isEven(numbers) {
    if (numbers % 2 === 0 ){
    console.log( numbers + 'は偶数です');
}
}



class Car {
    constructor(gas, number) {
    this.gas = gas;
    this.number = number;
}

    getNumGas(){
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
}
}

let carinfo = new Car(20, 1234);
carinfo.getNumGas();    
