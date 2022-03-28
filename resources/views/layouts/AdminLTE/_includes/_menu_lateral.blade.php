<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="d-flex justify-content-center">
       <img class="img-fluid" src="\app-assets\images\logo\ama.png" height="59 px" width="110 px" />
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a class="d-flex align-items-center" href="tableau%20de%20bord.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Tableau de bord</span></a>
        </li>
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Menu</span><i data-feather="more-horizontal"></i>
        </li>
        @if (Auth::user()->can('root-dev', ''))
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('user')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Responsable</span></a>
        </li>
        @endif
        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shield"></i><span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></a>
          <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="roles.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">Roles</span></a>
            </li>
            <li><a class="d-flex align-items-center" href="app-access-permission.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Permission</span></a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="recruitement.html"><i data-feather="eye"></i><span class="menu-title text-truncate" data-i18n="Feather">Recruitment</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="depatement.html"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Département</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="entretien.html"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="Components">Entretien</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="rapports.html"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Rapports</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="email.html"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="chat.html"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Chat</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="calendrier.html"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Calendrier</span></a>
        </li>
      </ul>
    </div>
  </div>
  <script>
                feather.replace()
            </script>