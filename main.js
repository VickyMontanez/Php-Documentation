let buton = document.querySelector("#btn");

/* Consumir el json de PHP */
buton.addEventListener("click", async (e)=>{
    console.log(await(await fetch("http://localhost/SpUkM01-075/php/api.php")).json());
})

/* POO PROGRAMACIÓN ORIENTADA A OBJETOS */

class Olla{
    lugares
    #merca
    constructor(){}
    set setLugares(a){
        console.log("entre al set");
        this.lugares = a;
    }
    get getLugares(){
        console.log("entre al get");
        return this.lugares;
    }
}

let obj = new Olla;

obj.setLugares = "Floridablanca";
console.log(obj.getLugares);

/* UTILIZAR JAVASCRIPT PARA ENVIAR DATA A PHP */
let myForm = document.querySelector("#elForm");

myForm.addEventListener("submit", async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config = {method:"POST", headers:{"Content-Type":"application/json"}, body:JSON.stringify(data)}
    let res = await(await fetch("./api3.php", config)).text();
    document.querySelector("pre").innerHTML= res;
    myForm.reset();
})