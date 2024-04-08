
// PAra el las letras aleatoreas

const words = ['Videos', 'Practicas', 'Evaluaciones', 'Documentacion'];
let wordIndex = 0;
const changingTexts = document.querySelectorAll('.changing-text');

function changeWord() {
    console.log('Cambiando la palabra...');
    changingTexts.forEach(changingText => {
        changingText.textContent = words[wordIndex];
    });
    wordIndex = (wordIndex + 1) % words.length;
}



console.log('Iniciando setInterval...');
setInterval(changeWord, 3000);
