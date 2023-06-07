/* UTILIZAR JAVASCRIPT PARA ENVIAR DATA A PHP */
let myForm = document.querySelector("#elForm");

myForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config = { method: "POST", headers: { "Content-Type": "application/json" }, body: JSON.stringify(data) }
    let res = await (await fetch("./api.php", config)).text();
    document.querySelector("pre").innerHTML = res;
    myForm.reset();
})

