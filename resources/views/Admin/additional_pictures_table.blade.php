@extends('Admin.index')
@section('body')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Əlavə şəkillər Cədvəli</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Ev</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Əlavə şəkillər Cədvəli</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container col-2">
                                <br>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Əlavə et</button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Əlavə etmə</h4>
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="main_form">
                                                    @csrf
                                                    <label class="ml-2">Yerin adı</label>
                                                    <select class="form-control" id="select">
                                                        @foreach($place_names as $key=>$value)
                                                            <option id="{{$value->id}}">{{$value->name}}</option>
                                                        @endforeach
                                                    </select><br>
                                                    <input type="file" name="add_picture" class="form-control"><br>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark">Əlavə et</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">ID</th>
                                        <th class="text-center" scope="col">Yerin adı</th>
                                        <th class="text-center" scope="col">Əlavə şəkil</th>
                                        <th class="text-center" scope="col">Düzəlt / Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($add_pic_datas as $key=>$value)
                                        <tr id="{{$value->id}}">
                                            <th class="text-center" scope="row">{{$key+1}}</th>
                                            <td class="text-center">{{$value->place_name}}</td>
                                            <td class="text-center">{{$value->additional_picture}}</td>
                                            <td class="text-center"><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal HTML -->
                            <div id="myConfirm" class="modal fade" name="">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bu məlumatları silmək istədiyinə əminsən?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Xeyr</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Bəli</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <script>
            $('.modal-footer').on('click','.btn-dark',function(){
                var formData = new FormData($('#main_form')[0]);
                var place_name = $('#select').find(':selected').val();
                var add_picture = $('input[name=add_picture]').val().replace(/C:\\fakepath\\/i, '');
                var id = $('#select').find(':selected').attr('id');
                formData.append('id',id);
                $.ajax({
                    type: "POST",
                    url: "add_additional_pictures_table",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.status == 'success') {
                            $('tbody').append('<tr id="'+response.message+'"><th class="text-center" scope="row"></th>\n' +
                                '<td class="text-center">'+place_name+'</td>\n' +
                                '<td class="text-center">'+add_picture+'</td>\n' +
                                '<td class="text-center"><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                                '</tr>');
                            $('#myModal').modal('hide');
                            sehifele();
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            });

            function sehifele() {
                var i = 0;
                $('tbody tr').each(function () {
                    $(this).find('th:eq(0)').text(++i);
                })
            }

            $('table tbody').on('click','.btn-danger',function(){
                var id = $(this).parents('tr').attr('id');
                $('#myConfirm').attr('name',id);
            });

            $('#myConfirm').on("click", ".btn-danger" ,function()
            {
                var id = $(this).parents('#myConfirm').attr('name');
                var tr = $('#'+id+'');
                $.ajax({
                    type: "POST",
                    url: "add_pic_delete",
                    data: {
                        'id':id, "_token": "{{ csrf_token() }}"
                    },
                    success:function(response)
                    {
                        if(response.status == 'success')
                        {
                            tr.remove();
                            sehifele();
                        }
                    }
                })
            });
        </script>
@endsection
