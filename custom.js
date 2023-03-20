const loginForm = document.getElementById("login-usuario")
const msgAlertErroLogin = document.getElementById("msgAlertErroLogin")

loginForm.addEventListener("submit", async (e) => {
    e.preventDefault()

    /*if (document.getElementById("cpf").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='msgAlertErroLogin'>Erro: Necessário preencher o campo usuário!</div>"
    } else if (document.getElementById("senha").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='msgAlertErroLogin'>Erro: Necessário preencher o campo senha!</div>"
    } else {*/
    const dadosForm = new FormData(loginForm)

    const dados = await fetch("validar.php", {
        method: "POST",
        body: dadosForm
    })

    const resposta = await dados.json()

    console.log(resposta)



    //}
})
