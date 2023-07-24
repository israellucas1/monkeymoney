const formulario = document.querySelector("#form-cadastro");

formulario.addEventListener("submit", async event => {
    event.preventDefault();

    const formData = new FormData(formulario);
    const searchParams = new URLSearchParams();

    for(const par of formData){
        searchParams.append(par[0],par[1],par[2],par[3],par[4]);
    }

    fetch('config/config.php',{
        method:'POST',
        body: formData
    }).then(function(response){
        return window.location.href = 'sucesso.html'
    }).catch(function(error){
        console.log(error);
        alert('Erro ao enviar o cadastro, tente novamente')
    });

})