@extends('main_index')
@section('main')
<div class="contacts_2">
	<div class="contacts_inner">
		<div class="inner_1">
			<h2 class="contact">Əlaqə</h2>
			<p>Əlaqə nömrəsi: <a href="tel:+994503826922"> +994 50 382 69 22</a></p>
			<p>Elektron poçt ünvanı: <a href="mailto:zaltap@gmail.com"> zaltap@gmail.com</a></p>
			<p>Web sayt: <a href="https://huseynvsal.azurewebsites.net/">Şəxsi saytım</a></p>
		</div>
		<div class="inner_2">
			<div class="name_surname">
				<input class="n_s" type="text" name="name" placeholder="Ad">
				<input class="n_s" type="text" name="surname" placeholder="Soyad">
			</div>
			<div class="other_infos">
				<input class="o_i" type="email" name="email" placeholder="Email">
				<textarea name='message' class="message_text" placeholder="Mesaj"></textarea>
				<button class="send_btn">Mesajı yolla</button>
			</div>
		</div>
	</div>
</div>
<script>
    $('.inner_2 .other_infos').on('click', '.send_btn', function(){
        var inner = $(this).parents('.inner_2');
        var name = inner.find('input[name=name]').val();
        var surname = inner.find('input[name=surname]').val();
        var email = inner.find('input[name=email]').val();
        var message = inner.find('textarea[name=message]').val();
        $.ajax({
            type: "POST",
            url: "add_messages_table",
            data: {"_token": "{{ csrf_token() }}",'name':name,'surname':surname,'email':email,'message':message},
            success:function(response){
                if (response.status == 'success') {
                    toastr.success('Mesajınız göndərildi');
                    $('input[name=name]').val('');
                    $('input[name=surname]').val('');
                    $('input[name=email]').val('');
                    $('textarea[name=message]').val('');
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    });
</script>
@endsection
