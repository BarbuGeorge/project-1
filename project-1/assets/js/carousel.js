jQuery('.owl-carousel').owlCarousel({
	rtl:true,
	loop:false,
	nav:false,
	dots:true,
	responsiveClass: true,
	stagePadding: 30,
	startPosition:-1,
	responsive : {

		//  from 0 up
		0 : {
		stagePadding:25,
		loop: false,
		responsiveClass: true,
		dots: true,
		nav: false,
		items: 1,
		},

		// from 768 up
		768 : {
			items: 2
		},

		// from 992 up
		992 : {
			items: 3
		}
	}
})