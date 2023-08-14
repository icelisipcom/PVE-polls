<!-- need to remove -->

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2019') }}" class="nav-link {{ Request::is('2019') ? 'active' : '' }}">
    <i class="fa-sharp fa-solid fa-square-poll-horizontal"></i>
        <p> Encuesta 2019 </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2014_act') }}" class="nav-link {{ Request::is('2014_act') ? 'active' : '' }}">
        <i class="fa-pie-chart "></i>
        <p>Actualizacion 2014 </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('muestras.index') }}" class="nav-link {{ Request::is('muestras') ? 'active' : '' }}">
    <i class="nav-icon fas fa-table"></i>
        <p>Muestras</p>
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
        <p>Buscar numero de cuenta </p>
    </a>
</li>
