@extends('layouts.Admin.MasterAdmin')
@section('content1')

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> لیست محصولات</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active"> لیست محصولات</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Button trigger modal -->
  
  
  <!--Add Product Data Modal -->
<div class="modal fade" id="productaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form id="addform">
            <div class="modal-body">

                <div class="form-group">
                    <label>شماره محصول </label>
                    <input type="text" class="form-control" name="id" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label>نام محصول </label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label>توضیحات محصول</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description">
                </div>

                <div class="form-group">
                    <label>دسته بندی محصول</label>
                    <input type="text" class="form-control" name="category" placeholder="Enter Category">
                </div>

                <div class="form-group">
                    <label>قیمت محصول</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price">
                </div>

                <div class="form-group">
                    <label> موجودی انبار</label>
                    <input type="text" class="form-control" name="number" placeholder="Enter Number">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
    </div>
</div>
  
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productaddmodal">
                    اضافه کردن محصول
                </button>
                <table id="example1" class="table table-bordered table-striped" id="laravel_datatable">
                  <thead>
                  <tr>
                    <th> ID</th>
                    <th>Name</th>
                    <th>Description </th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Number</th>
                    <th>Edit</th>
                    <th>Deletet</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td> 
                        <td>{{$product->description}}</td>  
                        <td>{{$product->category->persian_name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->number}}</td>
                        {{-- <td>{{$user->updated_at}}</td> --}}
                        {{-- <span></span> --}}
                        <td><a href="{{"/edit/".$product->id}}">ویرایش</td>
                        <td><a href="{{"/delete/".$product->id}}">حذف</td>
                    </tr>
                    @endforeach
  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

<script type="text/javascript">

    $(document).ready(function(){
        
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            $("#addform").on('submit',function(e){
                e.preventDefault();
                
                $.ajax({
                    url: '/productadd',
                    method: 'POST',
                    dataType: 'json',
                    data: $('#addform').serialize(),
                    success: function(response)
                    {
                        console.log(response)
                        $('#productaddmodal').modal('hide')
                        alert('محصول با موفقیت به لیست اضافه شد');
                        location.reload();
                    },
                    error: function(error)
                    {
                        console.log(error)
                        alert('محصول به لیست اضافه نشد');
                    }
            });
        });
    });
</script>  

@endsection


