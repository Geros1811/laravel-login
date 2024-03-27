function mostrarMasCategorias() {
    const tarjetasOcultas = document.querySelectorAll('.icon-card.oculto');
    tarjetasOcultas.forEach(tarjeta => tarjeta.style.display = 'flex');

    const botonVerMas = document.getElementById('ver-mas');
    botonVerMas.textContent = 'Mostrar menos categorías';

    botonVerMas.onclick = function () {
        tarjetasOcultas.forEach(tarjeta => tarjeta.style.display = 'none');

        botonVerMas.textContent = 'Ver más categorías';

        botonVerMas.onclick = mostrarMasCategorias;
    };
}






// Para el scroll y el nav

window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    var logoAndSearch = document.querySelector(".logo-and-search");

    if (window.scrollY > 50) {
        header.classList.add("header-fixed");
        header.classList.remove("header-show");
        logoAndSearch.style.opacity = "0";
    } else {
        header.classList.remove("header-fixed");
        header.classList.add("header-show");
        logoAndSearch.style.opacity = "1";
    }
});

// Para el acordeon 
document.addEventListener("DOMContentLoaded", function () {
    const acordionItems = document.querySelectorAll(".acordeon-item");

    acordionItems.forEach(function (item) {
        const title = item.querySelector(".acordeon-title");
        const plusIcon = title.querySelector('.plus');
        const minusIcon = title.querySelector('.minus');
        const content = item.querySelector(".acordeon-content");

        title.addEventListener("click", function () {
            const isOpen = item.classList.contains("open");

            // Cerrar todos los elementos antes de abrir el actual
            acordionItems.forEach(function (otherItem) {
                if (otherItem !== item) {
                    otherItem.classList.remove("open");
                    const otherContent = otherItem.querySelector(".acordeon-content");
                    if (otherContent) {
                        otherContent.style.display = "none";
                    }
                }
            });

            if (isOpen) {
                item.classList.remove("open");
                if (content) {
                    content.style.display = "none";
                }
                if (plusIcon && minusIcon) {
                    plusIcon.style.display = "block";
                    minusIcon.style.display = "none";
                }
            } else {
                item.classList.add("open");
                if (content) {
                    content.style.display = "block";
                }
                if (plusIcon && minusIcon) {
                    plusIcon.style.display = "none";
                    minusIcon.style.display = "block";
                }
            }
        });
    });
});
