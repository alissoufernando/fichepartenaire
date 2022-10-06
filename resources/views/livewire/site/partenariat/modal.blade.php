  <!-- Vertically centered modal-->

  <div wire:ignore.self class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
            <h3 class="modal-title text-center text-warning">ATTENTION !!</h3>
          {{-- <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
                <div class="modal-body">
                        <div class="card-body">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 text-center">
                            <h4>Voulez vous vraiment soumettre sans aucune activitée ?</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center" >

                    <button wire:click.prevent='savePartner' class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">
                        Oui
                    </button>
                  <a class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Non</a>
                </div>
      </div>
    </div>
  </div>
