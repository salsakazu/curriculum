class car {
    constructor(gas, number) {
    this.gas = gas;
    this.number = number;
}

getNumGas() {
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
}

let carinfo = new car(20, 1234);
carinfo.getNumGas();
}
