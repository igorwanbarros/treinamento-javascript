<?php $currentRoute = Route::getCurrentRoute()->getParameter('viewName');?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Igor Wanderley">
        <meta name="description" content="">

        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/base.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/skins/_all-skins.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/estilo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('plugins/sweetalert/sweetalert.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('plugins/toastr/toastr.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('plugins/datepicker/datepicker3.css')}}">

        <!--<link rel="stylesheet" type="text/css" href="{{URL::to('plugincss/estilo.css')}}">-->
        <script src="{{URL::to('js/jQuery-2.1.4.min.js')}}"></script>
        <script src="{{URL::to('js/jquery-ui.min.js')}}"></script>
        <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('js/app.min.js')}}"></script>
        <script src="{{URL::to('plugins/sweetalert/sweetalert.min.js')}}"></script>
        <script src="{{URL::to('plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{URL::to('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        <script src="{{URL::to('plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js')}}"></script>
        <script src="{{URL::to('js/project.js')}}"></script>

        <!--<script src="{{URL::to('plugins/ckeditor/ckeditor.js')}}"></script>-->


        <title>:: {!! env('APP_NAME','Sistema') !!} ::</title>

        <style>
            .datepicker {
                z-index: 9999 !important;
                border-radius: 0;
            }

            .nav-tabs-custom > .nav-tabs > li.active {
                border-top-color: #f39c12;
            }
            .help-block {
                margin-top: 0;
                margin-bottom: 0;
            }
            .form-control:focus {
                border-color: #f39c12;
            }
        </style>
    </head>
    <body class="hold-transition skin-yellow sidebar-mini sidebar-collapse">

        <div class="wrapper">
            <header class="main-header">
                <a href="{{ URL::to('/') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini" title="{!! env('APP_NAME') !!}">{!! env('APP_NAME_MIN', 'Sis') !!}</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>{!! env('APP_NAME', 'Sistema') !!}</b></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="user user-menu">
                                <a href="{{ URL::to('auth/logout/') }}">
                                    <i class="fa fa-sign-out fa-fw"></i>Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--fim do custom-nav-bar-->
                </nav>
                <!--fim do nav-->
                
            </header>
            <!--fim do header-->

            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel"></div>
                    <!--fim do user-painel-->

                    <ul class="sidebar-menu">
                        <li class="{{ Route::getCurrentRoute()->getPath() == '/' ? 'active' : '' }}">
                            <a href="{{URL::to('/')}}">
                                <i class="fa fa-home fa-fw"></i> <span>INÍCIO</span>
                            </a>
                        </li>
                        <li class="{{ strstr($currentRoute, 'obstrutivos') ? 'active' : '' }}">
                            <a href="{{url('/obstrutivos')}}">
                                <i class="fa fa-eye-slash"></i> <span>OBSTRUTIVO</span>
                            </a>
                        </li>
                        <li class="{{ strstr($currentRoute, 'escopo') ? 'active' : '' }}">
                            <a href="{{url('/escopo')}}">
                                <i class="fa fa-dot-circle-o"></i> <span>ESCOPO</span>
                            </a>
                        </li>
                        <li class="{{ strstr($currentRoute, 'fluxo-execucao') ? 'active' : '' }}">
                            <a href="{{url('/fluxo-execucao')}}">
                                <i class="fa fa-gears"></i> <span>FLUXO DE EXECUÇÃO</span>
                            </a>
                        </li>
                        <li class="{{ strstr($currentRoute, 'objetos-javascript') ? 'active' : '' }}">
                            <a href="{{url('/objetos-javascript')}}">
                                <i class="fa fa-object-group"></i> <span>OBJETOS</span>
                            </a>
                        </li>
                        <li class="{{ strstr($currentRoute, 'referencias') ? 'active' : '' }}">
                            <a href="{{url('/referencias')}}">
                                <i class="fa fa-list-ul"></i> <span>REFERÊNCIAS</span>
                            </a>
                        </li>
                    </ul>
                    <!--fim da sidebar-menu - lista do menu inicial-->

                </section>
                <!--fim do menu principal-->
            </aside>
            <!--fim do main-sidebar-->

            <div class="content-wrapper">
                <section class="content">
                    
                    @yield('content')
                    
                </section>
                <!--fim do content-->
            </div>
            <!--fim do content-wrapper-->

            <footer class="main-footer">
                <strong>
                    Copyright &copy; 2016 - Igor Wanderley. Todos os direitos reservados
                </strong>

            </footer>
            <!--fim do main-footer-->

        </div>
        <!-- fim do wrapper-->

        <div class="modal fade" tabindex="-1" role="dialog" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modal-title"></h4>
                    </div><!-- fim do modal-header -->

                    <div class="modal-body"></div><!-- fim do modal-body -->
                    <div class="clearfix"></div>

                    <div class="modal-footer text-right"></div><!-- fim do footer -->
                </div><!-- fim do modal-content -->
            </div><!-- fim do modal -->
        </div>

        <script src="{{URL::to('plugins/jquery.mask/jquery.mask.js')}}"></script>
        <script type='text/javascript'>
            $('.clickable-row').on('click', function() {
                window.document.location = $(this).data('url');
            });

            $('.remover').on('click', function(event) {
                event.preventDefault();

                var $a 		    = $(this),
                    action      = $a.attr('href');

                $.get(action, function(response) {
                    if (response.status){
                            $a.parents('tr').remove();
                    }
                });
            });
        </script>
    </body>
</html>
