@section('title', 'PARTENAIRES')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">

@endsection

@section('breadcrumb-title', 'PARTENAIRES')
@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">COLLECTE DES PARTENAIRES</li>

@endsection
<div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
          <div class="card-header text-center">
            <h5>FICHE DE COLLECTE DES PARTENAIRES NATIONAUX DE L’UAC</h5>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                    <label class="form-label" for="name">1. Date de collecte de données</label>
                                    <input class="form-control datetimepicker-input digits" id="dt-noicon" type="text" data-toggle="datetimepicker" data-target="#dt-noicon" wire:model="year_collect">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div wire:ignore class="mb-3">
                                        <div  class="col-form-label">2. Intitulé de l’institution partenaire (Veuillez mentionner le nom de votre organisation)</div>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" wire:model="partenaire_id">
                                          <option value="0">None</option>
                                          @foreach ($partenaires as $partenaire)
                                          <option value="$partenaire->id">{{ $partenaire->name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                </div>
                                <div class="col-sm-12">
                                    <div wire:ignore class="mb-2">
                                    <div class="col-form-label">3. Type de partenaire (Veuillez choisir dans la liste suivante)</div>
                                    <select class="js-example-basic-single col-sm-12" wire:model="type_id">
                                        <option value="0">None</option>
                                          @foreach ($types as $type)
                                          <option value="$type->id">{{ $type->name }}</option>
                                          @endforeach

                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div wire:ignore class="mb-3">
                                        <div class="col-form-label">4.  Quel est l'objet ou quels sont les objets du partenariat ? (plusieurs choix sont possibles, si l'intitulé d'un objet n'est pas dans la liste, il faut sélectionner "Autre (à préciser)":</div>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" wire:model="object_partener_id">
                                            <option value="0">None</option>
                                            @foreach ($objets as $objet)
                                            <option value="$objet->id">{{ $objet->name }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">5. Année de signature</label>
                                            <div class="col-sm-12">
                                              <input class="datepicker-here form-control digits" type="text" data-language="en" data-min-view="months" data-view="months" data-date-format="MM yyyy" wire:model="year_signature">
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center mt-3 mb-3"> 6. Différentes activités exécutées depuis la date de signature de l’accord</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                    <label class="form-label" for="name">Combien d'activités avez-vous effectuées ?</label>
                                    <input class="form-control" id="" type="number" placeholder="Nombre" wire:model="nmber">
                                    </div>
                                </div>
                        </div>
                        @if ($this->nmber > 0)

                            <div class="card">
                              <div class="card-header bg-primary">
                                <h5 class="mb-0">
                                    Les caractéristiques de l'activités
                                </h5>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                        <label class="form-label" for="name">6.1 Intitulé de l'activité (veuillez mentionner le nom de l’activité)</label>
                                        <input class="form-control" id="" type="text" placeholder="Intitulé de l'activité" wire:model="entitled">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="col-form-label text-right">6.2 Année d'exécution (Veuillez saisir l'année d'exécution de l'activité)</label>
                                                <div class="col-sm-12">
                                                  <input class="datepicker-here form-control digits" type="text" data-language="en" data-min-view="months" data-view="months" data-date-format="MM yyyy" wire:model="year_of_execution">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-form-label">6.3 Structures du Rectorat impliquées (Veuillez choisir dans la liste suivante)</div>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" wire:model="uac_structure_id">
                                                <option value="0">None</option>
                                                @foreach ($structures as $structure)
                                                <option value="$structure->id">{{ $structure->name }}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-form-label">6.4 Unités de formation et de Recherche impliquées (Veuillez choisir dans la liste suivante)</div>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" wire:model="uac_entitie_id">
                                                <option value="0">None</option>
                                                @foreach ($formations as $formation)
                                                <option value="$formation->id">{{ $formation->name }}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                        <label class="form-label" for="name">6.5 Résultats obtenus</label>
                                        <input class="form-control" id="" type="text" placeholder="Résultats obtenus" wire:model="resultat">
                                        </div>
                                        {{-- <div class="row">
                                        <button class="btn btn-outline-primary btn-sm">Ajouter</button>
                                        </div> --}}
                                    </div>
                                </div>
                              </div>
                              </div>


                        @endif

                          <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center mt-3 mb-3">7. Dans l'exécution du partenariat entre votre structure et l'UAC, quelles sont les difficultés que vous avez rencontrées ?</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3 mt-3">
                                    <label for="exampleFormControlTextarea4">Saisissez toutes ces difficultés dans la zone de saisie ci-dessous.</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" wire:model="difficults"></textarea>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-center mt-3 mb-3">8. Quelles sont les suggestions que vous pouvez formuler pour aplanir ces difficultés ?</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3 mt-3">
                                    <label for="exampleFormControlTextarea4">Saisissez vos suggestions dans la zone de saisie ci-dessous.</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" wire:model="suggestions"></textarea>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-center mt-3 mb-3">9. Quelques renseignements importants</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="name">9.1 Par quelle adresse email fonctionnelle peut-on contacter votre structure ?</label>
                                    <input class="form-control" type="email" name="email" id="" wire:model="email">
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="name">9.2 Par quel numéro de téléphone fonctionnel peut-on joindre votre organisation ?</label>
                                    <input class="form-control" type="tel" name="phone" id=""wire:model="phone">
                                  </div>
                            </div>
                            <div class="col-md-12">
                            <h6>9.3 Avez-vous un numéro de téléphone WhatsApp ?</h6>

                                <div class="col">
                                    <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
                                        <div class="radio radio-primary">
                                          <input id="radioinline1" type="radio" name="radio1" value="0" wire:model="is_whatsapp">
                                          <label class="mb-0" for="radioinline1">Non</label>
                                        </div>
                                        <div class="radio radio-primary">
                                          <input id="radioinline2" type="radio" name="radio1" value="1" wire:model="is_whatsapp">
                                          <label class="mb-0" for="radioinline2">Oui</label>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                            @if ($this->is_whatsapp == 1)
                            <div class="col-md-12">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="name">numéro de téléphone WhatsApp</label>
                                    <input class="form-control" type="tel" name="phone" id=""wire:model="phone">
                                  </div>
                            </div>
                            @endif
                            <div class="col-md-12">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="name">9.4 Quels sont le nom et les prénoms du répondant ?</label>
                                    <input class="form-control" type="name" name="name" id="" wire:model="identite">
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="name">9.5 Quel est le poste occupé par le répondant au sein de la structure ?</label>
                                    <input class="form-control" type="name" name="name" id="" wire:model="poste">
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="">Veuillez cliquer sur le bouton "Soumettre ci-dessous" pour soumettre les informations renseignées.</label>
                            </div>
                          </div>
                          <div>
                            <button type="submit" class="btn btn-primary btn-sm"> Soumettre</button>
                          </div>
                    </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Container-fluid Ends-->
</div>
@section('scripts')
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-time-picker/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-time-picker/datetimepicker.custom.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>

@endsection
