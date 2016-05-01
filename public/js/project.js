function Aplicacao() {
    this.showDatepicker = function () {
        $('.datepicker, input[name^="data"]').datepicker({
            format: 'dd/mm/yyyy',
            language: 'pt-BR'
        });
    };
    this.defaultMask = function () {
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
    };
}


Aplicacao.prototype.deletar = function () {
  $('.deletar').on('click', function (event) {
      event.preventDefault();
      var href = $(this).attr('href');
      swal({
          title: "Você tem certeza?",
          text: "Ao excluir não poderá recuperar o registro!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Sim, pode deletar!",
          cancelButtonText: "Cancelar",
          closeOnConfirm: false
      }, function () {
          window.location = href;
      });
  });
};

Aplicacao.prototype.getTabs = function () {
    $('.tabs').on('click', function () {
        var $this = $(this);

        if (!$this.attr('data-action'))
            return false;

        $.get($this.attr('data-action'), function (response) {
            $($this.attr('href')).html(response);
        });
    });
};

Aplicacao.prototype.postTabs = function (tabId, formId) {
    $(tabId).on('submit', formId, function (event) {

        event.preventDefault();

        var $this = $(this);

        $.post($this.attr('action'), $this.serialize(), function (response) {
            if (response.status)
                return true;
            else
                swal({
                    title: "As informações não foram salvas",
                    text: 'Algo de errado aconteceu, ' +
                    'por favor tente novamente.\n\nCaso esta mensagem apareça novamente entre em contato com o administrador.',
                    type: "warning"
                });
        });
    });
};

var aplicacao = new Aplicacao();
$(document).ready(function () {
    aplicacao.showDatepicker();
    aplicacao.deletar();
    aplicacao.defaultMask();
});

$(document).ajaxComplete(function () {
    aplicacao.showDatepicker();
    aplicacao.defaultMask();
});
