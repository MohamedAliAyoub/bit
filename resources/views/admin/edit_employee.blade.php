@extends('admin.layouts')


@section('content')


	
		   <div class="container-fluid table-cont" style="margin-top:100px;padding: 10px 80px">
                    <div class="title-table">
                          <h3> Add Employee </h3>  
                    </div>

                <form method="POST" action="{{route('employee.update',$employee->id)}}">
                    {{ csrf_field() }}
                        {{ method_field('put') }}
                    <div class="container-fluid">
                        <div class="row ">

                        <input type="hidden" name="id"  value="{{$employee->id}}"  >

                            <div class="col-md-8 my-3 add-page">
                                <label>name : </label><br>
                                <input type="text" value="{{$employee->name}}" name="name" class="user-inp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 my-3 add-page">
                                <label>email : </label><br>
                                <input type="email" name="email" value="{{$employee->email}}" class="user-inp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8  my-3 add-page">
                                <label>password : </label><br>
                                <input type="password" name="password"  class="user-inp" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8  my-3 add-page">
                                <label> Type  : </label><br>
                                 <select class="form-control user-inp" name="type">
                                    <option value="sales" @if($employee->type == 'sales') echo 'selected' ; @endif >Sales</option>
                                    <option value="admin"  @if($employee->type == 'admin') echo 'selected' ; @endif >admin</option>
                                   
                                </select>
                            </div>
                          </div> 

                     
                       
                        <div class="row my-3">
                            <div class="col-md-12">
                                <button class="submit-inp">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>    
                </div>
          

@endsection