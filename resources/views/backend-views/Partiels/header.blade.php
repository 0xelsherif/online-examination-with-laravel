<!--begin::Header-->
<div id="kt_app_header" class="app-header  d-flex ">

    <!--begin::Header container-->
<div class="app-container  container-fluid d-flex align-items-center justify-content-between " id="kt_app_header_container">
<!--begin::Logo-->
<div class="app-header-logo d-flex flex-center">
<!--begin::Logo image-->
<a href="index.html">
    <img alt="Logo" src="{{asset('backend-assets')}}/media/logos/logo.svg" class="mh-25px">
</a>
<!--end::Logo image-->

<!--begin::Sidebar toggle-->
<button class="btn btn-icon btn-sm btn-active-color-primary d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
    <i class="ki-outline ki-abstract-14 fs-1"></i>	</button>
<!--end::Sidebar toggle-->
</div>
<!--end::Logo-->
<div class="d-flex flex-lg-grow-1 flex-stack" id="kt_app_header_wrapper">
<div class="app-header-wrapper d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap gap-6 gap-lg-0 mb-6 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
    

<!--begin::Page title-->
<div class="d-flex flex-column justify-content-center">
<!--begin::Title-->
<h1 class="text-gray-900 fw-bold fs-6 mb-2">
    QuizProctor   </h1>
<!--end::Title-->

<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base">
      
                    
        <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                                Dashboard                                            </li>
            <!--end::Item-->
                    
</ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->

<div class="d-none d-md-block h-40px border-start border-gray-200 mx-10"></div>
		
<div class="d-flex gap-3 gap-lg-8 flex-wrap">
			<div class="d-flex align-items-center gap-2">
			<div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-warning">
				<i class="ki-outline ki-abstract-13 fs-2 text-inverse-warning"></i>			</div>
			<div class="d-flex flex-column">
				<span class="fw-bold fs-base text-gray-900">
					Target A				</span>
				<span class="fw-semibold fs-7 text-gray-500">
					Uplift: 64%				</span>
			</div>
		</div>
			<div class="d-flex align-items-center gap-2">
			<div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-danger">
				<i class="ki-outline ki-abstract-24 fs-2 text-inverse-danger"></i>			</div>
			<div class="d-flex flex-column">
				<span class="fw-bold fs-base text-gray-900">
					Target A				</span>
				<span class="fw-semibold fs-7 text-gray-500">
					Uplift: 64%				</span>
			</div>
		</div>
			<div class="d-flex align-items-center gap-2">
			<div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-primary">
				<i class="ki-outline ki-abstract-25 fs-2 text-inverse-primary"></i>			</div>
			<div class="d-flex flex-column">
				<span class="fw-bold fs-base text-gray-900">
					Target A				</span>
				<span class="fw-semibold fs-7 text-gray-500">
					Uplift: 64%				</span>
			</div>
		</div>
	
	<a href="#" class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-primary ms-2 ms-lg-6">
		<i class="ki-outline ki-plus fs-3"></i>	</a>
</div>	</div>

	
<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0 gap-2 gap-lg-4">
	<!--begin::My apps links-->
	<div class="app-navbar-item">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-color-primary w-40px h-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-element-11 fs-4"></i>        </div>
        
<!--begin::My apps-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">My Apps</div>
            <!--end::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-setting-3 fs-2"></i>                </button>
                
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Payments
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Create Invoice
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3">
            Create Payment

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                <i class="ki-outline ki-information fs-6"></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Generate Bill
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Plans
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Statements
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <!--begin::Switch-->      
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <!--begin::Input-->   
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                        <!--end::Input-->   

                        <!--end::Label-->   
                        <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                        <!--end::Label-->   
                    </label>
                    <!--end::Switch-->   
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                <!--end::Menu-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-5">
            <!--begin::Scroll-->
            <div class="mh-450px scroll-y me-n5 pe-5">
                <!--begin::Row-->
                <div class="row g-2">
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">AWS</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/angular-icon-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">AngularJS</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Atica</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/beats-electronics.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Music</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/codeigniter.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Codeigniter</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/bootstrap-4.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Bootstrap</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/google-tag-manager.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">GTM</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Disqus</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/dribbble-icon-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Dribble</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/google-play-store.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Play Store</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/google-podcasts.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Podcasts</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Figma</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Github</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Gitlab</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/instagram-2-1.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Instagram</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="{{asset('backend-assets')}}/media/svg/brand-logos/pinterest-p.svg" class="w-25px h-25px mb-2" alt="">
                                <span class="fw-semibold">Pinterest</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                    </div>
                <!--end::Row-->
            </div>
            <!--end::Scroll-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::My apps-->        <!--end::Menu wrapper-->
    </div>
    <!--end::My apps links-->

	<!--begin::Notifications-->
    <div class="app-navbar-item">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-color-primary w-40px h-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="ki-outline ki-notification-status fs-4"></i>        </div>
        
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
	<!--begin::Heading-->
    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{asset('backend-assets')}}/media/misc/menu-header-bg.jpg')">
        <!--begin::Title-->                                   
        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
        </h3>
        <!--end::Title-->

        <!--begin::Tabs-->
        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
            </li>
        </ul>
        <!--end::Tabs-->
    </div>
	<!--end::Heading-->

    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab panel-->
        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">      
                                    <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                <div class="text-gray-500 fs-7">Phase 1 development</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 hr</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">      
                                    <i class="ki-outline ki-information fs-2 text-danger"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                <div class="text-gray-500 fs-7">Confidential staff documents</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">      
                                    <i class="ki-outline ki-briefcase fs-2 text-warning"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                <div class="text-gray-500 fs-7">Corporeate staff profiles</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-success">      
                                    <i class="ki-outline ki-abstract-12 fs-2 text-success"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                <div class="text-gray-500 fs-7">New frontend admin theme</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">      
                                    <i class="ki-outline ki-colors-square fs-2 text-primary"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                <div class="text-gray-500 fs-7">Product launch status update</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-info">      
                                    <i class="ki-outline ki-picture
 fs-2 text-info"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                <div class="text-gray-500 fs-7">Collection of banner images</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">      
                                    <i class="ki-outline ki-color-swatch fs-2 text-warning"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                <div class="text-gray-500 fs-7">Collection of SVG icons</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">20 March</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                  
            </div>
            <!--end::Items-->

            <!--begin::View more-->
			<div class="py-3 text-center border-top">
                <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All 
                    <i class="ki-outline ki-arrow-right fs-5"></i>                </a>			 
			</div>
			<!--end::View more--> 
        </div>
        <!--end::Tab panel-->      

        <!--begin::Tab panel-->
        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column px-9">
                <!--begin::Section-->
                <div class="pt-10 pb-0">
                    <!--begin::Title-->
                    <h3 class="text-gray-900 text-center fw-bold">
                        Get Pro Access                
                    </h3>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="text-center text-gray-600 fw-semibold pt-1">
                        Outlines keep you honest. They stoping you from amazing poorly about drive
                    </div>
                    <!--end::Text-->

                    <!--begin::Action-->
                    <div class="text-center mt-5 mb-9">
                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>                  
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Section-->

                <!--begin::Illustration-->
                <div class="text-center px-4">
                    <img class="mw-100 mh-200px" alt="image" src="{{asset('backend-assets')}}/media/illustrations/sketchy-1/1.png">
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Tab panel-->
        
        <!--begin::Tab panel-->
        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Just now</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 week</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Mar 5</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">May 15</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Apr 3</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jun 30</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jul 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Sep 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Dec 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                  
            </div>
            <!--end::Items-->

            <!--begin::View more-->
			<div class="py-3 text-center border-top">
                <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All 
                    <i class="ki-outline ki-arrow-right fs-5"></i>                </a>			 
			</div>
			<!--end::View more--> 
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab content-->
</div>
<!--end::Menu-->        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    
    <!--begin::User menu-->
    <div class="app-navbar-item" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{asset('backend-assets')}}/media/avatars/300-2.jpg" class="rounded-3" alt="user">
        </div>
        
<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="{{asset('backend-assets')}}/media/avatars/300-2.jpg">
            </div>
            <!--end::Avatar-->

            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    Ana Fox                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                </div>

                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    ana@kt.com                </a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="account/overview.html" class="menu-link px-5">
            My Profile
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="apps/projects/list.html" class="menu-link px-5">
            <span class="menu-text">My Projects</span>
            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title">My Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/referrals.html" class="menu-link px-5">
                    Referrals
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/billing.html" class="menu-link px-5">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="account/statements.html" class="menu-link px-5">
                    Payments
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">
                    Statements

                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                        <i class="ki-outline ki-information-5 fs-5"></i>                    </span>
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                        <span class="form-check-label text-muted fs-7">
                            Notifications
                        </span>
                    </label>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="account/statements.html" class="menu-link px-5">
            My Statements
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language 

                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    English <img class="w-15px h-15px rounded-1 ms-2" src="{{asset('backend-assets')}}/media/flags/united-states.svg" alt="">
                </span>
            </span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{asset('backend-assets')}}/media/flags/united-states.svg" alt="">
                    </span>
                    English
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{asset('backend-assets')}}/media/flags/spain.svg" alt="">
                    </span>
                    Spanish
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{asset('backend-assets')}}/media/flags/germany.svg" alt="">
                    </span>
                    German
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{asset('backend-assets')}}/media/flags/japan.svg" alt="">
                    </span>
                    Japanese
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{asset('backend-assets')}}/media/flags/france.svg" alt="">
                    </span>
                    French
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
        <a href="account/settings.html" class="menu-link px-5">
            Account Settings
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
            Sign Out
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
 
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->

    </div>
<!--end::Navbar--></div>            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->   