<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
          @if (Auth::user()->can('show-mail', ''))
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('mail')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Courriers"><i class="ficon" data-feather="mail"></i></a></li>
          @endif
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendrier"><i class="ficon" data-feather="calendar"></i></a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
          <livewire:notification-system /> 
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"> 
                    @if(Auth::user('name'))
                        {{ Auth::user()->name }}
                    @endif
            </span><span class="user-status">Admin</span></div><span class="avatar">
                @if(file_exists(Auth::user()->avatar))
                <img class="round" src="{{ asset(Auth::user()->avatar) }}" alt="avatar" height="40" width="40"/>
                @else 
                <img class="round" src="{{ asset('public/img/config/nopic.png') }}" alt="avatar" height="40" width="40"/>
                @endif   
                <span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="{{ route('profile') }}"><i class="me-50" data-feather="user"></i> Profil</a>
            <a class="dropdown-item" href="{{ route('changePassword') }}"><i class="me-50" data-feather="key"></i> Mot de passe</a>
            <a class="dropdown-item" href="{{ route('mail')}}"><i class="me-50" data-feather="mail"></i>Courriers</a><!--<a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chat</a>-->
              
              <div class="pull-right">
                <div class="dropdown-divider"></div><a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="me-50" data-feather="log-out"></i>Se déconnecter</a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
                
            
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
      <li class="d-flex align-items-center"><a href="#">
          <h6 class="section-label mt-75 mb-0">Files</h6></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div class="d-flex align-items-center">
            <div class="avatar me-75"><img src=""{{ asset("app-assets/images/portrait/small/avatar-s-6.jpg")}}" alt="png" height="32"/></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
            </div>
          </div></a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
