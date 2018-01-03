@extends('admin.layouts.index')
@section('content')
<section class="dashboard-header" ng-controller="KqxsCtrl">
  <div class="container-fluid">
    <div class="row">
      <!-- Statistics -->
      <div class="statistics col-lg-2 col-12">
        <div class="statistic d-flex align-items-center bg-white has-shadow">
          asdsads
          <!-- <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
          <div class="text"><strong>234</strong><br><small>Applications</small></div> -->
        </div>
        <div class="statistic d-flex align-items-center bg-white has-shadow">
          <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
          <div class="text"><strong>152</strong><br><small>Interviews</small></div>
        </div>
        <div class="statistic d-flex align-items-center bg-white has-shadow">
          <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
          <div class="text"><strong>147</strong><br><small>Forwards</small></div>
        </div>
      </div>
      <!-- Line Chart            -->
      <div class="chart col-lg-5 col-12">
        <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
          @{{name}}
        </div>
      </div>
      <div class="chart col-lg-5 col-12">
        <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
          ádsad
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('javascript')
  <script src="{{asset('angularjs/kqxs.js')}}"></script>
@endsection