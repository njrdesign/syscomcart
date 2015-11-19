<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "SYSCOMCart v0.1 - Alpha" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('header')

            <!-- Sidebar -->
    @include('sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "Entradas" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Adicionar Entrada</h3><br>

                </div>
                {!! Form::open(['method' => 'POST', 'route' => 'financeiro.store', 'class' => 'form-horizontal']) !!}

                <div class="box-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group @if($errors->first('codigo')) has-error @endif">
                                    {!! Form::label('codigo', 'Código:') !!}
                                    {!! Form::number('codigo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('codigo') }}</small>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                  {!! Form::label('quant', 'Quant.:') !!}
                                  {!! Form::number('quant', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                  <small class="text-danger">{{ $errors->first('quant') }}</small>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                  {!! Form::label('dataEmissao', 'Data:') !!}
                                  {!! Form::date('dataEmissao', \Carbon\Carbon::now(), ['class' => 'form-control', 'required' => 'required'], null) !!}
                                  <small class="text-danger">{{ $errors->first('dataEmissao') }}</small>
                              </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group @if($errors->first('descricao')) has-error @endif">
                                    {!! Form::label('descricao', 'Descrição:') !!}
                                    {!! Form::textarea('descricao', null, ['class' => 'form-control', 'rows' => '3', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('descricao') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">

                                    <div class="@if($errors->first('atribuicao')) has-error @endif">
                                        {!! Form::label('atribuicao', 'Atribuição:') !!}
                                        {!! Form::select('atribuicao', config('form_selects.atribuicao'), null,['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>



                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group @if($errors->first('emolumentos')) has-error @endif">
                                    {!! Form::label('emolumentos', 'Emolumentos(R$):') !!}
                                    {!! Form::text('emolumentos', null, ['class' => 'form-control soma', 'data-thousands' => '.', 'data-decimal' => ',']) !!}
                                    <small class="text-danger">{{ $errors->first('emolumentos') }}</small>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group @if($errors->first('fdj')) has-error @endif">
                                    {!! Form::label('fdj', 'FDJ(R$):') !!}
                                    {!! Form::text('fdj', null, ['class' => 'form-control soma', 'data-thousands' => '.', 'data-decimal' => ',']) !!}
                                    <small class="text-danger">{{ $errors->first('fdj') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group @if($errors->first('frmp')) has-error @endif">
                                    {!! Form::label('frmp', 'FRMP(R$):') !!}
                                    {!! Form::text('frmp', null, ['class' => 'form-control soma', 'data-thousands' => '.', 'data-decimal' => ',']) !!}
                                    <small class="text-danger">{{ $errors->first('frmp') }}</small>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group @if($errors->first('fcrcpn')) has-error @endif">
                                  {!! Form::label('fcrcpn', 'FCRCPN(R$):') !!}
                                  {!! Form::text('fcrcpn', null, ['class' => 'form-control soma', 'data-thousands' => '.', 'data-decimal' => ',']) !!}
                                  <small class="text-danger">{{ $errors->first('fcrcpn') }}</small>
                              </div>
                            </div>
                            <div class="col-sm-4">

                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="box-footer">
                    <a class="btn btn-danger" role="button" href="{{ URL::route('financeiro') }}" aria-expanded="false">Cancelar</a>
                    <div class="btn-group pull-right">

                        {!! Form::submit("Salvar", ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
<script src="http://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js" type="text/javascript"></script>
<script>
    $(function() {
        $("#emolumentos").maskMoney();
        $("#fdj").maskMoney();
        $("#frmp").maskMoney();
        $("#fcrcpn").maskMoney();
        $("#valor").maskMoney();
    })


</script>
<script type="text/javascript">
        $('number[name=codigo]').change(function () {
            var idEstado = $(this).val();
            $.get('/get-financeiros/' + codigoTabela, function (financeiros) {
                $('textarea[name=descricao]').empty();
                $.each(financeiros, function (key, value) {
                    $('textarea[name=descricao]').append('<textarea value=' + value.id + '>' + value.descricao + '</textarea>');
                });
            });
        });
    </script>
</html>
