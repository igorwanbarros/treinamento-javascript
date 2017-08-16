<form action="{!! url() !!}" method="GET" id="form-escopo-exemplo">
    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Exemplo 1
                </h3>
            </div>
            <div class="box-body">
                <p>Veja o exemplo abaixo e tente imaginar qual será o resultado!</p>

                <code class="col-sm-12">
                    var numero = 1;
                    <br>
                    <br>
                    function escopo() {
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    console.log(numero);
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    var numero = 2;
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    console.log(numero);
                    <br>
                    }
                    <br>
                    <br>
                    escopo();
                    <br>
                    <br>
                    console.log(numero);
                    <br>
                </code>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Exemplo 2
                </h3>
            </div>
            <div class="box-body">
                <p>Qual será o resultado do console?</p>
                <code class="col-sm-12">
                    function externa() {
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    function interna() {
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    return 3
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    }
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    return interna()
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    function interna() {
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    return 5
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    }
                    <br>
                    }
                    <br>
                    <br>
                    console.log(externa());
                </code>
            </div>
        </div>
    </div>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="box box-warning">
            <div class="box-body">
                <div class="form-group col-sm-12">
                    <input type="text"
                           class="form-control"
                           name="resultado"
                           id="resultado"
                           placeholder="Informe qual o resultado final do script">
                </div>

                <div class="form-group col-sm-12">
                    <button type="submit" id="submit" class="btn btn-warning fa fa-thumbs-o-up disabled"> Executar Script
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</form>

<script type="text/javascript">
    var atalho = false,
        submitFormExemploUm = function ($this) {
            var resultado = $this.find('#resultado');

            if (resultado.val() != '')
                console.log('será que você realmente acertou?', ';)');

            console.log('valor informado da variavel numero', resultado.val());
            console.log('\n\n\n');
            resultado.val('');
            $this.find('#submit').toggleClass('disabled');
        },
        submitFormExemploDois = function ($this) {
            var resultado = $this.find('#resultado');

            if (resultado.val() !== '')
                console.log('será que você realmente acertou?', ';)');

            console.log('valor informado da função externa', resultado.val());
            console.log('\n\n\n');
            resultado.val('');
            $this.find('#submit').toggleClass('disabled');
        },
        scriptExemploUm = function () {


            var numero      = 1,
                resultado   = 'undefined';

            function escopo() {
                console.log('antes da declaração(dentro da function):', numero);
                var numero = 2;
                console.log('apos a declaração(dentro da function):', numero);
                resultado += ',' + numero;
            }

            escopo();
            console.log('apos a chamada da função:', numero);
            resultado += ',' + numero;

            console.log('resposta:', resultado);





            $('#submit').toggleClass('disabled');
            console.log('\n\n\n');
        },
        scriptExemploDois = function () {



            function externa() {
                function interna() {
                    return 3;
                }

                return interna();

                function interna() {
                    return 5;
                }
            }

            console.log('resposta:', externa());



            $('#submit').toggleClass('disabled');
            console.log('\n\n\n');
        };


    $(document).ready(function () {

        $(this).on('keypress', function (event) {
            atalho = event.which;

            if (atalho == 185)
                submitFormExemploUm($(this));

            if (atalho == 178)
                submitFormExemploDois($(this));
        });


        $('#form-escopo-exemplo').on('submit', function (event) {
            event.preventDefault();
            var submit = $('#submit');

            if (!submit.hasClass('disabled') && atalho == 185) {
                scriptExemploUm();
                return true;
            }

            if (!submit.hasClass('disabled') && atalho == 178) {
                scriptExemploDois();
                return true;
            }

            if (atalho == 185) {
                submitFormExemploUm($(this));
                return true;
            }

            if (atalho == 178) {
                submitFormExemploDois($(this));
                return true;
            }
        });

    });


    var a = 1;
    console.log(a); //=> 1

    if (true) {
        var a = 2;
        console.log(a); //=> 2
    }

    console.log(a); //=> 2






</script>