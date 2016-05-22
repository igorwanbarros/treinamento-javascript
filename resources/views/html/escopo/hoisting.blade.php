<form action="{!! url() !!}" method="GET" id="form-hoisting">
    <div class="col-sm-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Funções
                </h3>
            </div>
            <div class="box-body">
                <div class="col-sm-6">
                    <p><i class="fa fa-thumbs-o-up text-orange"></i> Exemplo de Hoisting de função</p>
                    <code class="col-sm-12 dblclick">
                        externa();
                        <br>
                        <br>
                        function externa() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        function interna() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return 3;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        }
                        <br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return interna();
                        <br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        function interna() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return 5;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        }
                        <br>
                        }
                        <br>
                    </code>
                </div>
                <div class="col-sm-6">
                    <p><i class="fa fa-thumbs-o-down text-danger"></i> Exemplo de Hoisting de função (passando para
                        variável)</p>
                    <code class="col-sm-12 dblclick">
                        externa();
                        <br>
                        <br>
                        var externa = function () {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        function interna() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return 3;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        }
                        <br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return interna();
                        <br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        function interna() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return 5;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        }
                        <br>
                        }
                    </code>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Variáveis
                </h3>
            </div>
            <div class="box-body">
                <div class="col-sm-12">
                    <p><i class="fa fa-thumbs-o-down text-danger"></i> Exemplo de Hoisting de variável (não informado)
                    </p>
                    <code class="col-sm-12 dblclick">
                        try{
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log('numero: ', numero);
                        <br>
                        } catch(e) {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.error('error pois a variavel \'numero\' nao exite');
                        <br>
                        }
                        <br>
                        &nbsp;
                    </code>
                    <br>&nbsp;
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-12">
                    <p><i class="fa fa-thumbs-o-up text-orange"></i> Exemplo de Hoisting de variável</p>
                    <code class="col-sm-12 dblclick">
                        try{
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log('hoist da variavel numero sem valor: ', numero);
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        var numero = 52;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log('variavel numero com seu valor: ', numero);
                        <br>
                        } catch(e) {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.error('variavel nao foi definida');
                        <br>
                        }
                    </code>
                    <br>&nbsp;
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Instanciação usando uma IIFE (Imediately Invoked Function Expression)
                </h3>
            </div>
            <div class="box-body">
                <div class="col-sm-12">
                    <p><i class="fa fa-thumbs-o-up text-orange"></i> Exemplo de uma IIFE (executa a function
                        imediatamente)</p>
                    <code class="col-sm-12 dblclick">
                        (function(){
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        // corpo da função
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log("Exemplo de uma IIFE (Expressão de Função Invocada Imediatamente)");
                        <br>
                        })();
                    </code>
                    <br>&nbsp;
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-12">
                    <p><i class="fa fa-thumbs-o-up text-orange"></i> Outro exemplo de uma IIFE (armazenando em uma
                        variavel)</p>
                    <code class="col-sm-12 dblclick">
                        var minhaFuncao = (function(nome){
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        // corpo da função
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log("Treinamento realizado por: ", nome);
                        <br>
                        }("Meu nome"));
                        <br>
                    </code>
                    <br>&nbsp;
                    <br>&nbsp;
                    <br>&nbsp;
                    <br>&nbsp;
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('.dblclick').css('cursor', 'pointer');
        $('code.dblclick').on('dblclick', function () {
            sweetAlert('Verifique no console se o script foi executado corretamente ;)');
            var funcao = $(this).text();

            console.log(eval(funcao));
            console.log('\n\n');
        });
    });
</script>