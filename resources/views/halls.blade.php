@extends('main_index')
@section('main')
<div class="search_div">
    <div class="search_box">
        <input id="srch" class="search" type="search" name="search" placeholder="Axtar...">
        <button class="search_btn">Axtar</button>
    </div>
</div>
<div class="halls_box">
    @foreach($main_datas as $key=>$value)
    <div class="hall_boxes" id="{{$value->id}}">
		<a href="/current_hall/{{$value->id}}"  class="image_link get_hall"><div class="main_image" style="background-image: url('{{asset('startnow/images/'.$value->main_picture.'')}}')">
			<div class="price"><p class="azn">{{$value->price}}<sub>AZN</sub></p></div>
        </div></a>
        @if($value->discount_rate != 0)
        <span class="discount"> - {{$value->discount_rate}}% Endİrİm Mövcuddur</span>
        @endif
        <a href="current_hall/{{$value->id}}"  class="place_name get_hall">{{$value->name}}</a>
        <p class="category">{{$value->category}}</p>
        <p class="city"><i class="fa fa-map-marker"></i>{{$value->city}} şəhəri</p>
        <p class="place_info">{{substr($value->information, 0, 170)}}...</p>
	</div>
    @endforeach
    <div class="paginationn">
        {{ $main_datas->links() }}
    </div>
</div>
<script>
    $('.search_div .search_box').on('change', '.search', function(){
        var name = $('.search').val();
        $.ajax({
            type: "POST",
            url: "/search",
            data: {'name':name,   "_token": "{{ csrf_token() }}"},
            success:function(response){
                if (response.status == 'success') {
                    $('.halls_box').html('');
                    response.result.forEach(search);
                    function search(item, index){
                        var picture = item['main_picture'];
                        var info = item['information'];
                        var id = item['id'];
                        var information = info.substr(0,170);
                        $('.halls_box').append(`
                        <div class="hall_boxes" id="${item['id']}">
                        \t\t<a href="current_hall/${item['id']}"  class="image_link get_hall"><div class="main_image" style="background-image: url('{{asset('startnow/images/${picture}')}}')">
                        \t\t\t<div class="price"><p class="azn">${item['price']}<sub>AZN</sub></p></div>
                        </div></a>
                        <span class="discount ${item['id']}"></span>
                        <a href="current_hall/${item['id']}"  class="place_name get_hall">${item['name']}</a>
                        <p class="category">${item['category']}</p>
                        <p class="city"><i class="fa fa-map-marker"></i>${item['city']} şəhəri</p>
                        <p class="place_info">${information}...</p>
                        \t</div>
                        `);
                        if(item['discount_rate'] != 0){
                            $('.'+id+'').text(' - '+item['discount_rate']+'% Endİrİm Mövcuddur');
                        }
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
