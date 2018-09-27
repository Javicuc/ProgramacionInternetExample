<ul class="app-menu">
  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Alumnos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
      <li><a class="treeview-item" href="{{ route('alumnos.index') }}"><i class="icon fa fa-circle-o"></i>Listar Alumnos</a></li>
      <li><a class="treeview-item" href="{{ route('alumnos.create') }}"><i class="icon fa fa-circle-o"></i>Crear Alumno</a></li>
    </ul>
  </li>
  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Materias</span><i class="treeview-indicator fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
      <li><a class="treeview-item" href="{{ route('materias.index') }}"><i class="icon fa fa-circle-o"></i>Listar Materias</a></li>
      <li><a class="treeview-item" href="{{ route('materias.create') }}"><i class="icon fa fa-circle-o"></i>Crear Materia</a></li>
    </ul>
  </li>
</ul>