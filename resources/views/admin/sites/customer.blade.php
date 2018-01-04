@extends('admin.layouts.index')
@section('css')
    <link href="{{asset('css/lottery_results.css')}}" rel="stylesheet">
@endsection
@section('content')
<section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      

                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="">Tên</th>
                            <th>Địa chỉ</th>
                            <th>Ghi chú</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($customers as $customer)
                          <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->note}}</td>
                          </tr>
                          @endforeach
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
  <script src="{{asset('angularjs/kqxs.js')}}"></script>
@endsection