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
                    <h4 class="page-title">Mesajlar Cədvəli</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Ev</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Mesajlar Cədvəli</li>
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">ID</th>
                                        <th class="text-center" scope="col">Ad</th>
                                        <th class="text-center" scope="col">Soyad</th>
                                        <th class="text-center" scope="col">Email</th>
                                        <th class="text-center" scope="col">Mesaj</th>
                                        <th class="text-center" scope="col">Görüldü</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($message_datas as $key=>$value)
                                        @if($value->seen == 0)
                                        <tr id="{{$value->id}}">
                                            <th class="text-center" scope="row">{{$key+1}}</th>
                                            <td class="text-center">{{$value->name}}</td>
                                            <td class="text-center">{{$value->surname}}</td>
                                            <td class="text-center">{{$value->email}}</td>
                                            <td class="text-center">{{$value->message}}</td>
                                            <td class="text-center"><button class="btn btn-primary"><i class="fa fa-check"></i></button><br><br><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        @endif
                                        @if($value->seen == 1)
                                            <tr id="{{$value->id}}">
                                                <th class="text-center" scope="row">{{$key+1}}</th>
                                                <td class="text-center">{{$value->name}}</td>
                                                <td class="text-center">{{$value->surname}}</td>
                                                <td class="text-center">{{$value->email}}</td>
                                                <td class="text-center">{{$value->message}}</td>
                                                <td class="text-center"><button class="btn btn-primary" disabled><i class="fa fa-check"></i></button><br><br><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        @endif
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
                    url: "message_delete",
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

            $('table tbody').on('click','.btn-primary',function(){
                var id = $(this).parents('tr').attr('id');
                var tr = $(this).parents('tr');
                $.ajax({
                    type: "POST",
                    url: "message_seen",
                    data: {
                        'id':id, "_token": "{{ csrf_token() }}"
                    },
                    success:function(response)
                    {
                        if(response.status == 'success')
                        {
                            tr.find('.btn-primary').prop( "disabled", true );
                        }
                    }
                })
            });
        </script>
@endsection
