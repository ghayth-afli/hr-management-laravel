<div wire:poll>
    <li class="scrollable-container media-list" ><a class="d-flex" href="#">
                @foreach($Notifications as $Notification)
                  @if(Auth::user()->created_at < $Notification->created_at)

                    @if($Notification -> type == 'Candidature')
                      <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                          <div class="avatar"><img src="{{ asset("images/cvPhoto/".$Candidats->find($Notification->source)->photo)}}" alt="avatar" width="32" height="32"/></div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                        @if($Notification->content == 'Candidat invité')
                          <p class="media-heading"><span class="fw-bolder">{{$Notification->content}} </span>!</p><small class="notification-text"> {{$Candidats->find($Notification->source)->email}}.</small>
                        @elseif($Notification->content == 'Refus de candidature')
                          <p class="media-heading"><span class="fw-bolder">{{$Notification->content}} </span>!</p><small class="notification-text"> {{$Candidats->find($Notification->source)->email}}.</small>
                        @else
                          <p class="media-heading"><span class="fw-bolder">{{$Notification->content}} </span>reçue!</p><small class="notification-text"> {{$Candidats->find($Notification->source)->email}}.</small>
                        @endif

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
                  @endif
                @endforeach
    </li>
</div>
