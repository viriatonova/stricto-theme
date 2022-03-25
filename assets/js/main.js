import {timer} from './modules/timer.js';

/**
 * Função principal para botões e funcionalidas do site
 * 
 */
function main() {

    // toggles buttons
    const btnSide = document.querySelector("#btn-side");
    const sidebar = document.querySelector("#sidebar");
    const btnClose = document.querySelector('#btn-close');
    const caixaBusca = document.querySelector("#search-box");
    const btnBusca = document.querySelector("#btn-search");


    btnSide.addEventListener('click', () => {
        sidebar.classList.toggle("hidden");
    });

    btnClose.addEventListener('click', () => {
        sidebar.classList.toggle("hidden");
    });

    btnBusca.addEventListener('click', () => {
        caixaBusca.classList.toggle("hidden");
    });

}


/*----------------------------------------------------------------------------------- */
main();
timer();
