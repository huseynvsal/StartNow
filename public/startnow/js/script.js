$(function(){
	var height = ($('#carousel-example').height())/2;
	$(window).scroll(function(){
		if ($(this).scrollTop() > height) {
			$('.navibar').addClass('fixed');
			$('.navibar').find('.start').css('color','black');
			$('.navibar').find('.nav_link').addClass('nav_link_fixed');
			$('.navibar').find('.current_link').addClass('current_link_fixed');
		}
		else{
			$('.navibar').removeClass('fixed');
			$('.navibar').find('.start').css('color','white');
			$('.navibar').find('.nav_link').removeClass('nav_link_fixed');
			$('.navibar').find('.current_link').removeClass('current_link_fixed');
		}
	})
});
$(function(){
    var url = window.location.href;
    $(".main_menu a").each(function() {
        if(url == (this.href)) {
        	var current = $('.current_link');
        	current.removeClass('current_link');
        	current.addClass('nav_link');
            $(this).closest("a").addClass("current_link");
            $(this).closest("a").removeClass('nav_link');
        }
       	if (url == 'http://localhost:8000/current_hall') {
       		var current = $('.current_link');
        	current.removeClass('current_link');
        	current.addClass('nav_link');
            $('#halls').addClass("current_link");
            $('#halls').removeClass('nav_link');
       	}
    });
});
$(function(){
	$(window).scroll(function(){
		var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
		if (scrollBottom < 190) {
			setTimeout(function(){
				$('.footer_links a').removeAttr('data-aos');
			}, 1000);
		}
		if(scrollBottom < 2680) {
            $('.motivation_pics').css('animation','left_to_right 1s ease both');
            setTimeout(function(){
                $('.welcome_message').css('animation','right_to_left 1s ease both');
            }, 1000);
		}
		if(scrollBottom < 1840) {
            var timeout = 500;
            $('.contexts').each(function( index ) {
                setTimeout(function(){$('.contexts:nth-child('+(index+1)+')').css('animation','flipInX 1s ease both');}, timeout);
                timeout+=150;
            });
		}
		if(scrollBottom < 1045) {
            $('.secondary_carousel_header').css('animation','opacity 1s ease both');
		}
		if(scrollBottom < 800) {
            var timeout = 500;
            $('.slider_links').each(function( index ) {
                setTimeout(function(){$('.slider_links:nth-child('+(index+1)+')').css('animation','bottom_to_top 1s ease both');}, timeout);
                timeout+=150;
            });
		}
		if(scrollBottom < 800) {
            $('.contacts_2').css('animation','get_bigger 2s ease both');
		}
		if(scrollBottom < 1800) {
            var timeout = 500;
            $('.hall_boxes').each(function( index ) {
                setTimeout(function(){$('.hall_boxes:nth-child('+(index+1)+')').css('animation','bottom_to_top 1s ease both');}, timeout);
                timeout+=150;
            });
		}
        if(scrollBottom < 750) {
            setTimeout(function(){
                $('.login_inner').removeAttr('data-aos');
            }, 1500);
        }
	})
});
$(function(){
	$('.motivation_pics .small_mot_pics').on('click','.bordered',function(){
		var source = $(this).find('img').attr('src');
		$('.main_mot_pic').find('img:eq(0)').attr('src',source);
	});
	$('.hall_images .hall_additional_image').on('click','.hall_additional_images',function(){
		var source = $(this).css('background-image');
		$('.hall_main_image').css('background-image',source);
	});
});

$(function(){
	$('.hall_boxes').on('click', '.get_hall', function(){
		var id = $(this).parents('.hall_boxes').attr('id');
		$.ajax({
            type: "GET",
            url: "current_hall",
            data: {'id':id, "_token": "{{ csrf_token() }}"},
            success:function(response)
            {
                if(response.status == 'success')
                {
                	console.log('success');
                }
            }
        });
	})
});
