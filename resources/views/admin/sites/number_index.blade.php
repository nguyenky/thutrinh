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
                      <h3 class="h4">Basic Table</h3>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-center">Ngày</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($date as $d)
                          <tr>
                            <th scope="row"><a href="{{route('admin.number_detail',['id'=>$d->id])}}">{{$d->name}}</a></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
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