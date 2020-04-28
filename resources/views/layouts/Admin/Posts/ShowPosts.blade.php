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
              <h1> لیست پست ها</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active"> لیست پست ها</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Button trigger modal -->
  
<!--Add Post Data Modal -->
<div class="modal fade" id="postaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافه کردن پست جدید </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form class="addform">
            <div class="modal-body">

                <div class="form-group">
                    <label> عنوان متن </label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label> محتوای متن</label>
                    <input type="text" class="form-control" name="content" placeholder="Enter Content">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button type="submit" class="btn btn-primary">  ارسال</button>
            </div>
        </form>
    </div>
    </div>
</div>
<!--End of Add post  Modal -->

<!--Edit Post Modal -->
<div class="modal fade" id="postEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> ویرایش متن  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form class="EditFormID">
            <div class="modal-body">
                {{ csrf_field() }}
                {{ method_field("PUT") }}

                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label> عنوان متن </label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label> محتوای متن</label>
                    <input type="text" class="form-control" name="content" id="content" placeholder="Enter Content">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button type="submit" class="btn btn-primary">  ویرایش</button>
            </div>
        </form>
    </div>
    </div>
</div>
<!--End of Edit Post Modal -->

<!--Delete Post Modal -->
<div class="modal fade" id="postDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> حذف محصول</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form id="DeleteFormID">
            <div class="modal-body">
                {{ csrf_field() }}
                {{ method_field('delete') }}

                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="delete_id" >
                    <p>Are you Sure !!</p>
                </div>

            </div>
            <div class="modal-footer bg-danger">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button type="submit" class="btn btn-primary"> حذف  </button>
            </div>
        </form>
    </div>
    </div>
</div>
<!--End of Delete Product Modal -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postaddmodal">
                      اضافه کردن پست جدید  
                </button>
                <table id="example1" class="table table-bordered table-striped" id="laravel_datatable">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content </th>
                    {{-- <th>Create Date </th>
                    <th>Update Date </th> --}}
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td> 
                        <td>{{$post->content}}</td>  
                        {{-- <td>{{$post->created_at}}</td>  
                        <td>{{$post->updated_at}}</td>   --}}
                        <td>
                            <a href="#" class="btn btn-primary btn-success editbtn" data-toggle="modal" data-target="#postEditModal">
                                ویرایش
                            </a>
                            <a href="#" class="btn btn-primary btn-danger deletebtn" data-toggle="modal" data-target="#postDeleteModal">
                                حذف 
                            </a>
                        </td>
                        
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


{{-- Post Insert Script --}}
<script type="text/javascript">

    $(document).ready(function(){
        // alert('ok');
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            $(".addform").on('submit',function(e){
                e.preventDefault();
                // alert('ok');
                $.ajax({
                    url: '/postadd',
                    method: 'POST',
                    dataType: 'json',
                    data: $('.addform').serialize(),
                    success: function(response)
                    {
                        console.log(response)
                        $('#postaddmodal').modal('hide')
                        alert('پست با موفقیت ارسال شد');
                        location.reload();
                    },
                    error: function(error)
                    {
                        console.log(error)
                        alert('پست ارسال نشد');
                    }
                });
            });
        });
</script>  
{{-- End of Post Insert Script --}}

{{-- Post Edit Script --}}
<script>
    $(document).ready(function(){
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

        $('.editbtn').on('click', function(){
            $('#postEditModal').modal('show');

            $tr = $(this).closest("tr");

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#id').val(data[0]);
            $('#title').val(data[1]);
            $('#content').val(data[2]);
        });

        $('.EditFormID').on('submit', function(e){
            e.preventDefault();

            var id = $('#id').val();
            $.ajax({
                type: "PUT",
                url: 'postupdate/'+id,
                dataType: 'json',
                data: $('.EditFormID').serialize(),
                success: function(response)
                {
                    console.log(response)
                    $('#postEditModal').modal('hide')
                    alert('ویرایش با موفقیت انجام شد');
                    location.reload();
                },
                error: function(error)
                {
                    console.log(error)
                }
            });
        });
    });
</script>
{{-- End of Post Edit Script --}}

{{-- Product Delete Script --}}
<script>
    $('.deletebtn').on('click', function(){
        $('#postDeleteModal').modal('show');

        $tr = $(this).closest("tr");

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id').val(data[0]);
    });

    $('#DeleteFormID').on('submit', function(e){
        e.preventDefault();

        var id = $('#delete_id').val();

        $.ajax({
            type: "delete",
            url: "postdelete/"+id,
            dataType: 'json',
            data: $('#DeleteFormID').serialize(),
            success: function(response)
            {
                console.log(response)
                $('#postDeleteModal').modal('hide')
                alert('محصول حذف شد');
                location.reload();
            },
            error: function(error)
            {
                console.log(error)
            }
        });
    });
</script>
{{-- End of Product Delete Script --}}

@endsection