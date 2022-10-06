@section('title', 'Dashboard')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endsection

@section('breadcrumb-title', 'Dashboard')
@section('breadcrumb-items')
<li class="breadcrumb-item active">Dashboard</li>
@endsection
<div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 xl-50 col-sm-6">
        <div class="card server-card-bg">
          <div class="card-body server-widgets">
            <div class="media"><i data-feather="codepen"></i>
              <div class="top-server">
                <h6 class="mb-0">Storage</h6>
              </div>
            </div>
            <div class="bottom-server">
              <h5 class="mb-0">85GB / <span>100Gb</span></h5>
            </div>
            <div class="progress">
              <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 xl-50 col-sm-6">
        <div class="card server-card-bg">
          <div class="card-body server-widgets">
            <div class="media"><i data-feather="clock"></i>
              <div class="top-server">
                <h6 class="mb-0">Latency</h6>
              </div>
            </div>
            <div class="bottom-server mb-0">
              <h5 class="mb-0"><span class="second-color counter">40</span>ms</h5>
            </div>
          </div>
          <div class="server-chart">
            <div class="flot-chart-placeholder" id="latency-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 xl-50 col-sm-6">
        <div class="card server-card-bg">
          <div class="card-body server-widgets">
            <div class="media"><i data-feather="server"></i>
              <div class="top-server">
                <h6 class="mb-0">Bandwidth</h6>
              </div>
            </div>
            <div class="bottom-server">
              <h5 class="mb-0">75GB / <span>100Gb</span></h5>
            </div>
            <div class="progress">
              <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 xl-50 col-sm-6">
        <div class="card server-card-bg">
          <div class="card-body server-widgets">
            <div class="media"><i data-feather="anchor"></i>
              <div class="top-server">
                <h6 class="mb-0">Cluster Load</h6>
              </div>
            </div>
            <div class="bottom-server">
              <h5 class="mb-0">70% <span><i data-feather="trending-down"></i></span></h5>
            </div>
            <div class="last-server">
              <h6 class="mb-0 f-14">Lower than average</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Live CPU Usage</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body chart-block">
            <div class="server-chart-container">
              <div class="flot-chart-placeholder" id="cpu-updating"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
  &lt;div class="card-body chart-block"&gt;
  &lt;div class="server-chart-container"&gt;
  &lt;div id="cpu-updating" class="flot-chart-placeholder"&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Memory Usage</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body server-canvas">
            <canvas id="myGraph"></canvas>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
  &lt;div class="card-body server-canvas"&gt;
  &lt;canvas id="myGraph"&gt;&lt;/canvas&gt;
  &lt;/div&gt;
  &lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Container-fluid Ends-->
</div>
@section('scripts')
<script src="{{ asset('assets/js/chart/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/excanvas.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/server-custom.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
@endsection
