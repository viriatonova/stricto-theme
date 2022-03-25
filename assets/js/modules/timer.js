export function timer () {
    const time = new Date();
    const options = {
        weekday:'long',
        day:'numeric',
        month:'long',
        year:'numeric'

    };

    const timeStricto = time.toLocaleDateString('pt-BR', options);
    const lDate = document.querySelector('#lDate');
    
    function criaP(text) {
        const p = document.createElement('p');
        p.innerHTML = text;
        return p
    }

    lDate.appendChild(criaP(timeStricto));
}
