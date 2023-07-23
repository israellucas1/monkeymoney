const formulario = document.querySelector("#form-cadastro");

formulario.addEventListener("submit", async event => {
    event.preventDefault();

    const formData = new FormData(formulario);

    const data = await fetch()
    console.log(formData)

})