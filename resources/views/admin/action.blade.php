<form action="{{ url('employee/'.$id) }}" method="post">



<a href="{{ url('employee/'.$id.'/edit') }}" class="btn btn-info"><small>edit</small></a>


	
                    @csrf
                    {{ method_field('delete') }}

<button class="btn btn-danger"> <small>delete</small> </i></button> 

<a href="{{ url('salary/'.$id.'/add') }}" class="btn btn-info"><small>Sallary</small></a>

</form>