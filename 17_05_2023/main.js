let buton = document.querySelector("#btn");

/* Consumir el json de PHP */
buton.addEventListener("click", async (e) => {
    console.log(await (await fetch("http://localhost/SpUkM01-075/php/api.php")).json());
})
