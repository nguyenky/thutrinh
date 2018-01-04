@extends('admin.layouts.index')
@section('css')
    <link href="{{asset('css/lottery_results.css')}}" rel="stylesheet">
@endsection
@section('content')
<section class="dashboard-header" ng-controller="KqxsCtrl">
  <div class="container-fluid">
    <div class="row col-12">
      <!-- Statistics -->
      <div class="statistics col-lg-2 col-12">
        @foreach($date as $d)
        <div class="statistic d-flex align-items-center bg-white has-shadow date" ng-click="getChanel({{$d->id}})">
          {{$d->name}}
        </div>
        @endforeach
      </div>
      <!-- Line Chart            -->
      <div ng-show="loading && !init" class="bg-white col-lg-10 text-center">
        Đang tải...<br/>
        <img src="/image/103.gif">

      </div>
      <div ng-show="init" class="bg-white col-lg-10 text-center">
        chọn ngày !!!

      </div>
      <div class=" row col-lg-10 col-12" ng-show="!loading && !init">
        <div class="chart col-lg-@{{col}} col-12" ng-repeat=" chanel in chanels ">
          <div class="bg-white d-flex justify-content-center has-shadow chanel">
            <div class="chanel-header">
              <h3 class="text-center">@{{chanel.name}}</h3>
            </div>
            
            <div class="chanel-body text-center">
                <form>
              <!-- <input type="hidden" name="_token" id="csrf-token" ng-model="token" /> -->
                  {{ csrf_field() }}
                    <table class="table table-bordered">
                <tbody>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Tám</strong></td>
                    <td width="80%" class="text-center">
                        <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tam'][0].value" placeholder="- -" > 
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Bảy</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['bay'][0].value" placeholder="- -" > 
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Sáu</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['sau'][0].value" placeholder="- - -" > 
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['sau'][1].value" placeholder="- - -" > 
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['sau'][2].value" placeholder="- - -" > 
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Năm</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['nam'][0].value" placeholder="- - -" >  
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Tư</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][0].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][1].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][2].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][3].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][4].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][5].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['tu'][6].value" placeholder="- - -" >    
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Ba</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['ba'][0].value" placeholder="- - -" >    
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['ba'][1].value" placeholder="- - -" >  
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Nhì</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['nhi'][0].value" placeholder="- - -" >  
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Nhất</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['nhat'][0].value" placeholder="- - -" >
                    </td>
                  </tr>
                  <tr width="100%">
                    <td width="20%"><strong>Giải Đặc Biệt</strong></td>
                    <td width="80%" class="text-center">
                      <input class="text-center" type="number" name="" ng-model="chanel.chanel_value['dacbiet'][0].value" placeholder="- - -" > 
                    </td>
                  </tr>
                </tbody>
                    </table>
                </form>
                <div class="chanel-btn">
                  <button type="button" class="btn btn-primary btn-lg " ng-click="updateValue(chanel.id)">  Cập nhật kết quả  </button>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
@section('javascript')
  <script src="{{asset('angularjs/kqxs.js')}}"></script>
@endsection