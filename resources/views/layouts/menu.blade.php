<!-- need to remove -->

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2020') }}" class="nav-link {{ Request::is('2020') ? 'active' : '' }}">
    <i class="fas fa-poll"></i>
        <p> Encuesta 2019 </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2014_act') }}" class="nav-link {{ Request::is('2014_act') ? 'active' : '' }}">
    <i class="fas fa-poll"></i>
        <p>Actualizacion 2014 </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2019') }}" class="nav-link {{ Request::is('2019') ? 'active' : '' }}">
    <i class="fas fa-poll"></i>
        <p> Encuesta 2019 </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('muestras.index') }}" class="nav-link {{ Request::is('muestras') ? 'active' : '' }}">
    <i class="nav-icon fas fa-table"></i>
        <p>Muestras</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('revision') }}" class="nav-link {{ Request::is('revision') ? 'active' : '' }}">
    <i class="nav-icon fas fa-eye"></i>
        <p>Revisar mis encuestas</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('aviso') }}" class="nav-link {{ Request::is('aviso') ? 'active' : '' }}">
    <i class="nav-icon fas fa-paper-plane"></i>
        <p>Enviar aviso </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('buscar') }}" class="nav-link {{ Request::is('buscar') ? 'active' : '' }}">
    <i class="fas fa-eye"></i>
        <p>Buscar numero  </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('switch_mode') }}" class="nav-link">
    <button  class="btn" style="color:white">
    @if(Auth::user()->dark_mode==1)    
    <i class="fas fa-sun"></i>
        <p>  desactivar <br>Modo oscuro </p>
        @else
        <i class="fas fa-moon"></i>
        <p>  activar <br>Modo oscuro </p>
        @endif
    </button>

    </a> 
    
</li>
