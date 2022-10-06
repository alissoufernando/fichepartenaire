  <!-- Vertically centered modal-->

  <div wire:ignore.self class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            @if ($entitie_id)
            <h5 class="modal-title text-center">Edit une Formation</h5>
            @else
            <h5 class="modal-title text-center">Ajouter une formation</h5>
            @endif
          <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="form theme-form" wire:submit.prevent='saveFormation'>
                <div class="modal-body">
                        <div class="card-body">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                            <label class="form-label" for="name">Nom du formation:</label>
                            <input class="form-control form-control-lg" id="name" type="text" placeholder="nom du formation" wire:model.lazy='name'>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start" >
                    @if ($entitie_id)
                    <button type="submit" class="btn btn-success btn-sm">
                        Modifier
                    </button>
                    @else
                    <button type="submit" class="btn btn-success btn-sm">
                        Ajouter
                    </button>
                    @endif
                  <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>
                </div>
        </form>
      </div>
    </div>
  </div>
