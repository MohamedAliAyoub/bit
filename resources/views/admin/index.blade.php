@extends('admin.layouts')


@section('content')
<div class="container-fluid">
<div class="box" style="">
           

  <div class="box-header">
    <h3 class="box-title">Employees</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
          
    {!! $dataTable->table([
    'class'=>'dataTable table table-striped table-hover  table-bordered',
    'style'=>'width:100% !important ; font-size:20px'
    ]) !!}
  </div>
  <!-- /.box-body -->
</div>
</div>
@endsection

@push('scripts')
<link rel="stylesheet" href="/js/buttons/css/buttons.dataTables.css">
<script src="/js/buttons/js/dataTables.buttons.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>

	
</script>{!! $dataTable->scripts() !!}
@endpush

