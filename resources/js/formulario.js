const btnSingIn = document.getElementById("sing-in"), btnSingUp = document.getElementById("sing-up"),
    formLogin = document.querySelector(".login"), formRestrar = document.querySelector(".registrar");

btnSingIn.addEventListener('click', e => {
    formLogin.classList.add("hide");
    formRestrar.classList.remove("hide");
})

btnSingUp.addEventListener('click', e => {
    formRestrar.classList.add("hide");
    formLogin.classList.remove("hide");   
})


// Alerta

if (formRestrar.classList.contains("hide")) {
    Swal.fire({
        icon: 'info',
        title: 'En la seccion de "Crear cuenta" habran más preguntas',
        width: 600,
        padding: '3em',
        color: '#716add',
    });

}

