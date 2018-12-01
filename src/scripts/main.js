$(document).ready(function(){
	$('.sl1').owlCarousel({
		nav:true,
		items: 1,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		responsive: {
			1000 : {
				nav: false,
				dots: true,
			}
		}
	});
  });

$(document).ready(function(){
	$('.sl2').owlCarousel({
		nav:true,
		items: 1,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		responsive: {
			1000 : {
				items: 4,
			}
		}
	});
  });

  $(document).ready(function(){
	$('.sl3').owlCarousel({
		nav:true,
		items: 1,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
	});
  });
