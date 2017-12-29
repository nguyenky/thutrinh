
app.controller('KqxsCtrl',['$scope','$http','_',function($scope,$http,_){
	$scope.name = 'uchiha';
	$http({
		  method: 'GET',
		  url: '/apiGetChanel/121'
		}).then(function successCallback(response) {
			console.log(response.data.data.chanel);
			$scope.chanels = response.data.data.chanel;
			_.each($scope.chanels, function(value){
				if(value.chanel_value.length){
					value.chanel_value.tam = _.filter(value.chanel_value, function(val){
					 return val.giai == 8;
					});
					value.chanel_value.bay = _.filter(value.chanel_value, function(val){
					 return val.giai == 7;
					});
					value.chanel_value.sau = _.filter(value.chanel_value, function(val){
					 return val.giai == 6;
					});
					value.chanel_value.nam = _.filter(value.chanel_value, function(val){
					 return val.giai == 5;
					});
					value.chanel_value.tu = _.filter(value.chanel_value, function(val){
					 return val.giai == 4;
					});
					value.chanel_value.ba = _.filter(value.chanel_value, function(val){
					 return val.giai == 3;
					});
					value.chanel_value.nhi = _.filter(value.chanel_value, function(val){
					 return val.giai == 2;
					});
					value.chanel_value.nhat = _.filter(value.chanel_value, function(val){
					 return val.giai == 1;
					});
					value.chanel_value.dacbiet = _.filter(value.chanel_value, function(val){
					 return val.giai == 0;
					});
				}
			});
			 console.log(response.data.data.chanel);
		  }, function errorCallback(response) {
			alert('er');
		  });


		$scope.updateValue = function (id){
			var token = $("input[name='_token']").val();
			// console.log(token);

			chanel = _.filter($scope.chanels, function(val){
					 return val.id == id;
					});
			data = _.filter(chanel[0].chanel_value, function(key,value){
					 return value.key == 'tam';
					});
			console.log(data);
			// data = chanel[0].chanel_value;
			// $scope.methodPost(data,token);
			
		};

		$scope.methodPost = function(data,token){
			console.log(data);
			data = ['asd','asd'];
			$http({
				  method: 'POST',
				  url: '/updateValue/12',
				  // data : { 
						//   data: data,
						//    "_token" : token
						// },
				data: data,
				}).then(function successCallback(response) {
				    console.log(response);
				  }, function errorCallback(response) {
				  	alert('re');
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				  });
		}

		// $scope.getClinicService();
}])