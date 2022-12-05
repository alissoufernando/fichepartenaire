  <!-- modalActivite-->

  <div wire:ignore.self class="modal fade" id="modalActivite" tabindex="-1" role="dialog" aria-labelledby="modalActivite" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center">Ajouter une activité</h5>
          <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
        <form class="form theme-form" wire:submit.prevent='addActivite'>
                <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">6.1 Intitulé de
                                            l'activité (veuillez mentionner le nom de
                                            l’activité)</label>
                                        <input class="form-control" id="" type="text"
                                            placeholder="Veuillez saisir Intitulé de l'activité"
                                            wire:model="entitled">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">6.2 Année
                                                d'exécution (Veuillez saisir l'année d'exécution de
                                                l'activité)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" wire:model="year_of_execution" placeholder="Veuillez saisir l'année d'exécution de l'activité">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="col-form-label">6.3 Structures du Rectorat
                                            impliquées (Veuillez choisir dans la liste suivante)
                                        </div>
                                        <div class="col">
                                            {{-- @if ($this->uac_entitie_n == 1)
                                            <label class="d-block" for="chk-ani" style="cursor: not-allowed;">
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox" value=""
                                                    wire:model="uac_structure_n" style="cursor: not-allowed;" disabled> Aucun
                                            </label>
                                            @foreach ($structures as $structure)
                                            <label class="d-block" for="chk-ani1">
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox"
                                                    value="{{ $structure->id }}"
                                                    wire:model="uac_structure_id" id="structure" >
                                                {{ $structure->name }}
                                            </label>
                                            @endforeach
                                            @else --}}
                                            <label class="d-block" for="chk-ani">
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox" value="1"
                                                    wire:model="uac_structure_n"> Aucun
                                            </label>
                                            @if ($this->uac_structure_n != 0 )
                                            @foreach ($structures as $structure)
                                            <label class="d-block" for="chk-ani2" style="cursor: not-allowed;">
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox"
                                                    value="{{ $structure->id }}"
                                                    wire:model="uac_structure_id" id="structure" style="cursor: not-allowed;"  disabled>
                                                {{ $structure->name }}
                                            </label>
                                            @endforeach
                                            @else
                                            @foreach ($structures as $structure)
                                            <label class="d-block" for="chk-ani1">
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox"
                                                    value="{{ $structure->id }}"
                                                    wire:model="uac_structure_id" id="structure" >
                                                {{ $structure->name }}
                                            </label>
                                            @endforeach
                                            @endif
                                            {{-- @endif --}}
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="col-form-label">6.4 Unités de formation et de
                                            Recherche impliquées (Veuillez choisir dans la liste
                                            suivante)</div>
                                        <div class="col">
                                            {{-- @if ($this->uac_structure_n == 1)

                                            <label class="d-block" for="chk-ani" style="cursor: not-allowed;" >
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox" value="1"
                                                    wire:model="uac_entitie_n" style="cursor: not-allowed;"  disabled> Aucun
                                            </label>
                                            @foreach ($formations as $formation)
                                                <label class="d-block" for="chk-ani1">
                                                    <input class="checkbox_animated mb-3"
                                                        type="checkbox"
                                                        value="{{ $formation->id }}"
                                                        wire:model="uac_entitie_id">
                                                    {{ $formation->name }}
                                                </label>
                                            @endforeach
                                            @else --}}

                                            <label class="d-block" for="chk-ani">
                                                <input class="checkbox_animated mb-3"
                                                    type="checkbox" value="1"
                                                    wire:model="uac_entitie_n" > Aucun
                                            </label>
                                            @if ($this->uac_entitie_n != 0)
                                            @foreach ($formations as $formation)
                                                <label class="d-block" for="chk-ani1" style="cursor: not-allowed;">
                                                    <input class="checkbox_animated mb-3"
                                                        type="checkbox"
                                                        value="{{ $formation->id }}"
                                                        wire:model="uac_entitie_id" style="cursor: not-allowed;" disabled>
                                                    {{ $formation->name }}
                                                </label>
                                            @endforeach
                                            @else
                                            @foreach ($formations as $formation)
                                                <label class="d-block" for="chk-ani1">
                                                    <input class="checkbox_animated mb-3"
                                                        type="checkbox"
                                                        value="{{ $formation->id }}"
                                                        wire:model="uac_entitie_id">
                                                    {{ $formation->name }}
                                                </label>
                                            @endforeach
                                            @endif
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="name">6.5 Résultats obtenus</label>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control mb-3" type="text" placeholder="Veuillez saisir le résultat obtenus" wire:model="resultat">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success" wire:click.prevent="addResultat">Ajouter</button>
                                        </div>
                                    </div>
                                    @foreach ($this->resultat_tableau as $key => $value)
                                    <div class="row">
                                        <h6>Résultat N°{{ $key + 1 }}</h6>
                                        <div class="col-md-8">
                                            <input class="form-control mb-3" type="text" placeholder="Veuillez saisir le résultat obtenus" value="{{ $value }}" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-danger" wire:click.prevent="delresultat({{ $key }})">Supprimer</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start" >

                    <button type="submit" class="btn btn-success btn-sm">
                        Ajouter
                    </button>
                  <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>
                </div>
        </form>
      </div>
    </div>
  </div>
