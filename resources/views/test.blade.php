@extends('dashboard')

@section('content')
<div class='row'>
  <div class='col-md-6'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">ATOS MÊS DE OUTUBRO</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        @foreach($tasks as $task)
        <h5>
          {{ $task['name'] }}
          <small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}</small>
        </h5>
        <div class="progress progress-xxs">
          <div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>
        </div>
        @endforeach

      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
  <div class='col-md-6'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SYSCOMCart V0.1 Alpha</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        Sistema sendo desenvolvido pela Design NJR. Não Confiar nos dados inseridos.
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->

</div><!-- /.row -->
@endsection