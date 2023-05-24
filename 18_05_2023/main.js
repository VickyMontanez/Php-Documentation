/* POO PROGRAMACIÓN ORIENTADA A OBJETOS */

class Olla {
    lugares
    #merca
    constructor() { }
    set setLugares(a) {
        console.log("entre al set");
        this.lugares = a;
    }
    get getLugares() {
        console.log("entre al get");
        return this.lugares;
    }
}

let obj = new Olla;

obj.setLugares = "Floridablanca";
console.log(obj.getLugares);