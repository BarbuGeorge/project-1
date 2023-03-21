<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="navbar">
		<div class="nav-bar">

			<div class="nav-mobile">
				<a class="me-auto" href="<?php echo home_url(); ?>">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/mobile-header-logo.svg'; ?>" />
				</a>

				<i class="fa-brands fa-facebook-f fa-xl me-4"></i>
				<i class="fa-brands fa-instagram fa-xl me-3"></i>
				<button class="navbar-toggler shadow-none border-0 pe-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<!-- <img  class="hamburger-icon" src="<?php echo get_template_directory_uri() . '/images/hamburger-menu.svg'; ?>" /> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="19.745" height="16.126" viewBox="0 0 19.745 16.126">
						<g id="Group_70" data-name="Group 70" transform="translate(-343.423 -27.855)">
							<path id="Path_71" data-name="Path 71" d="M4880.168,34.128h-19.745v-2h19.745Z" transform="translate(-4517 -4.274)" fill="currentColor" />
							<path id="Path_72" data-name="Path 72" d="M4880.168,34.128h-19.745v-2h19.745Z" transform="translate(-4517 2.789)" fill="currentColor" />
							<path id="Path_73" data-name="Path 73" d="M4880.168,34.128h-19.745v-2h19.745Z" transform="translate(-4517 9.852)" fill="currentColor" />
						</g>
					</svg>
				</button>

				<div class="collapse navbar-collapse w-100 pt-5" id="navbarNavDropdown">
					<form action="<?php echo home_url(); ?>" id="search-form" method="get">
						<input class="form-control" type="text" name="s" id="s" value="Cauta..." 	onblur="if(this.value=='')this.value='Cauta...'"
						onfocus="if(this.value=='Cauta...')this.value=''" />
						<input type="hidden" value="submit" />
					</form>
					<?php wp_nav_menu(array(
						'menu'           => 'mobile-menu',
						'theme_location' => '__no_such_location',
						'fallback_cb'    => false,
						'class' => 'top-menu'
					)); ?>
				</div>
			</div>

			<!-- // nav-mobile -->

			<div class="nav-desktop">

				<div class="top-bar">
					<div class="language d-flex align-items-center">
						<a class="lang active" href="#"><b>RO</b></a>
						<span class="mx-2">|</span>
						<a class="lang" href="#"><b>EN</b></a>
						<a href="<?php echo site_url('/contact'); ?>" class="link text-uppercase ms-7"><b>Programare online</b></a>
					</div>
					<div class="icons">
						<svg xmlns="http://www.w3.org/2000/svg" width="13.177" height="23.735" viewBox="0 0 13.177 23.735">
							<path class="top-bar-icon" id="Path_54" data-name="Path 54" d="M12.362-6.461l.631-4.115H9.046v-2.67a2.057,2.057,0,0,1,2.32-2.223H13.16v-3.5a21.889,21.889,0,0,0-3.186-.278c-3.251,0-5.377,1.971-5.377,5.538v3.136H.984v4.115H4.6V3.485H9.046V-6.461Z" transform="translate(-0.484 19.75)" fill="currentColor" stroke="rgba(0,0,0)" stroke-width="1"/>
						</svg>

						<svg xmlns="http://www.w3.org/2000/svg" width="23.103" height="23.098" viewBox="0 0 23.103 23.098">
							<g id="top_menu_item" data-name="top menu item" transform="translate(0.552 0.552)">
								<path class="top-bar-icon" id="Path_53" data-name="Path 53" d="M11-12.524A5.63,5.63,0,0,0,5.36-6.885,5.63,5.63,0,0,0,11-1.246a5.63,5.63,0,0,0,5.639-5.639A5.63,5.63,0,0,0,11-12.524Zm0,9.306A3.673,3.673,0,0,1,7.333-6.885,3.67,3.67,0,0,1,11-10.551a3.67,3.67,0,0,1,3.666,3.666A3.673,3.673,0,0,1,11-3.219Zm7.185-9.536a1.315,1.315,0,0,0-1.315-1.315,1.315,1.315,0,0,0-1.315,1.315,1.312,1.312,0,0,0,1.315,1.315A1.312,1.312,0,0,0,18.185-12.755Zm3.735,1.335a6.509,6.509,0,0,0-1.777-4.609,6.552,6.552,0,0,0-4.609-1.777c-1.816-.1-7.259-.1-9.075,0a6.542,6.542,0,0,0-4.609,1.772A6.531,6.531,0,0,0,.074-11.425c-.1,1.816-.1,7.259,0,9.075A6.509,6.509,0,0,0,1.851,2.259,6.561,6.561,0,0,0,6.459,4.035c1.816.1,7.259.1,9.075,0a6.509,6.509,0,0,0,4.609-1.777A6.552,6.552,0,0,0,21.919-2.35C22.023-4.166,22.023-9.6,21.919-11.42ZM19.573-.4a3.712,3.712,0,0,1-2.091,2.091c-1.448.574-4.883.442-6.483.442s-5.04.128-6.483-.442A3.712,3.712,0,0,1,2.425-.4c-.574-1.448-.442-4.883-.442-6.483s-.128-5.041.442-6.483a3.712,3.712,0,0,1,2.091-2.091C5.964-16.033,9.4-15.9,11-15.9s5.041-.128,6.483.442a3.712,3.712,0,0,1,2.091,2.091c.574,1.448.442,4.883.442,6.483S20.148-1.844,19.573-.4Z" transform="translate(0.003 17.882)" fill="currentColor" stroke="rgba(0,0,0)" stroke-width="1"/>
							</g>
						</svg>
						<div data-bs-toggle="modal" data-bs-target="#searchModal">
							<svg xmlns="http://www.w3.org/2000/svg"  width="21.708" height="21.71" viewBox="0 0 21.708 21.71">
								<g id="top_menu_item" data-name="top menu item" transform="translate(0 0)">
									<path class="top-bar-icon" id="Path_52" data-name="Path 52" d="M980.744,399.246a9,9,0,1,0-.749,13.394l5.679,5.68,1.414-1.415-5.679-5.679A9,9,0,0,0,980.744,399.246Zm-1.415,11.314a7,7,0,1,1,0-9.9A7.008,7.008,0,0,1,979.329,410.56Z" transform="translate(-965.38 -396.611)" fill="currentColor"/>
								</g>
							</svg>
						</div>
					</div>
				</div>

				<div class="bg-transparent header-menu">

					<div class="desktop-nav-wrapper">
						<?php wp_nav_menu(array(
							'menu'           => 'top-menu-left',
							'theme_location' => '__no_such_location',
							'fallback_cb'    => false,
							'class' => 'top-menu'
						)); ?>

						<div class="menu-top-menu-center-container">
							<a class="navbar-brand" href="<?php echo home_url(); ?>">
								<svg id="logo_menu" data-name="logo menu" xmlns="http://www.w3.org/2000/svg" width="150.132" height="95.827" viewBox="0 0 150.132 95.827">
									<g id="Group_1" data-name="Group 1" transform="translate(0 58.976)">
										<path id="Path_1" data-name="Path 1" d="M78.593,260.823a5.655,5.655,0,0,1,4.024,1.664l.183.183,1.381-1.379L84,261.107a7.528,7.528,0,0,0-5.408-2.255A7.65,7.65,0,1,0,84,271.92l.181-.182L82.8,270.332l-.185.184a5.678,5.678,0,1,1-4.024-9.693Z" transform="translate(-70.934 -258.821)" fill="#fff"/>
										<path id="Path_2" data-name="Path 2" d="M124.715,258.852a7.65,7.65,0,1,0,7.659,7.66A7.668,7.668,0,0,0,124.715,258.852Zm0,13.328a5.678,5.678,0,1,1,5.669-5.667A5.674,5.674,0,0,1,124.715,272.18Z" transform="translate(-101.942 -258.821)" fill="#fff"/>
										<path id="Path_3" data-name="Path 3" d="M173.393,263.451a2.353,2.353,0,0,1,2.518-2.393h.259v-1.627l-.1-.26h-.259a4.161,4.161,0,0,0-4.322,4.28,5.615,5.615,0,0,0,1.676,3.752,4.074,4.074,0,0,1,1.268,2.591,2.438,2.438,0,0,1-2.56,2.538.911.911,0,0,1-.423-.076l-.375-.185v2.049l.168.064a1.752,1.752,0,0,0,.63.08,4.275,4.275,0,0,0,4.467-4.469,5.866,5.866,0,0,0-1.7-3.834A4,4,0,0,1,173.393,263.451Z" transform="translate(-138.256 -259.036)" fill="#fff"/>
										<path id="Path_4" data-name="Path 4" d="M198.986,259.04v14.947h1.928v-9.1l2.85,3.856,2.85-3.856v9.1h1.927V259.04l-4.777,6.488Z" transform="translate(-157.023 -258.948)" fill="#fff"/>
										<path id="Path_5" data-name="Path 5" d="M247,258.852a7.65,7.65,0,1,0,7.659,7.66A7.668,7.668,0,0,0,247,258.852Zm0,13.328a5.678,5.678,0,1,1,5.669-5.667A5.674,5.674,0,0,1,247,272.18Z" transform="translate(-184.152 -258.821)" fill="#fff"/>
										<path id="Path_6" data-name="Path 6" d="M298.864,259.738h-2.435v14.719h1.928v-4.373h.507a5.173,5.173,0,0,0,0-10.346Zm0,8.416h-.507v-6.488h.507a3.244,3.244,0,0,1,0,6.488Z" transform="translate(-222.533 -259.417)" fill="#fff"/>
										<path id="Path_7" data-name="Path 7" d="M335.952,258.852a7.65,7.65,0,1,0,7.659,7.66A7.668,7.668,0,0,0,335.952,258.852Zm0,13.328a5.678,5.678,0,1,1,5.669-5.667A5.674,5.674,0,0,1,335.952,272.18Z" transform="translate(-243.955 -258.821)" fill="#fff"/>
										<path id="Path_8" data-name="Path 8" d="M387.783,259.738h-1.928v14.718h6.674v-1.929h-4.746Z" transform="translate(-282.654 -259.417)" fill="#fff"/>
										<rect id="Rectangle_1" data-name="Rectangle 1" width="1.928" height="14.718" transform="translate(113.256 0.321)" fill="#fff"/>
										<path id="Path_9" data-name="Path 9" d="M432.771,261.667h3.067v12.789h1.927V261.667h3.089v-1.929h-8.083Z" transform="translate(-314.196 -259.417)" fill="#fff"/>
										<path id="Path_10" data-name="Path 10" d="M459.614,273.8h2.07l.767-2.052h6.315l.767,2.052h2.07l-5.994-15.04Zm3.488-3.733,2.507-6.054,2.506,6.054Z" transform="translate(-332.242 -258.758)" fill="#fff"/>
										<path id="Path_11" data-name="Path 11" d="M510.85,259.3v8.467l-6.011-8.913V273.86h1.928v-8.717l6.011,8.947V259.3Z" transform="translate(-362.647 -258.82)" fill="#fff"/>
									</g>
									<g id="Group_2" data-name="Group 2" transform="translate(34.023 86.734)">
										<path id="Path_12" data-name="Path 12" d="M174.757,348.014a4.554,4.554,0,0,1,7.767-3.226l-1.224,1.224a2.825,2.825,0,1,0,0,3.992l1.224,1.225a4.555,4.555,0,0,1-7.767-3.215Z" transform="translate(-174.757 -343.462)" fill="#fff"/>
										<path id="Path_13" data-name="Path 13" d="M229.23,352.742v-8.737h1.734v7h2.921v1.734Z" transform="translate(-211.379 -343.827)" fill="#fff"/>
										<path id="Path_14" data-name="Path 14" d="M274.1,352.742v-8.737h1.734v8.737Z" transform="translate(-241.544 -343.827)" fill="#fff"/>
										<path id="Path_15" data-name="Path 15" d="M362.537,352.742v-8.737h1.735v8.737Z" transform="translate(-301.001 -343.827)" fill="#fff"/>
										<path id="Path_16" data-name="Path 16" d="M399.656,348.014a4.554,4.554,0,0,1,7.767-3.226l-1.224,1.224a2.825,2.825,0,1,0,0,3.992l1.224,1.225a4.555,4.555,0,0,1-7.767-3.215Z" transform="translate(-325.956 -343.462)" fill="#fff"/>
										<path id="Path_17" data-name="Path 17" d="M316.131,348.284l-2.969-4.322h-.729v8.747h1.734v-4.352l3,4.352h.7v-8.734h-1.735Z" transform="translate(-267.316 -343.799)" fill="#fff"/>
									</g>
									<path id="Path_18" fill="currentColor" class="header-logo" data-name="Path 18" d="M266.556,100.887a15.069,15.069,0,0,0-13.859,5.9,14.392,14.392,0,0,1-9.874,5.792A17.76,17.76,0,0,1,241.588,85.8a12.7,12.7,0,0,0-2.939.183,19.759,19.759,0,0,0,1.175,26.64,14.351,14.351,0,0,1-13.034-15.04A14.376,14.376,0,0,1,239.8,84.046a13.091,13.091,0,0,1,1.44-.077,12.214,12.214,0,0,1,2.27.213,14.209,14.209,0,0,1,9.271,5.811A14.534,14.534,0,0,0,266.2,95.82l7.322-.375-.265-1.18a19.98,19.98,0,0,0-19.365-15.474A19.733,19.733,0,0,0,243,82.053a16.787,16.787,0,0,0-3.39-.038,16.389,16.389,0,0,0-10.374,27.608,16.242,16.242,0,0,0,11.88,5.1q.537,0,1.071-.036a15.924,15.924,0,0,0,3.037-.492,16.441,16.441,0,0,0,9.118-6.2,13.039,13.039,0,0,1,12.038-5.072l4.731.292a17.84,17.84,0,0,1-17.219,13.24,17.662,17.662,0,0,1-6.188-1.135,8.59,8.59,0,0,1-3.036.884,19.823,19.823,0,0,0,28.706-13.737l.223-1.141ZM253.895,80.831a17.943,17.943,0,0,1,17.067,12.7l-4.921.254a12.507,12.507,0,0,1-11.6-4.98A16.265,16.265,0,0,0,246,82.679,17.7,17.7,0,0,1,253.895,80.831Z" transform="translate(-174.331 -78.791)"/>
								</svg>
							</a>
						</div>

						<?php wp_nav_menu(array(
							'menu'           => 'top-menu-right',
							'theme_location' => '__no_such_location',
							'fallback_cb'    => false,
							'class' => 'top-menu'
						)); ?>
					</div>
				</div>

			</div> <!-- // nav-desktop -->

		</div>
	</nav>
</header>

<!-- Search Modal -->
<?php get_template_part('template-parts/search-modal');?>