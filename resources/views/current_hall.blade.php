@extends('main_index')
@section('main')
@foreach($main_datas as $key=>$value)
    <div class="current_hall">
        <div class="selected_hall">
            <div class="hall_infos">
                <div class="hall_images">
                    <div class="hall_main_image" style="background-image: url('{{asset('startnow/images/'.$value->main_picture.'')}}');"></div>
                    <div class="hall_additional_image">
                        <div class="hall_additional_images" style="background-image: url('{{asset('startnow/images/'.$value->main_picture.'')}}');"></div>
                        @foreach($additional_pictures as $key3=>$value3)
                            <div class="hall_additional_images" style="background-image: url('{{asset('startnow/images/'.$value3->additional_picture.'')}}');"></div>
                        @endforeach
                    </div>
                </div>
                <div class="hall_infs">
                    <p class="place_name">{{$value->name}}
                        @if($value->discount_rate != 0)
                            <span class="discount_rate">({{$value->discount_rate}}% endirim)</span>
                        @endif
                    </p>
                    <p class="category">{{$value->category}}</p>
                    <p class="about">{{$value->information}}</p>
                    <span class="prices_tag">Qiymətlər : </span>
                    <pre class="prices_info" id="custom_scroll">{{str_replace(".", "\n", $value->prices_info)}}</pre>
                </div>
            </div>
            <div class="hall_contacts">
                <p class="coach">Baş məşqçi</p>
                <h6 class="coach_name">{{$value->coach_name_surname}}</h6>
                <div class="hall_contacts_footer">
                    <div class="info_boxes">
                        <p class="labels">Əlaqə</p>
                        <p class="contact_info">{{$value->number}}</p>
                    </div>
                    <div class="info_boxes">
                        <p class="labels">Ünvan</p>
                        <a href="{{$value->location_link}}" class="contact_info">{{$value->location}}</a>
                    </div>
                    <div class="info_boxes">
                        <p class="labels">Sosial media</p>
                        @if($value->website != '')
                            <div class="contact_infos"><i class="fa fa-globe icons"></i><a href="{{$value->website}}" class="contact_info">@if(strlen($value->website) > 24){{substr($value->website,0,24)}}...@else{{$value->website}}@endif</a></div>
                        @endif
                        @if($value->facebook != '')
                            <div class="contact_infos"><i class="fa fa-facebook icons"></i><a href="{{$value->facebook}}" class="contact_info">@if(strlen($value->facebook) > 24){{substr($value->facebook,0,24)}}...@else{{$value->facebook}}@endif</a></div>
                        @endif
                        @if($value->instagram != '')
                            <div class="contact_infos"><i class="fa fa-instagram icons"></i><a href="{{$value->instagram}}" class="contact_info">@if(strlen($value->instagram) > 24){{substr($value->instagram,0,24)}}...@else{{$value->instagram}}@endif</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
