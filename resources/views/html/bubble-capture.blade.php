@extends('app')
@section('content')
    <style>
        .bubbling, .capture {
            color: #ffffff;
            margin-left: 2em;
            cursor: pointer;
        }

        .bubbling > span, .capture > span {
            text-align: center;
            transform: rotate(90deg);
            transform-origin: left bottom 50px;
            display: block;
            font-weight: bolder;
        }
    </style>

    <div id="efect-bubbling" class="col-xs-6">
        <h1>Bubbling</h1>

        <div class="bubbling um" id="um" style="background: darkblue;width: 16em;height: 16em;">
            <span>Bloco 1</span>

            <div class="bubbling dois" id="dois" style="background: darkcyan;width: 12em;height: 12em;">
                <span>Bloco 2</span>

                <div class="bubbling tres" id="tres" style="background: deepskyblue;width: 8em;height: 8em;">
                    <span>Bloco 3</span>
                </div>
            </div>
        </div>
    </div>

    <div id="efect-capture" class="col-xs-6">
        <h1>Capture</h1>

        <div class="capture um" id="um" style="background: brown;width: 16em;height: 16em;">
            <span>Bloco 1</span>

            <div class="capture dois" id="dois" style="background: coral;width: 12em;height: 12em;">
                <span>Bloco 2</span>

                <div class="capture tres" id="tres" style="background: lightcoral;width: 8em;height: 8em;">
                    <span>Bloco 3</span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
<script type="text/javascript">

    //exemplo de bubbling
    var bubbles = document.getElementsByClassName('bubbling');

    for (var countBubbles = 0; countBubbles < bubbles.length; countBubbles++) {
        bubbles[countBubbles].addEventListener('click', function (event) {
            console.log('class %s clicado', $(this).attr('class'));
        });
    }

    //exemplo de capture
    var capture = document.getElementsByClassName('capture');

    for (var countCaptures = 0; countCaptures < capture.length; countCaptures++) {
        capture[countCaptures].addEventListener('click', function (event) {
            console.log('class %s clicado', $(this).attr('class'));
        }, true);
    }

</script>
@stop
