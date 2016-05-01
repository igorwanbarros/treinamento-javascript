<form action="" method="GET" id="form_protegido_publico">
    <div class="form-group col-sm-6">
        <label>Atributo Público</label>
        <input class="form-control" name="input" id="publico" placeholder="Informe algum texto aqui">
    </div>
    <div class="form-group col-sm-6">
        <label>Atributo Protegido</label>
        <input class="form-control" name="input" id="protegido" placeholder="Informe algum texto aqui">
    </div>

    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-warning fa fa-check-circle-o"> Enviar</button>
        <button type="reset" class="btn btn-warning fa fa-eraser"> Limpar</button>
    </div>
</form>

<script type="text/javascript">
    var AtributoProtegido = (function () {
        var meuAtributoProtegido = 'VALOR DO MEU ATRIBUTO PROTEGIDO';

        this.atributoPublico     = 'VALOR DO MEU ATRIBUTO PUBLICO';

        this.getMeuAtributoProtegido = function () {
            return meuAtributoProtegido;
        };

        this.setMeuAtributoProtegido = function (value) {
            if (value.length > 0)
                meuAtributoProtegido = value;
        };

        this.getMeuAtributoPublico = function () {
            return this.atributoPublico;
        };

        this.setMeuAtributoPublico = function (value) {
            if (value.length > 0)
                this.atributoPublico = value;
        };
    });


    var objeto = new AtributoProtegido();

    $('#form_protegido_publico').on('submit', function (event) {
        event.preventDefault();

        var $this = $(this),
            text  = '';

        objeto.setMeuAtributoPublico($this.find('#publico').val());
        objeto.setMeuAtributoProtegido($this.find('#protegido').val());

        text += '<div class="text-justify">Atributo Público: <span style="color: darkorange">' + objeto.getMeuAtributoPublico() + '</span></div>';
        text += '<div class="text-justify">Atributo Protegido: <span style="color: darkorange">' + objeto.getMeuAtributoProtegido() + '</span></div>';

        swal({
            title: "Resultado",
            text: text,
            html: true
        });
    });

</script>