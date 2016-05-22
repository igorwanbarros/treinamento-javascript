<form action="" method="GET" id="form_tipo_criacao">
    <div class="form-group col-sm-6">
        <label>Notação Literal</label>
        <input class="form-control" name="input" id="literal" placeholder="Informe um nome aqui">
    </div>
    <div class="form-group col-sm-6">
        <label>Função Construtora</label>
        <input class="form-control" name="input" id="construtora" placeholder="Informe um nome aqui">
    </div>

    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-warning fa fa-check-circle-o"> Enviar</button>
        <button type="reset" class="btn btn-warning fa fa-eraser"> Limpar</button>
    </div>
</form>

<script type="text/javascript">
    var Notation = {

            init: function() {
                return 'init:: metodo init';
            },

            param: undefined
        };
    function Construtora(){
        this.param = undefined;

        Construtora.prototype.init = function() {
            var mensagem = 'iniciando funcao init ;)';
            console.log(mensagem);
            return mensagem;
        };
    }

    var notation    = Notation;
    var construtora = new Construtora();

    $('#form_tipo_criacao').on('submit', function (event) {
        event.preventDefault();

        var $this       = $(this),
            text        = '',
            literal     = $this.find('#literal'),
            construct   = $this.find('#construtora');

        if (literal.val() != '') {
            notation.param = literal.val();

            text += '<div class="text-justify">Notation::init: <span style="color: darkorange">' + notation.init() + '</span></div>';
            text += '<div class="text-justify">Notation::param: <span style="color: darkorange">' + notation.param + '</span></div>';
            text += '<br /><br />';
        }
        if (construct.val() != '') {
            construtora.param = construct.val();

            text += '<div class="text-justify">Construtora::init: <span style="color: darkorange">' + construtora.init() + '</span></div>';
            text += '<div class="text-justify">Construtora::param: <span style="color: darkorange">' + construtora.param + '</span></div>';
            text += '<br /><br />';
        }

        swal({
            title: "Resultado",
            text: text,
            html: true
        });
    });

</script>