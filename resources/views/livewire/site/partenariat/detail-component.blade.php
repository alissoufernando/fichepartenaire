
@section('title', 'Detail')
@section('styles')
@endsection

@section('breadcrumb-title', 'Detail')
@section('breadcrumb-items')
<li class="breadcrumb-item">Tableau de bord</li>
<li class="breadcrumb-item active">Détail d'un partenariat</li>
@endsection
<div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div wire:ignore class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="d-inline">Détail d'un partenariat</h5>
                        <a href="{{ route('mes.partenariat') }}" class="btn btn-success btn-sm float-end">
                            Mes partenariats
                        </a>
                    </div>
                    <div class="card-body">

                      <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <h4>Détails du partenariat</h4>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead class="table-success">
                                        <tr>
                                          <th scope="col">N°</th>
                                          <th scope="col">Intitulé</th>
                                          <th scope="col">Valeur</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Type</td>
                                          <td>{{ $partner->type->name }}</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Objet du partenariat</td>
                                          <td>{{$partner->object_partener_id}}</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Nom du partenariat</td>
                                          <td>{{$partner->partenaire->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Année du collect</td>
                                            <td>{{$partner->year_collect}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Année de signature</td>
                                            <td>{{$partner->year_signature}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>La suggestions</td>
                                            <td>{{$partner->suggestions}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Les difficultés</td>
                                            <td>{{$partner->difficults}}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <h4>Détails de l'activité du partenariat</h4>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                               @if($activities->count() > 0)
                               <div class="table-responsive">
                                @php
                                  $i =1;
                                @endphp
                                   @foreach ($activities as $activitie)
                                   <h4>Activité N° {{ $i++ }}</h4>
                                   <table class="table">
                                     <thead class="table-success">
                                       <tr>
                                         <th scope="col">N°</th>
                                         <th scope="col">Intitulé</th>
                                         <th scope="col">Valeur</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                         <th scope="row">1</th>
                                         <td>Nom de l'activité</td>
                                         <td>{{ $activitie->entitled }}</td>
                                       </tr>
                                       <tr>
                                         <th scope="row">2</th>
                                         <td>Date d'exécution</td>
                                         <td>{{$activitie->year_of_execution}}</td>
                                       </tr>
                                       <tr>
                                         <th scope="row">3</th>
                                         <td>Les structures associées</td>
                                         <td>{{$activitie->uac_structure_id}}</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">4</th>
                                           <td>les entitées associées</td>
                                           <td>{{$activitie->uac_entitie_id}}</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">5</th>
                                           <td>les résultats</td>
                                           {{-- <td>{{ explode(', ', $activitie->resultat) }}</td> --}}
                                           <td>{{ $activitie->resultat }}</td>

                                       </tr>
                                     </tbody>
                                   </table>
                                   <hr>
                                   @endforeach
                               </div>
                               @else
                               <h4>Aucune activité n'est associée a ce partenariat</h4>
                                @endif

                                </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <h4>Détails des autres informations</h4>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead class="table-success">
                                        <tr>
                                          <th scope="col">N°</th>
                                          <th scope="col">Intitulé</th>
                                          <th scope="col">Valeur</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Email</td>
                                          <td>{{ $partner->otherInfo->email }}</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Numéro de Téléphone</td>
                                          <td>{{$partner->otherInfo->phone}}</td>
                                        </tr>
                                        @if ($partner->otherInfo->phone_whatsapp)
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Numéro de Téléphone Whatsapp</td>
                                            <td>{{$partner->otherInfo->phone_whatsapp}}</td>
                                        </tr>
                                        @endif

                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Nom du responsable</td>
                                            <td>{{$partner->otherInfo->identite }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Nom du poste</td>
                                            <td>{{$partner->otherInfo->poste}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>La suggestions</td>
                                            <td>{{$partner->suggestions}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Les difficultés</td>
                                            <td>{{$partner->difficults}}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>


        </div>
    </div>

    <!-- Container-fluid Ends-->
    {{-- @include('livewire.dashboard.formation.modal') --}}
</div>


@section('scripts')
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
<script>window.windowvar = window.windowvar || {};windowvar.hello = 'Hello';</script>
@endsection
