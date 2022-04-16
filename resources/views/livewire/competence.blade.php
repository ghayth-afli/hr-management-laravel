<div>
    @foreach($inputs as $key => $value)
        <div class="gray rounded p-3 mb-3 position-relative entry">
            <button class="aps-clone btn-remove" type="button" wire:click.prevent="remove({{$key}})"><i class="fas fa-times"></i></button>
            <div class="form-group">
                <label class="text-dark ft-medium">Nom de compétence</label>
                <input type="text" class="form-control rounded" placeholder="Nom de compétence" name="designation[]">
            </div>
        </div>
    @endforeach
            <div class="col-xl-12 col-lg-12">
                <div class="form-group">
                    <button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add" wire:click.prevent="add({{$i}})"><i class="fas fa-plus mr-1"></i>Ajouter une compétence</button>
                </div>
            </div>
</div>
