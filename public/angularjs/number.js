
app.controller('NumberCtrl',['$scope','$http','_','$rootScope','$location',function($scope,$http,_,$rootScope,$location){
	$scope.name ='uchiha';
	$scope.loading_customer = false;
	$scope.init = true;
	$scope.active = null;
	$scope.col = 6;
	$scope.numbers ={};
	$scope.selected = false;
	$scope.customer = null;
	$scope.date_customer = null;
	// console.log(id_date);
	// $scope.numbers = [];
	$scope.getCustomer = function(){
		$scope.loading_customer = false;
		$http({
		  method: 'GET', 
		  url: '/admin/getCustomer'
		}).then(function successCallback(response) {
			$scope.customers = response.data.data;
			$scope.loading_customer = true;
		  }, function errorCallback(response) {
			alert('er');
		  });
	}
	$scope.getCustomer();


	$scope.selectCustomer = function(customer){
		$scope.active = customer.id;
		$scope.selected = true;
		$scope.customer = customer;
		var data = {
			id_date:id_date,
			id_customer:customer.id
		};
		$http({
		  method: 'POST', 
		  url: '/admin/createDateCustomer',
		  data: data,
		}).then(function successCallback(response) {
			console.log(response.data.data);
			$scope.date_customer = response.data.data;
			$scope.numbers = response.data.data.numbers;
			$scope.numbers.unshift(dataDefout);
		  }, function errorCallback(response) {
			alert('er');
		  });
		console.log($scope.customer);
	}
	var dataDefout = {
		number:null,
		price:null,
		trans:null,
		rest:null,
		chanel:{},
		type:null,

	};
	// $scope.numbers.unshift(dataDefout);
	$scope.save = function(number){
		console.log(number);
		number.date_customer_id = $scope.date_customer.id;
		number.type = 1;
		$scope.numbers.unshift({
				number:null,
				price:null,
				trans:null,
				rest:null,
				chanel:{},
				type:null,
			});
		$http({
		  method: 'POST', 
		  url: '/admin/createNumber',
		  data: number,
		}).then(function successCallback(response) {
			console.log(response.data.data);
			// $scope.date_customer = response.data.data;
			// $scope.numbers = response.data.data.numbers;
			// $scope.numbers.unshift(dataDefout);
			
		  }, function errorCallback(response) {
			alert('er');
		  });
		// $scope.numbers.unshift({
		// 	number:null,
		// 	price:null,
		// 	trans:null,
		// 	rest:null,
		// 	chanel:{},
		// 	type:null,
		// });
		console.log($scope.numbers);
	};

	// $scope.handleValue= function(){
	// 	_.each($scope.chanels, function(value){
	// 			if(value.chanel_value.length){
	// 				value.chanel_value['tam'] = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 8;
	// 				});
	// 				value.chanel_value['bay'] = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 7;
	// 				});
	// 				value.chanel_value['sau']  = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 6;
	// 				});
	// 				value.chanel_value['nam']  = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 5;
	// 				});
	// 				value.chanel_value['tu']  = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 4;
	// 				});
	// 				value.chanel_value['ba']  = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 3;
	// 				});
	// 				value.chanel_value['nhi']  = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 2;
	// 				});
	// 				value.chanel_value['nhat'] = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 1;
	// 				});
	// 				value.chanel_value['dacbiet']  = _.filter(value.chanel_value, function(val){
	// 				 return val.giai == 0;
	// 				});
	// 			}
	// 		});
	// }
	


	// 	$scope.updateValue = function (id){
	// 		$scope.loading = true;
	// 		var token = $("input[name='_token']").val();
	// 		chanel = _.filter($scope.chanels, function(val){
	// 				 return val.id == id;
	// 				});
	// 		var dataUpdate = [];
	// 		var tam = chanel[0].chanel_value['tam'];
	// 		dataUpdate.unshift(tam);
	// 		var bay = chanel[0].chanel_value['bay'];
	// 		dataUpdate.unshift(bay);
	// 		var sau = chanel[0].chanel_value['sau'];
	// 		dataUpdate.unshift(sau);
	// 		var nam = chanel[0].chanel_value['nam'];
	// 		dataUpdate.unshift(nam);
	// 		var tu = chanel[0].chanel_value['tu'];
	// 		dataUpdate.unshift(tu);
	// 		var ba = chanel[0].chanel_value['ba'];
	// 		dataUpdate.unshift(ba);
	// 		var nhi = chanel[0].chanel_value['nhi'];
	// 		dataUpdate.unshift(nhi);
	// 		var nhat = chanel[0].chanel_value['nhat'];
	// 		dataUpdate.unshift(nhat);
	// 		var dacbiet = chanel[0].chanel_value['dacbiet'];
	// 		dataUpdate.unshift(dacbiet);
	// 		$scope.methodPost(dataUpdate,token,chanel[0].id);
			
	// 	};

	// 	$scope.methodPost = function(data,token,id){
	// 		console.log(data);
	// 		$http({
	// 			  method: 'POST',
	// 			  url: '/admin/updateValue/'+id,
	// 			data: data,
	// 			}).then(function successCallback(response) {
	// 			    $scope.loading = false;
	// 			  }, function errorCallback(response) {
	// 			  	alert('re');
	// 			  });
	// 	}
}])