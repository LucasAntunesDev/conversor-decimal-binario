const btn = document.querySelector('#btn')
let ano = document.querySelector('#ano')
ano.innerHTML = new Date().getFullYear()

function converter(num) {
    let resultado = '';
    let numero = num;

    while (numero > 1) {
        let resto = numero % 2;
        numero = (numero - resto) / 2;
        resultado = resto === 0 ?  '0' + resultado : '1' + resultado
    }

    resultado = numero + resultado;
    return resultado.match(/.{1,4}/g).join(' ');
}


btn.addEventListener('click', (e) => {
    const numero = document.querySelector('#numero')
    const resultado = document.querySelector('#resultado')
    e.preventDefault()

    resultado.innerHTML = numero.value !== '' ? converter(parseInt(numero.value)) : ''
})

