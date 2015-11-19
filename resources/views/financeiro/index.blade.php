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
                {{ $page_title or "Financeiro" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a class="btn btn-primary" role="button" href="{{ URL::route('financeiro.create') }}" aria-expanded="false">Adicionar Item</a>
                    </h3>
                </div>
                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-xl-1">Código</th>
                            <th class="col-xl-2">Data</th>
                            <th class="col-xl-2">Atribuição</th>
                            <th class="col-sm-1">C/D</th>
                            <th class="col-sm-1">Valor</th>
                            <th class="col-sm-2">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($financeiros as $financeiro)

                            <tr title="{{ $financeiro->descricao }}">

                                <td>{{ $financeiro->id }}</td>
                                <td>{{ $financeiro->codigo }}</td>
                                <td>{{ $financeiro->dataEmissao }}</td>
                                <td>{{ $financeiro->atribuicao }}</td>
                                <td>{{ $financeiro->tipo }}</td>
                                <td>{{ $financeiro->valor }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary glyphicon glyphicon-pencil" role="button" href="{{ URL::route('financeiro.edit', $financeiro->id) }}"></a>
                                        <a class="btn btn-danger glyphicon glyphicon-minus" role="button" href="{{ URL::route('financeiro.delete', $financeiro->id) }}"></a>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="text-center">
                        {!! $financeiros->render() !!}
                    </div>
                </div>
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
</html>
