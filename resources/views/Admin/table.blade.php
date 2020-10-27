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
                        <h4 class="page-title">Əsas Cədvəl</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="admin_main_table">Ev</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Əsas Cədvəl</li>
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
                                                        <input type="text" name="place_name" placeholder="Müəssisənin adı" class="form-control"><br>
                                                        <input type="text" name="coach_name_surname" placeholder="Məşqçinin adı soyadı" class="form-control"><br>
                                                        <input type="text" name="location" placeholder="Məkan" class="form-control"><br>
                                                        <input type="file" name="main_picture" placeholder="Müəssisənin əsas şəkli" class="form-control"><br>
                                                        <input type="text" name="category" placeholder="Kateqoriya" class="form-control"><br>
                                                        <input type="text" name="information" placeholder="Haqqında məlumat" class="form-control"><br>
                                                        <input type="number" name="price" placeholder="Aylıq qiyməti" class="form-control"><br>
                                                        <input type="number" name="discount_rate" placeholder="Endirim faizi" class="form-control"><br>
                                                        <input type="text" name="number" placeholder="Əlaqə Nömrəsi" class="form-control"><br>
                                                        <input type="text" name="city" placeholder="Şəhər" class="form-control"><br>
                                                        <input type="text" name="website" placeholder="Veb sayt" class="form-control"><br>
                                                        <input type="text" name="facebook" placeholder="Facebook" class="form-control"><br>
                                                        <input type="text" name="instagram" placeholder="Instagram" class="form-control"><br>
                                                        <input type="text" name="prices_info" placeholder="Qiymətlər haqqında məlumat" class="form-control"><br>
                                                        <input type="text" name="location_link" placeholder="Məkan linki" class="form-control"><br>
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
                                            <tr id="less_info">
                                                <th class="text-center" scope="col">ID</th>
                                                <th class="text-center" scope="col">Ad</th>
                                                <th class="text-center" scope="col">Məşqçinin adı</th>
                                                <th class="text-center" scope="col">Məkan</th>
                                                <th class="text-center" scope="col">Əlaqə Nömrəsi</th>
                                                <th class="text-center" scope="col">Şəhər</th>
                                                <th class="text-center" scope="col">Veb sayt</th>
                                                <th class="text-center" scope="col">Düzəlt/Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($main_datas as $key=>$value)
                                                <tr id="{{$value->id}}">
                                                    <th class="text-center" scope="row">{{$key+1}}</th>
                                                    <td class="text-center">{{$value->name}}</td>
                                                    <td class="text-center">{{$value->coach_name_surname}}</td>
                                                    <td class="text-center">{{$value->location}}</td>
                                                    <td class="text-center">{{$value->number}}</td>
                                                    <td class="text-center">{{$value->city}}</td>
                                                    <td class="text-center">{{$value->website}}</td>
                                                    <td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button><br><br><button class="btn btn-primary"><i class="fa fa-info"></i></button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal HTML -->
                                <div id="myConfirm" class="modal fade" name="confirm">
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

                                <div class="modal fade" id="myModal2" edit="0" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Düzəliş etmə</h4>
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="main_form2">

                                                    <input id="12345" type="text" name="place_name" placeholder="Müəssisənin adı" class="form-control"><br>
                                                    <input type="text" name="coach_name_surname" placeholder="Məşqçinin adı soyadı" class="form-control"><br>
                                                    <input type="text" name="location" placeholder="Məkan" class="form-control"><br>
                                                    <input type="file" name="main_picture" placeholder="Müəssisənin əsas şəkli" class="form-control"><br>
                                                    <input type="text" name="category" placeholder="Kateqoriya" class="form-control"><br>
                                                    <input type="text" name="information" placeholder="Haqqında məlumat" class="form-control"><br>
                                                    <input type="number" name="price" placeholder="Aylıq qiyməti" class="form-control"><br>
                                                    <input type="number" name="discount_rate" placeholder="Endirim faizi" class="form-control"><br>
                                                    <input type="text" name="number" placeholder="Əlaqə Nömrəsi" class="form-control"><br>
                                                    <input type="text" name="city" placeholder="Şəhər" class="form-control"><br>
                                                    <input type="text" name="website" placeholder="Veb sayt" class="form-control"><br>
                                                    <input type="text" name="facebook" placeholder="Facebook" class="form-control"><br>
                                                    <input type="text" name="instagram" placeholder="Instagram" class="form-control"><br>
                                                    <input type="text" name="prices_info" placeholder="Qiymətlər haqqında məlumat" class="form-control"><br>
                                                    <input type="text" name="location_link" placeholder="Məkan linki" class="form-control"><br>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success">Düzəliş et</button>
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
                    var category = $('input[name=category]').val().trim();
                    var place_name = $('input[name=place_name]').val().trim();
                    var coach_name_surname = $('input[name=coach_name_surname]').val().trim();
                    var location = $('input[name=location]').val().trim();
                    var main_picture = $('input[name=main_picture]').val().replace(/C:\\fakepath\\/i, '');
                    var information = $('input[name=information]').val().trim();
                    var price = $('input[name=price]').val().trim();
                    var discount_rate = $('input[name=discount_rate]').val().trim();
                    var number = $('input[name=number]').val().trim();
                    var city = $('input[name=city]').val().trim();
                    var website = $('input[name=website]').val().trim();
                    var facebook = $('input[name=facebook]').val().trim();
                    var instagram = $('input[name=instagram]').val().trim();
                    var prices_info = $('input[name=prices_info]').val().trim();
                    var location_link = $('input[name=location_link]').val().trim();
                    $.ajax({
                        type: "POST",
                        url: "add_main_table",
                        data: formData,
                        cache:false,
                        processData:false,
                        contentType:false,
                        success:function (response){
                            if (response.status == 'success') {
                                $('tbody').append('<tr id="'+response.message+'"><th class="text-center" scope="row"></th>\n' +
                                    '<td class="text-center">'+place_name+'</td>\n' +
                                    '<td class="text-center">'+coach_name_surname+'</td>\n' +
                                    '<td class="text-center">'+location+'</td>\n' +
                                    '<td class="text-center">'+main_picture+'</td>\n' +
                                    '<td class="text-center">'+category+'</td>\n' +
                                    '<td class="text-center">'+information+'</td>\n' +
                                    '<td class="text-center">'+price+'₼</td>\n' +
                                    '<td class="text-center">'+discount_rate+'%</td>\n' +
                                    '<td class="text-center">'+number+'</td>\n' +
                                    '<td class="text-center">'+city+'</td>\n' +
                                    '<td class="text-center">'+website+'</td>\n' +
                                    '<td class="text-center">'+facebook+'</td>\n' +
                                    '<td class="text-center">'+instagram+'</td>\n' +
                                    '<td class="text-center">'+prices_info+'</td>\n' +
                                    '<td class="text-center">'+location_link+'</td>\n' +
                                    '<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
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
                        url: "place_delete",
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

                $('table tbody').on("click", ".btn-info" ,function(){
                    var tr = $(this).parents('tr');
                    var id = tr.attr('id');
                    $('#myModal2').attr('edit',id);
                    var name = tr.find('td:eq(0)').text();
                    var coach_name_surname = tr.find('td:eq(1)').text();
                    var location = tr.find('td:eq(2)').text();
                    var main_picture = tr.find('td:eq(3)').text();
                    var category = tr.find('td:eq(4)').text();
                    var information = tr.find('td:eq(5)').text();
                    var price = tr.find('td:eq(6)').text();
                    var discount_rate = tr.find('td:eq(7)').text();
                    var number = tr.find('td:eq(8)').text();
                    var city = tr.find('td:eq(9)').text();
                    var website = tr.find('td:eq(10)').text();
                    var facebook = tr.find('td:eq(11)').text();
                    var instagram = tr.find('td:eq(12)').text();
                    var prices_info = tr.find('td:eq(13)').text();
                    var location_link = tr.find('td:eq(14)').text();
                    var form = $('#myModal2').find('#main_form2');
                    form.find('input[type=text]:eq(0)').val(name);
                    form.find('input[type=text]:eq(1)').val(coach_name_surname);
                    form.find('input[type=text]:eq(2)').val(location);
                    form.find('input[type=text]:eq(3)').val(category);
                    form.find('input[type=text]:eq(4)').val(information);
                    form.find('input[type=number]:eq(0)').val(price.substr(0, price.length-1));
                    form.find('input[type=number]:eq(1)').val(discount_rate.substr(0, discount_rate.length-1));
                    form.find('input[type=text]:eq(5)').val(number);
                    form.find('input[type=text]:eq(6)').val(city);
                    form.find('input[type=text]:eq(7)').val(website);
                    form.find('input[type=text]:eq(8)').val(facebook);
                    form.find('input[type=text]:eq(9)').val(instagram);
                    form.find('input[type=text]:eq(10)').val(prices_info);
                    form.find('input[type=text]:eq(11)').val(location_link);



                });

                $('#myModal2 .modal-footer').on("click", ".btn-success",function(){
                    var formData = new FormData($('#main_form2')[0]);
                    var edit_id = $('#myModal2').attr('edit');
                    formData.append('_token', "{{ csrf_token() }}");
                    formData.append('id', edit_id);
                    var main_picture = tr.find('td:eq(3)').text();
                    var new_place_name=$('#myModal2 .modal-body input[name="place_name"]').val();
                    var new_coach_name=$('#myModal2 .modal-body input[name="coach_name"]').val();
                    var new_location=$('#myModal2 .modal-body input[name="location"]').val();
                    var new_main_picture=$('#myModal2 .modal-body input[name="main_picture"]').val().replace(/C:\\fakepath\\/i, '');
                    var new_category=$('#myModal2 .modal-body input[name="category"]').val();
                    var new_information=$('#myModal2 .modal-body input[name="information"]').val();
                    var new_price=$('#myModal2 .modal-body input[name="price"]').val();
                    var new_discount_rate=$('#myModal2 .modal-body input[name="discount_rate"]').val();
                    var new_number=$('#myModal2 .modal-body input[name="number"]').val();
                    var new_city=$('#myModal2 .modal-body input[name="city"]').val();
                    var new_website=$('#myModal2 .modal-body input[name="website"]').val();
                    var new_facebook=$('#myModal2 .modal-body input[name="facebook"]').val();
                    var new_instagram=$('#myModal2 .modal-body input[name="instagram"]').val();
                    var new_prices_info=$('#myModal2 .modal-body input[name="prices_info"]').val();
                    var new_location_link=$('#myModal2 .modal-body input[name="location_link"]').val();
                    $.ajax({
                        type: "POST",
                        url: "/place_update",

                        cache:false,
                        processData:false,
                        contentType:false,
                        data: formData,
                        success:function(response)
                        {
                            console.log(response)
                            if(response.status == 'success')
                            {
                                tr.find('td:eq(0)').text(new_place_name);
                                tr.find('td:eq(1)').text(new_coach_name_surname);
                                tr.find('td:eq(2)').text(new_location);
                                if(new_main_picture != ''){
                                    tr.find('td:eq(3)').text(new_main_picture);
                                }
                                else{
                                    tr.find('td:eq(3)').text(main_picture);
                                }
                                tr.find('td:eq(4)').text(new_category);
                                tr.find('td:eq(5)').text(new_information);
                                tr.find('td:eq(6)').text(new_price+'₼');
                                tr.find('td:eq(7)').text(new_discount_rate+'%');
                                tr.find('td:eq(8)').text(new_number);
                                tr.find('td:eq(9)').text(new_city);
                                tr.find('td:eq(10)').text(new_website);
                                tr.find('td:eq(11)').text(new_facebook);
                                tr.find('td:eq(12)').text(new_instagram);
                                tr.find('td:eq(13)').text(new_prices_info);
                                tr.find('td:eq(14)').text(new_location_link);
                                tr.find('td:eq(15)').html('<button class="btn btn-info" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button>');
                                toastr.success('Düzəliş edildi');
                                $('#myModal2').modal('hide');
                            }
                        },
                        error: function (request, error, response) {
                            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                        }
                    });
                });
                $('.text-center').on("click", ".btn-primary",function(){
                    var tr = $(this).parents('tr');
                    $(this).parents('tr').html('');
                    var id = tr.attr('id');
                    $.ajax({
                        type: "POST",
                        url: "/add_info",
                        data: {'id':id,   "_token": "{{ csrf_token() }}"},
                        success:function(response){
                            if (response.status == 'success') {
                                $('.table #less_info').html('');
                                $('.table #less_info').append(`
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">Ad</th>
                                <th class="text-center" scope="col">Məşqçinin adı</th>
                                <th class="text-center" scope="col">Məkan</th>
                                <th class="text-center" scope="col">Əsas şəkil</th>
                                <th class="text-center" scope="col">Kateqoriya</th>
                                <th class="text-center" scope="col">Haqqında</th>
                                <th class="text-center" scope="col">Qiymət</th>
                                <th class="text-center" scope="col">Endirim faizi</th>
                                <th class="text-center" scope="col">Əlaqə Nömrəsi</th>
                                <th class="text-center" scope="col">Şəhər</th>
                                <th class="text-center" scope="col">Veb sayt</th>
                                <th class="text-center" scope="col">Facebook</th>
                                <th class="text-center" scope="col">Instagram</th>
                                <th class="text-center" scope="col">Qiymətlər haqqında məlumat</th>
                                <th class="text-center" scope="col">Məkan linki</th>
                                <th class="text-center" scope="col">Düzəlt/Sil</th>
                                `);

                                response.result.forEach(add_info);
                                function add_info(item, index){
                                    $('.table #'+id+'').append(`
                                    <th class="text-center" scope="row">${index+1}</th>
                                    <td class="text-center">${item['name']}</td>
                                    <td class="text-center">${item['coach_name_surname']}</td>
                                    <td class="text-center">${item['location']}</td>
                                    <td class="text-center">${item['main_picture']}</td>
                                    <td class="text-center">${item['category']}</td>
                                    <td class="text-center">${item['information']}</td>
                                    <td class="text-center">${item['price']}₼</td>
                                    <td class="text-center">${item['discount_rate']}%</td>
                                    <td class="text-center">${item['number']}</td>
                                    <td class="text-center">${item['city']}</td>
                                    <td class="text-center">${item['website']}</td>
                                    <td class="text-center">${item['facebook']}</td>
                                    <td class="text-center">${item['instagram']}</td>
                                    <td class="text-center">${item['prices_info']}</td>
                                    <td class="text-center">${item['location_link']}</td>
                                    <td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button><br><br><button class="btn btn-primary"><i class="fa fa-info"></i></button></td>
                                    `);
                                }
                            }
                        },
                        error: function (request, error, response) {
                            toastr.error('Xəta baş verdi!!!');
                        }
                    });
                });
            </script>
@endsection
