
@section('title', 'PARTENARIAT')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection

@section('breadcrumb-title', 'PARTENARIAT')
@section('breadcrumb-items')
<li class="breadcrumb-item">Tableau de bord</li>
<li class="breadcrumb-item active">Liste de tous les partenariats</li>
@endsection
<div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div wire:ignore class="col-sm-12">
                <div class="card rounded-0">
                    <div class="  card-header">
                        {{-- @if (Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif --}}
                        <h5 class="d-inline">Liste de tous les partenariats</h5>
                        {{-- <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="btn  btn-success btn-sm float-end">Ajouter</a> --}}

                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-sm">
                            <table wire:ignore class="display " id="basic-1">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Partenaire</th>
                                <th>Types</th>
                                <th>Object</th>
                                <th>Année de signature</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1
                                @endphp
                                @foreach ($partners as $partner)
                                <tr>
                                    <td>{{$i ++}}</td>
                                    <td>{{$partner->partenaire->name}}</td>
                                    <td>{{$partner->type->name}}</td>
                                    <td>{{$partner->object_partener_id}}</td>
                                    <td>{{$partner->year_signature}}</td>
                                    <td>
                                    <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Détail" href="{{route('partner.detail',['id' => $partner->id])}}"> <i class="fa fa-list fa-1x text-success"></i> </a>
                                    <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Modification" href="{{route('partner.edit',['id' => $partner->id])}}"> <i class="fa fa-edit fa-1x text-warning"></i> </a>
                                    {{-- <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Add Activité" href="" data-bs-toggle="modal" data-bs-target="#modalActivite" wire:click.prevent='getElementById({{ $partner->id }})'>  <i class="fa fa-plus text-warning"></i> </a> --}}
                                    <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Supprimer" href="#" wire:click.prevent="deletePartner({{$partner->id}})"> <i class="fa fa-trash-o fa-1x text-danger"></i> </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Container-fluid Ends-->
    @include('livewire.site.partenariat.modalActivite')
</div>


@section('scripts')
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
<script src="{{ asset('assets/js/popover-custom.js') }}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-time-picker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-time-picker/datetimepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script>
        $("#object").on('change', function() {
            @this.object_partener_id = $(this).val();
        });

        $("#type").on('change', function() {
            @this.type_id = $(this).val();
        });

        $("#partenaire").on('change',function() {
            @this.partenaire_id = $(this).val();
        });

    </script>
@endsection
