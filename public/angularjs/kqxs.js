
app.controller('KqxsCtrl',['$scope','$http','_',function($scope,$http,_){
	$scope.name ='uchiha';
	$scope.loading = true;
	$scope.init = true;
	$scope.active = null;
	$scope.col = 6;
	$scope.getChanel = function(id){
		$scope.name = name;
		$scope.active = id;
		$scope.init = false;
		$scope.loading = true;
		$http({
		  method: 'GET', 
		  url: '/admin/apiGetChanel/'+id,
		}).then(function successCallback(response) {
			$scope.chanels = response.data.data.chanel;
			if($scope.chanels.length == 3){
				$scope.col = 4;
			}
			$scope.handleValue();
			$scope.loading = false;
			
		  }, function errorCallback(response) {
			alert('er');
		  });
	}

	$scope.handleValue= function(){
		_.each($scope.chanels, function(value){
				if(value.chanel_value.length){
					value.chanel_value['tam'] = _.filter(value.chanel_value, function(val){
					 return val.giai == 8;
					});
					value.chanel_value['bay'] = _.filter(value.chanel_value, function(val){
					 return val.giai == 7;
					});
					value.chanel_value['sau']  = _.filter(value.chanel_value, function(val){
					 return val.giai == 6;
					});
					value.chanel_value['nam']  = _.filter(value.chanel_value, function(val){
					 return val.giai == 5;
					});
					value.chanel_value['tu']  = _.filter(value.chanel_value, function(val){
					 return val.giai == 4;
					});
					value.chanel_value['ba']  = _.filter(value.chanel_value, function(val){
					 return val.giai == 3;
					});
					value.chanel_value['nhi']  = _.filter(value.chanel_value, function(val){
					 return val.giai == 2;
					});
					value.chanel_value['nhat'] = _.filter(value.chanel_value, function(val){
					 return val.giai == 1;
					});
					value.chanel_value['dacbiet']  = _.filter(value.chanel_value, function(val){
					 return val.giai == 0;
					});
				}
			});
	}
	


		$scope.updateValue = function (id){
			$scope.loading = true;
			var token = $("input[name='_token']").val();
			chanel = _.filter($scope.chanels, function(val){
					 return val.id == id;
					});
			var dataUpdate = [];
			var tam = chanel[0].chanel_value['tam'];
			dataUpdate.unshift(tam);
			var bay = chanel[0].chanel_value['bay'];
			dataUpdate.unshift(bay);
			var sau = chanel[0].chanel_value['sau'];
			dataUpdate.unshift(sau);
			var nam = chanel[0].chanel_value['nam'];
			dataUpdate.unshift(nam);
			var tu = chanel[0].chanel_value['tu'];
			dataUpdate.unshift(tu);
			var ba = chanel[0].chanel_value['ba'];
			dataUpdate.unshift(ba);
			var nhi = chanel[0].chanel_value['nhi'];
			dataUpdate.unshift(nhi);
			var nhat = chanel[0].chanel_value['nhat'];
			dataUpdate.unshift(nhat);
			var dacbiet = chanel[0].chanel_value['dacbiet'];
			dataUpdate.unshift(dacbiet);
			$scope.methodPost(dataUpdate,token,chanel[0].id);
			
		};

		$scope.methodPost = function(data,token,id){
			console.log(data);
			$http({
				  method: 'POST',
				  url: '/admin/updateValue/'+id,
				data: data,
				}).then(function successCallback(response) {
				    $scope.loading = false;
				  }, function errorCallback(response) {
				  	alert('re');
				  });
		}
}])