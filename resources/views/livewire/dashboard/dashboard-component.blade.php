@section('title', 'Dashboard')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/whether-icon.css') }}">
@endsection

@section('breadcrumb-title', 'Dashboard')
@section('breadcrumb-items')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Statistiques</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                  <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                      <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="navigation"></i></div>
                        <div class="media-body"><span class="m-0">Partenariats</span>
                          <h4 class="mb-0 counter">{{ $partenariat->count() }}</h4><i class="icon-bg" data-feather="navigation"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                      <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="box"></i></div>
                        <div class="media-body"><span class="m-0">Formations</span>
                          <h4 class="mb-0 counter">{{ $formation->count() }}</h4><i class="icon-bg" data-feather="box"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                      <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="message-square"></i></div>
                        <div class="media-body"><span class="m-0">Partenaires</span>
                          <h4 class="mb-0 counter">{{ $partenaire->count() }}</h4><i class="icon-bg" data-feather="message-square"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                      <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="box"></i></div>
                        <div class="media-body"><span class="m-0">Objets</span>
                          <h4 class="mb-0 counter">{{ $objet->count() }}</h4><i class="icon-bg" data-feather="box"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="card o-hidden">
                      <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="users"></i></div>
                          <div class="media-body"><span class="m-0">Utilisateurs</span>
                            <h4 class="mb-0 counter">{{ $user->count() }}</h4><i class="icon-bg" data-feather="users"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card o-hidden">
                      <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="box"></i></div>
                          <div class="media-body"><span class="m-0">Types</span>
                            <h4 class="mb-0 counter">{{ $type->count() }}</h4><i class="icon-bg" data-feather="box"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card o-hidden">
                      <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="box"></i></div>
                          <div class="media-body"><span class="m-0">Structures</span>
                            <h4 class="mb-0 counter">{{ $structure->count() }}</h4><i class="icon-bg" data-feather="box"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-md-3">
                    <div class="card o-hidden">
                      <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="users"></i></div>
                          <div class="media-body"><span class="m-0">Objets</span>
                            <h4 class="mb-0 counter"></h4><i class="icon-bg" data-feather="users"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@section('scripts')
<script src="../assets/js/prism/prism.min.js"></script>
<script src="../assets/js/clipboard/clipboard.min.js"></script>
<script src="../assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../assets/js/counter/jquery.counterup.min.js"></script>
<script src="../assets/js/counter/counter-custom.js"></script>
<script src="../assets/js/custom-card/custom-card.js"></script>
<script src="../assets/js/owlcarousel/owl.carousel.js"></script>
<script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="../assets/js/general-widget.js"></script>
<script src="../assets/js/height-equal.js"></script>
@endsection
