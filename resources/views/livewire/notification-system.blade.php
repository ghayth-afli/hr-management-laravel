<div>
        <li class="nav-item dropdown dropdown-notification me-25" wire:ignore><a class="nav-link" href="#" data-bs-toggle="dropdown"  wire:click="seen" ><i class="ficon" data-feather="bell" aria-expanded="false"></i><livewire:bull /></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end" >
              <li class="dropdown-menu-header">
                <div class="dropdown-header d-flex">
                  <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                </div>
              </li>
              <li class="scrollable-container media-list"><a class="d-flex" href="#">
                @foreach($Notifications as $Notification)
                  @if($Notification -> type == 'Candidature')
                    <div class="list-item d-flex align-items-start">
                      <div class="me-1">
                        <div class="avatar"><img src="{{ asset("images/cvPhoto/".$Candidats->find($Notification->source)->photo)}}" alt="avatar" width="32" height="32"/></div>
                      </div>
                      <div class="list-item-body flex-grow-1">
                        <p class="media-heading"><span class="fw-bolder">{{$Notification->content}} </span>reçue !</p><small class="notification-text"> {{$Candidats->find($Notification->source)->email}}.</small>
                      </div>
                    </div></a><a class="d-flex" href="#">
                  @endif

                  @if($Notification -> type == 'Système')
                    @if($Users->find($Notification->source)->id != Auth::user()->id)
                      <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                          <div class="avatar bg-light-danger">
                            <div class="avatar-content">Sys</div>
                          </div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                          <p class="media-heading"><span class="fw-bolder">Rapports système 👋</span>&nbsp;Vérifie ça</p><small class="notification-text"> {{$Users->find($Notification->source)->name}}.{{$Notification->content}}</small>
                        </div>
                      </div></a>
                    @endif
                  @endif
                @endforeach
              </li>
              <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Toutes les notifications</a></li>
            </ul>
        </li>
</div>
