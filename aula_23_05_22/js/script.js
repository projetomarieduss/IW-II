var botao = document.getElementById('botao')
var lampa = document.getElementById('lampada')
var fundo = document.getElementById('container')

//console.log(botao)

botao.onclick = function() {
    //alert('Clicado')
    if (botao.value == 'Acender') {
        lampa.src = './img/acesa.png'
        botao.value = 'Apagar'
        botao.innerHTML = 'Apagar'
        fundo.style.backgroundColor = 'white'
    }else {
        lampa.src = './img/apagada.png'
        botao.value = 'Acender'
        botao.innerHTML = 'Acender'
        fundo.style.backgroundColor = 'black'
        
    }
}