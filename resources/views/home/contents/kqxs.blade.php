@extends('home.blocks.index')

@section('css')
	<link href="css/kqxs.css" rel="stylesheet">
@endsection

@section('content')

	<div class="col-md-12 col-sm-12 col-xs-12" ng-controller="KqxsCtrl">
		<div class="sidebar-xs col-md-2 col-sm-2 col-xs-2">
			@foreach($kqxs as $kq)
				<div class="btn-xoso ">
					<button type="button" class="btn btn-primary btn-lg" ng-click="getChanel({{$kq->id}})">{{$kq->name}}</button>
				</div>
			@endforeach
		</div>
		<div class="col-md-10 col-sm-10 col-xs-10 text-center" >
			<!-- <div ng-show="!loading && !init" class="text-center">
				<h2>@{{name}}</h2>

			</div> -->
			<div ng-show="loading && !init" class="text-center">
				Đang tải...<br/>
				<img src="/image/103.gif">

			</div>
			<div ng-show="init" class="text-center">
				chọn ngày !!!

			</div>
			<div class="col-md-@{{col}} col-sm-@{{col}} col-xs-@{{col}}" ng-repeat=" chanel in chanels " ng-show="!loading && !init" >
				<div class="chanel">
					<div class="chanel-header">
						@{{chanel.name}}
					</div>
					<div class="chanel-body">
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
						  <div>
						  		<button type="button" class="btn btn-primary btn-lg " ng-click="updateValue(chanel.id)">  Cập nhật kết quả  </button>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('angularjs')
	<script src="angularjs/kqxs.js"></script>
@endsection