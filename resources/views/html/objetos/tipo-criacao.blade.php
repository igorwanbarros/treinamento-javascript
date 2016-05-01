<form action="" method="GET" id="form_tipo_criacao">
    <div class="form-group col-sm-6">
        <label>Notação Literal</label>
        <input class="form-control" name="input" id="publico" placeholder="Informe um nome aqui">
    </div>
    <div class="form-group col-sm-6">
        <label>Função Construtora</label>
        <input class="form-control" name="input" id="protegido" placeholder="Informe um nome aqui">
    </div>

    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-warning fa fa-check-circle-o"> Enviar</button>
        <button type="reset" class="btn btn-warning fa fa-eraser"> Limpar</button>
    </div>
</form>

<script type="text/javascript">
    var Notation = (function (nome) {
        this.nome = nome;
        this.sobrenome;

        this.getNome = function() {
            return this.nome;
        };

        this.setNome = function (nome) {
            this.nome = nome;
        };
    });
    Notation.prototype.setSobrenome = function(sobrenome) {
        this.sobrenome = sobrenome;
    };
    Notation.prototype.getSobrenome = function() {
        return this.sobrenome;
    };

    $('#form_tipo_criacao').on('submit', function (event) {
        event.preventDefault();

        var $this = $(this),
            text  = '';

        text += '<div class="text-justify">: <span style="color: darkorange"></span></div>';

        swal({
            title: "Resultado",
            text: text,
            html: true
        });
    });

</script>