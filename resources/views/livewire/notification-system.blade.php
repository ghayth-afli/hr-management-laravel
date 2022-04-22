<div>
        <li class="nav-item dropdown dropdown-notification me-25" wire:ignore><a class="nav-link" href="#" data-bs-toggle="dropdown"  wire:click="seen" ><i class="ficon" data-feather="bell" aria-expanded="false"></i><livewire:bull /></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end"  >
              <li class="dropdown-menu-header">
                <div class="dropdown-header d-flex">
                  <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                </div>
              </li>
              <livewire:notification-content />
              <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="{{route('notification')}}">Toutes les notifications</a></li>
            </ul>
        </li>
</div>
