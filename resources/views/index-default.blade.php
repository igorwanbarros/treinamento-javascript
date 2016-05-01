@extends('app')

@section('content')
    <?php
        use Igorwanbarros\BaseLaravel\Html\Widgets\Box;
        $btn = '<div class="col-lg-12 col-xs-12 col-md-12 text-right">
                    <a href="' . url($url . '/novo') . '" class="btn btn-default btn-sm">
                        <i class="fa fa-plus-circle fa-fw"></i> Novo
                    </a>
                </div>';
        $box = new Box();
        echo $box->setTitle($title)
                ->setTypeBox(Box::BOX_DANGER)
                ->setBody($btn . $table);
    ?>
@stop