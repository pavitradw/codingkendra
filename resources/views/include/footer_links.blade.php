<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>

	<script src="{{asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{asset('assets/js/main-slider-script.js')}}"></script>

	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
	<script src="{{asset('assets/js/wow.js')}}"></script>
	<script src="{{asset('assets/js/appear.js')}}"></script>
	<script src="{{asset('assets/js/knob.js')}}"></script>
	<script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>

	<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.form.min.js')}}"></script>
	<script>
		(function ($) {
			$("#contact_form").validate({
				submitHandler: function (form) {
					var form_btn = $(form).find('button[type="submit"]');
					var form_result_div = '#form-result';
					$(form_result_div).remove();
					form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
					var form_btn_old_msg = form_btn.html();
					form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
					$(form).ajaxSubmit({
						dataType: 'json',
						success: function (data) {
							if (data.status == 'true') {
								$(form).find('.form-control').val('');
							}
							form_btn.prop('disabled', false).html(form_btn_old_msg);
							$(form_result_div).html(data.message).fadeIn('slow');
							setTimeout(function () { $(form_result_div).fadeOut('slow') }, 6000);
						}
					});
				}
			});
		})(jQuery);
	</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        // slidesPerView: 3,
        spaceBetween: 20,
        //   autoplay: true,
          loop: true,
		  breakpoints: {
			280:{
				slidesPerView: 1,
				spaceBetween: 10,
			},
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
            },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>


<!-- for latest blog section in homepage  -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const textDiv = document.querySelector('.content-box .text');
            const words = textDiv.innerHTML.split(' ');
            if (words.length > 10) {
                textDiv.innerHTML = words.slice(0, 10).join(' ') + '...';
            }
        });
    </script>