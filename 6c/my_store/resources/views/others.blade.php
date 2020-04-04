@extends('app.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-white">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      </div><!-- /.col -->
      <div class="col-sm-6">
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<div class="content">
  <div class="container">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i> Success</h5>
      {{session("success")}}.
    </div>
    @endif
    <div class="row justify-content-center" id="layanan">
     <div class="col-lg-6 ">
      <h4 style="color: #3F69D0;">Cashier</h4>
      <a href="" class="c-app" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Add Cashier</a>
      <div class="row mt-2">
        @foreach($cashiers as $cashier)
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <label class="c-app d-block" id="Ca{{$cashier->id}}">{{$cashier->name}}</label>
              <a href="" class="c-app editCa" data-toggle="modal" data-target="#modal-cashier-edit" data-id="{{$cashier->id}}"><small><i class="fas fa-edit"></i></small></a>
              <a href="{{route('cashier.delete', $cashier->id)}}" class="c-app ml-2" onclick="return confirm('Apakah anda yakin akan menghapus data ?')">
                <small><i class="fas fa-trash"></i></small>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
     </div>
     <div class="col-lg-5 offset-lg-1">
      <h4 style="color: #3F69D0;">Category</h4>
      <a href="" class="c-app" data-toggle="modal" data-target="#modal-category"><i class="fas fa-plus"></i> Add Category</a>
      <div class="row mt-2">
        @foreach($categories as $category)
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <label class="c-app d-block" id="C{{$category->id}}">{{$category->name}}</label>
              <a href="" class="c-app editC" data-toggle="modal" data-target="#modal-category-edit" data-id="{{$category->id}}"><small><i class="fas fa-edit"></i></small></a>
              <a href="{{route('category.delete', $category->id)}}" class="c-app ml-2" onclick="return confirm('Apakah anda yakin akan menghapus data ?')">
                <small><i class="fas fa-trash"></i></small>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
     </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



 <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title c-app">Add Cashier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('cashier.add')}}"method="post">
        {{csrf_field()}}
        <div class="modal-body">
          <span class="c-app text-bold">Name Cashier</span>
          <input type="text" name="name" class="form-control mb-2" required="">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn b-app px-4">Save</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

 <div class="modal fade" id="modal-category">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title c-app">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('category.add')}}"method="post">
        {{csrf_field()}}
        <div class="modal-body">
          <span class="c-app text-bold">Name Category</span>
          <input type="text" name="name" class="form-control mb-2" required="">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn b-app px-4">Save</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

 <div class="modal fade" id="modal-category-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title c-app">Edit Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('category.edit')}}"method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="modal-body">
          <input type="hidden" name="id" id="idCategory">
          <span class="c-app text-bold">Name Category</span>
          <input type="text" name="name" class="form-control mb-2" required="" id="nameCategory">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn b-app px-4">Save</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

 <div class="modal fade" id="modal-cashier-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title c-app">Edit Cashier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('cashier.edit')}}"method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="modal-body">
          <input type="hidden" name="id" id="idCashier">
          <span class="c-app text-bold">Name Cashier</span>
          <input type="text" name="name" class="form-control mb-2" required="" id="nameCashier">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn b-app px-4">Save</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection