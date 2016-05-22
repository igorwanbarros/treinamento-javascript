@extends('app')

@section('content')
    <h3>Javascript não Obstrutivo <span title="Seu titulo aqui"></span></h3>
    <div class="col-xs-12 col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Exibir texto na página
                </h3>
            </div>
            <div class="box-body">
                <form method="GET" action="{!! url() !!}" id="form_exibir_texto">
                    <div class="form-group col-sm-6">
                        <label>Seu texto</label>
                        <input class="form-control" name="input" id="texto" placeholder="Informe algum texto aqui">
                    </div>

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-warning fa fa-check-circle-o"> Enviar</button>
                        <button type="reset" class="btn btn-warning fa fa-eraser"> Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">
                    Link's e Formulários Ajax
                </h3>
            </div>
            <div class="box-body">
                <form method="GET" action="{!! url() !!}" id="form_links_forms" data-alguma-informacao="utilize deste artificio para adicionar informações...">
                    <div class="form-group col-sm-6">
                        <label>Seu texto</label>
                        <input name="um-campo" type="hidden" value="valor do campo">
                        <input class="form-control" name="outro-qualquer" id="campo-qualquer" placeholder="Informe algum texto aqui">
                    </div>

                    <div class="form-group col-sm-6">
                        <a href="{!! url('teste') !!}" class="btn btn-link">Link teste 1</a>
                        <a href="{!! url('outro-teste') !!}" class="btn btn-link">Link teste 2</a>
                    </div>

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-warning fa fa-check-circle-o"> Enviar</button>
                        <button type="reset" class="btn btn-warning fa fa-eraser"> Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.btn-link').on('click', function (event) {
                event.preventDefault();

                sweetAlert('Pegando a url do link direto da tag ;).\nVerfique o console');
                console.log($(this).text(), $(this).attr('href'));
            });

            var $span = $('span[title="Seu titulo aqui"]');

            $span.hide();

            $('#form_links_forms').on('submit', function(event) {
                event.preventDefault();

                var $this = $(this);


                sweetAlert('Em uma requisição AJAX, tente buscar o máximo possível de informações ' +
                'no proprio elemento ;)\n Verifique o console');

                console.log('action', $this.attr('action'));
                console.log('method', $this.attr('method'));
                console.log('data', $this.data());
                console.log('serialize', $this.serialize());
            });

            $('#form_exibir_texto').on({
                'submit': function(event) {
                    event.preventDefault();
                    var $this   = $(this),
                        $texto  = $this.find('#texto');

                    if ($texto.val().length == 0)
                        return false;

                    $span.text($texto.val()).css('color', 'orange').fadeIn(1000);

                    $texto.val('');
                    console.log('action', $this.attr('action'));
                    console.log('method', $this.attr('method'));
                },
                'reset': function (event) {
                    event.preventDefault();
                    var $this   = $(this),
                        $texto  = $this.find('#texto');

                    $span.fadeOut(800).val('');
                    $texto.val('');
                    console.log('action', $this.attr('action'));
                    console.log('method', $this.attr('method'));
                }
            });
        });
    </script>
@stop