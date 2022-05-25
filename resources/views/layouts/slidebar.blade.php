 <div class="navbar-bg"></div>
 <nav class="navbar navbar-expand-lg main-navbar">
 </nav>
 <div class="main-sidebar">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             <a href="index.html">E-Cuti</a>
         </div>
         <div class="sidebar-brand sidebar-brand-sm">
             <a href="index.html">St</a>
         </div>
         <ul class="sidebar-menu">
             <li class="menu-header">Dashboard</li>
             <li class="nav-item dropdown">
                 <a href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
             </li>
             <li class="menu-header">Data Master</li>
             <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-user"
                         aria-hidden="true"></i>
                     <span>Data Users</span></a></a></li>
             {{-- <li>
                 <a class="nav-link" href="/Pegawai">
                     <i class="fa fa-user" aria-hidden="true"></i>
                     <span>Pegawai</span></a>
             </li> --}}
             <li>
                 <a class="nav-link" href="/Cuti">
                     <i class="fas fa-newspaper    "></i>
                     <span>Cuti</span></a>
             </li>
             <li>
                 <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                     <i class="fas fa-newspaper    "></i>
                     <span>{{ __('Logout') }}</span>
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
             </li>



         </ul>
     </aside>
 </div>
