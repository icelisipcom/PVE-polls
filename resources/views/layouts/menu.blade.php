<!-- need to remove -->

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2019') }}" class="nav-link {{ Request::is('2019') ? 'active' : '' }}">
        <i class="fa-pie-chart "></i>
        <p>2019 </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2014_act') }}" class="nav-link {{ Request::is('2014_act') ? 'active' : '' }}">
        <i class="fa-pie-chart "></i>
        <p>Actualizacion 2014 </p>
    </a>
</li>

