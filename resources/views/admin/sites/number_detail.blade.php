@extends('admin.layouts.index')
@section('css')
    <link href="{{asset('css/number.css')}}" rel="stylesheet">
@endsection
@section('content')
<section class="tables" ng-controller="NumberCtrl">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <!-- <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                        </div> -->
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <ul class="nav nav-tabs my-customer-tabs">
                        <li  ng-repeat="customer in customers" class="@{{active == customer.id ? 'active' :''}}" ng-click="changeActive(customer.id)">@{{customer.name}}</li>
                        <!-- <li class="active" ng-repeat="customer in customers">@{{customer.name}}</li> -->
                      </ul>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr width="100%">
                            <th class="text-center" width="10%">Số</th>
                            <th class="text-center" width="10%">Tiền</th>
                            <th class="text-center" width="10%">Sang</th>
                            <th class="text-center" width="10%">Còn lại</th>
                            <th class="text-center" width="35%">Đài</th>
                            <th class="text-center" width="15%">Kiểu</th>
                            <th class="text-center" width="10%">Lưu</th>
                          </tr>
                        </thead>
                        <tbody>

                          
                          <tr ng-repeat="number in numbers">
                            <th scope="row" class="text-center">
                              <input type="number" placeholder="Số" class="form-control" ng-model="number.number">
                            </th>
                            <td class="text-center">
                              <input type="number" placeholder="Số" class="form-control" ng-model="number.price">
                            </td>
                            <td class="text-center">
                              <input type="number" placeholder="Số" class="form-control" ng-model="number.trans">
                            </td>
                            <td class="text-center">
                              <input type="number" placeholder="Số" class="form-control" ng-model="number.rest">
                            </td>
                            <td class="text-center my-tds">
                              @foreach($date->chanel as $chanel)
                              <div class="i-checks my-checks">
                                <input id="checkboxCustom{{$chanel->id}}" type="checkbox" value="{{$chanel->code}}" class="checkbox-template" ng-model="number.chanel.{{$chanel->code}}">
                                <label for="checkboxCustom{{$chanel->id}}" class="my-checkbox">{{$chanel->name}}</label>
                              </div>
                              @endforeach
                            </td>
                            <td class="text-center select">
                                <select name="account" class="form-control" ng-model="number.type">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                </select>
                            </td>
                            <td class="text-center">
                              <button type="submit" value="Signin" class="btn btn-primary" ng-click="save(number)">Lưu</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection
@section('javascript')
  <script src="{{asset('angularjs/number.js')}}"></script>
@endsection