@extends('admin.layouts')


@section('content')


 
     <div class="container-fluid table-cont" style="margin-top:100px;padding: 10px 80px">
                    <div class="title-table">
                          <h3> Increase Bonuc </h3>  
                    </div>




                <form method="POST" action="{{ route('bonuc.update',$salary->id) }}">

                    {{ csrf_field() }}

                    
                
                        <div class="row">
                            <div class="col-md-8 my-3 add-page">
                                <label>bonus   : </label><br>
                                <input type="text" name="bonus" class="user-inp"  value="10">
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