<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">CONTROLE FINANCEIRO</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-option-vertical"></i><span>Financeiro</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ URL::action('FinanceiroController@index') }}">Geral</a></li>
          <li><a href="{{ URL::action('TabelaController@index') }}">Tabelas</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="glyphicon glyphicon-book"></i><span>Livro Caixa</span></a></li>
      <li><a href="#"><i class="glyphicon glyphicon-align-justify"></i><span>Resumo</span></a></li>
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-option-vertical"></i><span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">Relatório 1</a></li>
          <li><a href="#">Relatório 2</a></li>
          <li><a href="#">Relatório 3</a></li>
          <li><a href="#">Relatório 4</a></li>
          <li><a href="#">Relatório 5</a></li>
          <li><a href="#">Relatório 6</a></li>
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>