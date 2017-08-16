//Efeito bolha (bubbling|capture)

//HTML
//<style>
//    .bubbling {
//        color:#ffffff;
//        margin-left: 2em;
//        cursor: pointer;
//    }
//    .bubbling > span {
//        text-align: center;
//        transform: rotate(90deg);
//        transform-origin: left bottom 50px;
//        display: block;
//        font-weight: bolder;
//    }
//</style>
//<div class="bubbling um" id="um" style="background: fuchsia;width: 16em;height: 16em;">
//    <span>Bloco 1</span>
//    <div class="bubbling dois" id="dois" style="background: orchid;width: 12em;height: 12em;">
//        <span>Bloco 2</span>
//        <div class="bubbling tres" id="tres" style="background: lightpink;width: 8em;height: 8em;">
//            <span>Bloco 3</span>
//        </div>
//    </div>
//</div>

//exemplo de bubbling
var bubbles = document.getElementsByClassName('bubbling');

for (var i = 0; i < bubbles.length; i++) {
    bubbles[i].addEventListener('click', function (event) {
        console.log('class %s clicado', $(this).attr('class'));
    });
}

//exemplo de capture
var bubbles = document.getElementsByClassName('bubbling');

for (var i = 0; i < bubbles.length; i++) {
    bubbles[i].addEventListener('click', function (event) {
        console.log('class %s clicado', $(this).attr('class'));
    }, true);
}

//exemplo em js puro
document.getElementById('tres').addEventListener('click', function (event) {
    console.log('#tres clicado');
});

document.getElementById('um').addEventListener('click', function (event) {
    console.log('#um clicado', '\n');
});

document.getElementById('dois').addEventListener('click', function (event) {
    console.log('#dois clicado');
});


//Objeto literal
var objetoLiteral = {};


//Objeto literal com propriedade
var objetoLiteral = {
    propriedade1: 'valor da propriedade 1',
    propriedade2: 'valor da propriedade 2'
    //...
};


//Objeto com construtor

var objetoConstrutor = function () {

    var self = this,
        propriedadeProtegida = 'valor protegido',
        _metodoProtegido = function (valor) {
            return valor * valor * valor;
        };

    this.umaPropriedade = 'valor da propriedade';

    this.masiUmMetodo = function (valor) {
        return valor * valor;
    }

};


//Objeto literal com metodo
var objetoLiteral = {
    //...
    fibonacci: function (num) {
        if (num < 2) {
            return num;
        }

        return this.fibonacci(num - 1) + this.fibonacci(num - 2);
    }
};


//Adicionando metodo ao prototype - NAO RECOMENDADO
String.prototype.trim = function () {
    var val = this;

    val = val.replace(/^[s|xA0]+/, '');
    val = val.replace(/[s|xA0]+$/, '');

    return val;
};


// Instanciar o objeto string com um valor cheio de espaços
var frase = new String('            Ol!               ');


// Alerta a string passando pelo método trim()
alert(frase.trim());


//Exemplo de retorno com uma função literal
function VinculoFiscal() {
    //...

    this.getValor = function (seletor) {
        return function () {
            var valor = $('#' + seletor).val();

            return valor == undefined || valor == '' ? '' : valor;
        }
    };

    //...
}


//Exemplo de variavel GLOBAL com erro
function teste() {
    var oi = 'Oi mundo!';

    console.log(oi);
}

teste();

// Erro: oi is not defined
console.log(oi);


//Exemplo de variavel GLOBAL com erro
function teste() {
    oi = 'Oi mundo!';

    console.log(oi);
}

//erro
console.log(oi);


//Exemplo de variavel GLOBAL sem erro
var oi = 'Oi mundo!';

function teste() {
    console.log(oi);
}

teste();

console.log(oi);