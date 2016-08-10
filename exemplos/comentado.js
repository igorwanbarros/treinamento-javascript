/**
 * Criando um objeto em javascript
 */
function NfePagamento() {
    //TODO: criar metodo "protegido"

    /**
     * Adicionando um metodo ao nosso objeto
     * Podemos adicionar tambem utilizando o __prototype__ eg.: NfePagamento.prototype.nomeDoMetodo
     */
    this.converterFloat = function (value) {
        return parseFloat(value !== '' ? value.replace('.', '').replace(',', '.') : 0.0);
    };
}


/**
 * Exemplo de:
 *      método estatico
 *      callback/closure
 *      escopo
 */
NfePagamento.calculoDuplicatas = function (response, modal) {
    /**
     * Procurar instanciar as variaveis uma unica vez no código;
     * Sempre que possivel utilizar apenas uma instrucao var
     */
    var self            = this,/** ATENÇÃO: cuidado ao utilizar o this, pode não referenciar o que você deseja **/
        $valorOriginal  = $(modal.modalId + ' input[name="cobranca_valor_original"]'),//utilizado o atributo nome para evitar duplicidade do id
        $valorDesconto  = $(modal.modalId + ' input[name="cobranca_valor_desconto"]'),
        $valorLiquido   = $(modal.modalId + ' input[name="cobranca_valor_liquido"]'),
        /**
         * Funcao atribuida a uma variavel, exemplo de hoist
         */
        calcular        = function (event) {
            event.preventDefault();

            var valorOriginal   = self.converterFloat($valorOriginal.val()),
                valorDesconto   = self.converterFloat($valorDesconto.val());

            $valorLiquido.val(valorOriginal - valorDesconto);
            console.log('os campos foram calculados!');
        };

    /**
     * Utilizacao de um recurso bastante util, passando a funcao como literal
     * *** muito cuidade quando utilizar este recurso, pois caso nao tenha adicionado o ';'
     *     em uma instrução pode causar erro.
     */
    $valorOriginal.on('change', calcular);
    $valorDesconto.on('change', calcular);

    console.log('calculando duplicatas...');
};
