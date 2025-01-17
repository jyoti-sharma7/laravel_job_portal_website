<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					  <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"></span>
					  </div>


					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							
	
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown" aria-expanded="false"> 
							
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-message-list">
									
										
									</div>
									
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{url('backend/assets/images/user.jpg')}}" class="user-img" alt="{{Auth::user()->name}}">
							<div class="user-info">
								<p class="user-name mb-0">{{Auth::user()->name}}</p>
								<p class="designattion mb-0">{{Auth::user()->email}}</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							
							<li><a class="dropdown-item d-flex align-items-center" href="{{url('/profile')}}"><i class="bx bx-cog fs-5"></i><span>Profile</span></a>
							</li>							
							<li><a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>