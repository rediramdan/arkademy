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
     <div class="col-lg-8">
        <h4 style="color: #3F69D0;">Products</h4>
      <table class="table table-striped" width="100%">
        <tr>
          <th>No.</th>
          <th>Cashier</th>
          <th>Product</th>
          <th>Category</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        <?php $i=1?>
        @foreach($products as $product)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$product->cashier}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->category}}</td>
          <td>{{$product->price}}</td>
          <td>
              <a href="{{route('product.delete', $product->id)}}" class="c-app ml-2" onclick="return confirm('Apakah anda yakin akan menghapus data ?')">
                              <small><i class="fas fa-trash"></i></small>
              </a>
          </td>
        </tr>
        @endforeach
      </table>
     </div>
     <div class="col-lg-4">
      <label class="c-app d-block"><i class="fas fa-plus"></i> Add product</label>
      <form action="{{route('product.add')}}" method="POST">
        {{csrf_field()}}
        <span class="c-app text-bold">Name product</span>
        <input type="text" name="name" class="form-control mb-2" required="">
        <span class="c-app text-bold">Category</span>
        <select class="form-control mb-2" name="id_category" required="">
          <option value="" disabled="" selected="">-Select Category-</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        <span class="c-app text-bold">Cashier</span>
        <select class="form-control mb-2" name="id_cashier" required="">
          <option value="" disabled="" selected="">-Select Cashier-</option>
          @foreach($cashiers as $cashier)
          <option value="{{$cashier->id}}">{{$cashier->name}}</option>
          @endforeach
        </select>
        <span class="c-app text-bold">Price</span>
        <input type="number" name="price" class="form-control mb-2" required="">
        <button type="submit" class="btn b-app form-control mt-2"><i class="fas fa-save"></i> Save</button>
      </form>
     </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection