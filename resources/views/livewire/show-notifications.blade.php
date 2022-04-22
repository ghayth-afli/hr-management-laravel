<div wire:poll>
    <div class="row" id="table-hover-row" wire:ignore>
        <div class="col-12">
        <div class="card">
            <div class="card card-transaction">
            <div class="card-header">
                <h4 class="card-title">Notifications</h4>
            </div>
            <div class="card-body">
                @foreach($Notifications as $Notification)
                    @if($Notification -> type == 'Candidature')
                        <a href=""><div class="transaction-item">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary rounded">
                                    <div class="avatar-content">
                                        <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-info">
                                    <h6 class="transaction-title"><span class="fw-bolder">{{$Notification->content}} </span>reçue !</h6>
                                    <small>{{$Candidats->find($Notification->source)->email}}.</small>
                                </div>
                            </div>
                            <div class="fw-bolder text-danger">- $74</div>
                        </div></a>
                        <hr>
                    @endif
                    @if($Notification -> type == 'Système')
                        @if($Users->find($Notification->source)->id != Auth::user()->id)
                            <a href=""><div class="transaction-item">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary rounded">
                                        <div class="avatar-content">
                                            <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="transaction-info">
                                        <h6 class="transaction-title"><span class="fw-bolder">Rapports système 👋</span>&nbsp;Vérifie ça</h6>
                                        <small>{{$Users->find($Notification->source)->name}}.{{$Notification->content}}.</small>
                                    </div>
                                </div>
                                <div class="fw-bolder text-danger">{{$Notification->created_at->diffForHumans()}}</div>
                            </div></a>
                            <hr>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
