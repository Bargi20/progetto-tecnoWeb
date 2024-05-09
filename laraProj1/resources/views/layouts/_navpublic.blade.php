		<!-- Header Area -->
		<header class="header" >
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{ route('home') }}"><img src="images/favicon.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<div>
									<h3 style="margin-top: 20px;">TeleMobility</h3>
								</div>
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu" style="margin-left: 150px;">
											<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="{{ Request::is('ListaDottori') ? 'active' : '' }}"><a href="{{ route('Listadottori') }}">Dottori</a></li>
                                            <li class="{{ Request::is('Faq') ? 'active' : '' }}"><a href="{{ route('Faq') }}">FAQ</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{ route('home') }}" class="btn" style="margin-left: 0;">Login</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
