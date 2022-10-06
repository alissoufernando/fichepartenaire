
@section('title', 'PARTENARIAT')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection

@section('breadcrumb-title', 'PARTENARIAT')
@section('breadcrumb-items')
<li class="breadcrumb-item">Tableau de bord</li>
<li class="breadcrumb-item active">Liste de mes partenariats</li>
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
                        <h5 class="d-inline">Liste de mes partenariats</h5>
                        <a href="{{ route('creation.de.artenariat') }}"  class="btn  btn-success btn-sm float-end">Ajouter</a>

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
                                    <a href="{{route('partner.detail',['id' => $partner->id])}}"> <i class="fa fa-list fa-1x m-5 text-success"></i> </a>
                                    <a href="{{route('partner.edit',['id' => $partner->id])}}"> <i class="fa fa-edit fa-1x m-5 text-warning"></i> </a>
                                    <a href="#" wire:click.prevent="deletePartner({{$partner->id}})"> <i class="fa fa-trash-o fa-1x text-danger"></i> </a>
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
    {{-- @include('livewire.dashboard.formation.modal') --}}
</div>


@section('scripts')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
