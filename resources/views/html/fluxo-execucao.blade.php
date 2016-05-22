@extends('app')

@section('content')
    <h3>FLUXO DE EXECUÇÃO</h3>

    <div class="col-sm-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Fluxos Assíncronos</h3>
            </div>
            <div class="box-body">
                <div class="col-sm-6">
                    <p><i class="fa fa-thumbs-o-up text-orange"></i> Exemplo utilizando <code>setTimeout</code></p>
                    <code class="col-sm-12 dblclick">
                        var timeoutId = window.setTimeout(umaRequisicaoAjax, 2000);
                        <br>
                        <br>
                        function umaRequisicaoAjax() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log('Aqui pode ser qualquer coisa, por exemplo uma requisição Ajax ;)');
                        <br>
                        }
                    </code>
                </div>

                <div class="col-sm-6">
                    <p>
                        <i class="fa fa-thumbs-o-up text-orange"></i>
                        Exemplo utilizando
                        <code>setInterval</code>
                        <span id="countDown" class="text-success bg-success">00:00:00</span>
                    </p>

                    <code class="col-sm-12 dblclick">
                        var intervalId = window.setInterval(countDown, 1000);
                        <br>
                        <br>
                        function countDown() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        var date = new Date();
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        var time = date.toLocaleTimeString();
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        $("#countDown").text(time);
                        <br>
                        }
                    </code>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Callback</h3>
            </div>
            <div class="box-body">
                <div class="col-sm-12">
                    <a href="{!!url('link')!!}" class="btn-link col-sm-4">Link</a>
                    <a href="{!!url('outro-link')!!}" class="btn-link col-sm-4">Outro Link</a>
                    <a href="{!!url('mais-um-link')!!}" class="btn-link col-sm-4">Mais um Link</a>
                    <br>&nbsp;
                    <br>&nbsp;
                    <code class="col-sm-12 dblclick">
                        var <span title="callback" class="text-info">callbackClick</span> = function(event) {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        event.preventDefault();
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        var $this = $(this);
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        $this.attr('title', 'Link alterado pela callback');
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        console.log('link', $this.attr('href'));
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        };
                        <br>
                        <br>
                        var <span title="callback" class="text-yellow">callbackReady</span> = function() {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        $('.btn-link').on('click', <span class="text-info">callbackClick</span>);
                        <br>
                        };
                        <br>
                        <br>
                        $(document).ready(<span class="text-yellow">callbackReady</span>);
                    </code>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Closures</h3>
            </div>
            <div class="box-body">
                <div class="col-sm-12">
                    <code class="col-sm-12 dblclick">
                        function nomeENumero(nome, numero) {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return (<span class="text-info">function () {
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        var mensagem = 'Meu nome é ' + nome + '\nMeu número é: ' + numero;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        return mensagem;
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        }</span>)();
                        <br>
                        }
                        <br>
                        <br>
                        nomeENumero('Meu Nome', 'meu numero');
                    </code>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

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
@stop
