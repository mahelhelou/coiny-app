jQuery(function ($) {
	// let navbarHeight = $('.navbar').innerHeight()
	let navbarHeight = $('.navbar').innerHeight()

	// Adjust showcase height (100vh)
	let windowHeight = $(window).height()
	let windowWidth = $(window).width()

	$('.showcase').height(windowHeight - navbarHeight)

	// Get full year
	// $('#year').text(new Date().getFullYear())

	// Init scrollspy
	$('body').scrollspy({ target: '#main-menu' })

	// Apply smooth scroll
	$('#main-menu a, .navbar-brand').on('click', function (event) {
		if (this.hash !== '') {
			event.preventDefault()

			const hash = this.hash

			$('html, body').animate(
				{
					scrollTop: $(hash).offset().top - navbarHeight
				},
				800,
				function () {
					window.location.hash = hash
				}
			)
		}
	})

	// Stores owl carousel
	$('.authors .owl-carousel').owlCarousel({
		loop: true,
		nav: true,
		autoplay: true,
		autoplayTimeout: 3500,
		autoplayHoverPause: true,
		smartSpeed: 2500,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			},
			1920: {
				items: 4
			}
		}
	})

	// Testimonials owl carousel
	$('.testimonials .owl-carousel').owlCarousel({
		loop: true,
		nav: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		smartSpeed: 2000,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	})
})
