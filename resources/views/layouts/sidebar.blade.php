<div class="sidebar-menu">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="{{ URL::to('index') }}"><img src="{{asset('assets/images/logo.svg')}}" alt="logo"></a>
        </div>
        <!--=========================*
                    End Logo
        *===========================-->
    </div>
    <!--=========================*
               Main Menu
    *===========================-->
    <div class="main-menu">
        <div class="menu-inner" id="sidebar_menu">
            <nav>
                <ul class="metismenu" id="menu">
                    <li {!! (Request::is('index') || Request::is('index2') || Request::is('index3') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>dashboard</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('index') ? 'class="active"':"") !!}><a href="{{ URL::to('index') }}">Dashboard V1</a></li>
                            <li {!! (Request::is('index2') ? 'class="active"':"") !!}><a href="{{ URL::to('index2') }}">Dashboard V2</a></li>
                            <li {!! (Request::is('index3') ? 'class="active"':"") !!}><a href="{{ URL::to('index3') }}">Dashboard V3</a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              UI Features
                    *===========================-->
                    <li {!! (Request::is('alert') || Request::is('accordion') || Request::is('buttons')
                        || Request::is('badges') || Request::is('cards') || Request::is('carousel')
                        || Request::is('dropdown') || Request::is('list-group') || Request::is('modals')
                        || Request::is('pagination') || Request::is('popover') || Request::is('progressbar')
                        || Request::is('tabs') || Request::is('typography') || Request::is('grid') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>UI Features</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('alert') ? 'class="active"':"") !!}><a href="{{ URL::to('alert') }}"><i class="ti-alert"></i><span>Alert</span></a></li>
                            <li {!! (Request::is('accordion') ? 'class="active"':"") !!}><a href="{{ URL::to('accordion') }}"><i class="ti-layout-accordion-separated"></i><span>Accordion</span></a></li>
                            <li {!! (Request::is('buttons') ? 'class="active"':"") !!}><a href="{{ URL::to('buttons') }}"><i class="icon-focus"></i><span>Buttons</span></a></li>
                            <li {!! (Request::is('badges') ? 'class="active"':"") !!}><a href="{{ URL::to('badges') }}"><i class="icon-ribbon"></i><span>Badges</span></a></li>
                            <li {!! (Request::is('cards') ? 'class="active"':"") !!}><a href="{{ URL::to('cards') }}"><i class="ti-id-badge"></i><span>Cards</span></a></li>
                            <li {!! (Request::is('carousel') ? 'class="active"':"") !!}><a href="{{ URL::to('carousel') }}"><i class="ti-layout-slider"></i><span>Carousels</span></a></li>
                            <li {!! (Request::is('dropdown') ? 'class="active"':"") !!}><a href="{{ URL::to('dropdown') }}"><i class="icon-layers"></i><span>Dropdown</span></a></li>
                            <li {!! (Request::is('list-group') ? 'class="active"':"") !!}><a href="{{ URL::to('list-group') }}"><i class="ti-list"></i><span>List Group</span></a></li>
                            <li {!! (Request::is('modals') ? 'class="active"':"") !!}><a href="{{ URL::to('modals') }}"><i class="ti-layers-alt"></i><span>Modals</span></a></li>
                            <li {!! (Request::is('pagination') ? 'class="active"':"") !!}><a href="{{ URL::to('pagination') }}"><i class="ion-android-more-horizontal"></i><span>Pagination</span></a></li>
                            <li {!! (Request::is('popover') ? 'class="active"':"") !!}><a href="{{ URL::to('popover') }}"><i class="ion-ios-photos"></i><span>Popover</span></a></li>
                            <li {!! (Request::is('progressbar') ? 'class="active"':"") !!}><a href="{{ URL::to('progressbar') }}"><i class="ion-ios-settings-strong"></i><span>Progressbar</span></a></li>
                            <li {!! (Request::is('tabs') ? 'class="active"':"") !!}><a href="{{ URL::to('tabs') }}"><i class="ti-layout-tab"></i><span>Tabs</span></a></li>
                            <li {!! (Request::is('typography') ? 'class="active"':"") !!}><a href="{{ URL::to('typography') }}"><i class="ti-smallcap"></i><span>Typography</span></a></li>
                            <li {!! (Request::is('grid') ? 'class="active"':"") !!}><a href="{{ URL::to('grid') }}"><i class="ti-layout-grid4"></i><span>Grid</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Advance Kit
                    *===========================-->
                    <li {!! (Request::is('toastr') || Request::is('sweet-alert') || Request::is('cropper')
                        || Request::is('loaders') || Request::is('app-tour') || Request::is('ladda-button') || Request::is('dropzone') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-briefcase"></i>
                            <span>Advance Kit</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('toastr') ? 'class="active"':"") !!}><a href="{{ URL::to('toastr') }}"><i class="ti-layout-cta-left"></i> <span>Toastr</span></a></li>
                            <li {!! (Request::is('sweet-alert') ? 'class="active"':"") !!}><a href="{{ URL::to('sweet-alert') }}"><i class="ti-layout-media-overlay-alt-2"></i> <span>Sweet Alert</span></a></li>
                            <li {!! (Request::is('cropper') ? 'class="active"':"") !!}><a href="{{ URL::to('cropper') }}"><i class="ion-crop"></i> <span>Image Cropper</span></a></li>
                            <li {!! (Request::is('loaders') ? 'class="active"':"") !!}><a href="{{ URL::to('loaders') }}"><i class="ion-load-a"></i> <span>Css Loaders</span></a></li>
                            <li {!! (Request::is('app-tour') ? 'class="active"':"") !!}><a href="{{ URL::to('app-tour') }}"><i class="ti-flag-alt"></i> <span>App Tour</span></a></li>
                            <li {!! (Request::is('ladda-button') ? 'class="active"':"") !!}><a href="{{ URL::to('ladda-button') }}"><i class="ion-load-b"></i> <span>Ladda Button</span></a></li>
                            <li {!! (Request::is('dropzone') ? 'class="active"':"") !!}><a href="{{ URL::to('dropzone') }}"><i class="ti-layout-placeholder"></i> <span>Dropzone</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Icons
                    *===========================-->
                    <li {!! (Request::is('font-awesome') || Request::is('themify') || Request::is('ionicons')
                        || Request::is('et-line') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-award"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('font-awesome') ? 'class="active"':"") !!}><a href="{{ URL::to('font-awesome') }}"><i class="ti-flag-alt"></i> <span>Font Awesome</span></a></li>
                            <li {!! (Request::is('themify') ? 'class="active"':"") !!}><a href="{{ URL::to('themify') }}"><i class="ti-themify-favicon"></i><span>Themify</span></a></li>
                            <li {!! (Request::is('ionicons') ? 'class="active"':"") !!}><a href="{{ URL::to('ionicons') }}"><i class="ion-ionic"></i><span>Ionicons V2</span></a></li>
                            <li {!! (Request::is('et-line') ? 'class="active"':"") !!}><a href="{{ URL::to('et-line') }}"><i class="icon-basket"></i><span>ET Line Icons</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                                  Maps
                    *===========================-->
                    <li {!! (Request::is('google-maps') || Request::is('am-maps') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-map-pin"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('google-maps') ? 'class="active"':"") !!}><a href="{{ URL::to('google-maps') }}"><i class="icon-map"></i><span>Google Maps</span></a></li>
                            <li {!! (Request::is('am-maps') ? 'class="active"':"") !!}><a href="{{ URL::to('am-maps') }}"><i class="icon-map-pin"></i><span>AM Chart Maps</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Tables
                    *===========================-->
                    <li {!! (Request::is('basic-table') || Request::is('datatable') || Request::is('js-grid') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-credit-card"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('basic-table') ? 'class="active"':"") !!}><a href="{{ URL::to('basic-table') }}"><i class="ion-ios-grid-view"></i><span>Basic Tables</span></a></li>
                            <li {!! (Request::is('datatable') ? 'class="active"':"") !!}><a href="{{ URL::to('datatable') }}"><i class="ti-layout-slider-alt"></i><span>Datatable</span></a></li>
                            <li {!! (Request::is('js-grid') ? 'class="active"':"") !!}><a href="{{ URL::to('js-grid') }}"><i class="ti-view-list-alt"></i><span>Js Grid Table</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                                 Forms
                    *===========================-->
                    <li {!! (Request::is('form-basic') || Request::is('form-layouts') || Request::is('form-groups')
                        || Request::is('form-validation') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-clipboard"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('form-basic') ? 'class="active"':"") !!}><a href="{{ URL::to('form-basic') }}"><i class="ion-edit"></i><span>Basic ELements</span></a></li>
                            <li {!! (Request::is('form-layouts') ? 'class="active"':"") !!}><a href="{{ URL::to('form-layouts') }}"><i class="ti-layout-grid2-thumb"></i><span>Form Layouts</span></a></li>
                            <li {!! (Request::is('form-groups') ? 'class="active"':"") !!}><a href="{{ URL::to('form-groups') }}"><i class="ion-ios-paper"></i><span>Input Groups</span></a></li>
                            <li {!! (Request::is('form-validation') ? 'class="active"':"") !!}><a href="{{ URL::to('form-validation') }}"><i class="ion-android-cancel"></i><span>Form Validation</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Editors
                    *===========================-->
                    <li {!! (Request::is('text-editor') || Request::is('code-editor') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-edit"></i>
                            <span>Editors</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('text-editor') ? 'class="active"':"") !!}><a href="{{ URL::to('text-editor') }}"><i class="ti-uppercase"></i><span>Text Editor</span></a></li>
                            <li {!! (Request::is('code-editor') ? 'class="active"':"") !!}><a href="{{ URL::to('code-editor') }}"><i class="ion-code"></i><span>Code Editor</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Calendar
                    *===========================-->
                    <li {!! (Request::is('full-calendar') ? 'class="active"':"") !!}>
                        <a href="{{ URL::to('full-calendar') }}">
                            <i class="feather ft-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <!--=========================*
                              Charts
                    *===========================-->
                    <li {!! (Request::is('chart-js') || Request::is('morris-charts') || Request::is('c3-chart')
                        || Request::is('chartist') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-pie-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('chart-js') ? 'class="active"':"") !!}><a href="{{ URL::to('chart-js') }}"><i class="feather ft-bar-chart"></i><span>Chart Js</span></a></li>
                            <li {!! (Request::is('morris-charts') ? 'class="active"':"") !!}><a href="{{ URL::to('morris-charts') }}"><i class="feather ft-bar-chart-2"></i><span>Morris Chart Js</span></a></li>
                            <li {!! (Request::is('c3-chart') ? 'class="active"':"") !!}><a href="{{ URL::to('c3-chart') }}"><i class="feather ft-bar-chart-line"></i><span>C3 Chart Js</span></a></li>
                            <li {!! (Request::is('chartist') ? 'class="active"':"") !!}><a href="{{ URL::to('chartist') }}"><i class="feather ft-bar-chart-line-"></i><span>Chartist Js</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Email
                    *===========================-->
                    <li {!! (Request::is('inbox') || Request::is('compose') || Request::is('read-mail') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-mail"></i>
                            <span>Email</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('inbox') ? 'class="active"':"") !!}><a href="{{ URL::to('inbox') }}"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
                            <li {!! (Request::is('compose') ? 'class="active"':"") !!}><a href="{{ URL::to('compose') }}"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
                            <li {!! (Request::is('read-mail') ? 'class="active"':"") !!}><a href="{{ URL::to('read-mail') }}"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Gallery
                    *===========================-->
                    <li {!! (Request::is('gallery') ? 'class="active"':"") !!}>
                        <a href="{{ URL::to('gallery') }}">
                            <i class="feather ft-image"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <!--=========================*
                              Session
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>SECCTC</span>
                        </a>
                        <ul class="collapse">
                            <li{!! (request()->is('/servidor/*') ? 'class="active"' : "")!!}>
                                <a href="{{ Route('servidor.index') }}"><i class="ion-person-add"></i>
                                    <span>Cadastrar servidor</span></a>
                            </li>
                            <li {!! (Request::is('lock') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('lock') }}"><i class="ti-lock">

                                    </i><span>Lock Screen</span></a>
                            </li>
                            <li {!! (Request::is('reset-password') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('reset-password') }}">
                                    <i class="feather ft-lock"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                            <li {!! (Request::is('forgot-password') ? 'class="active"':"") !!}><a href="{{ URL::to('forgot-password') }}"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Error Pages
                    *===========================-->
                    <li {!! (Request::is('404') || Request::is('500') || Request::is('505') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-anchor"></i>
                            <span>Error Pages</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('404') ? 'class="active"':"") !!}><a href="{{ URL::to('404') }}"><i class="ti-unlink"></i><span>404</span></a></li>
                            <li {!! (Request::is('500') ? 'class="active"':"") !!}><a href="{{ URL::to('500') }}"><i class="ti-close"></i><span>500</span></a></li>
                            <li {!! (Request::is('505') ? 'class="active"':"") !!}><a href="{{ URL::to('505') }}"><i class="ti-na"></i><span>505</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Other Pages
                    *===========================-->
                    <li {!! (Request::is('blank') || Request::is('invoice') || Request::is('pricing')
                        || Request::is('profile') || Request::is('timeline') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-file-plus"></i>
                            <span>Other Pages</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('blank') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('blank') }}">
                                    <i class="feather ft-file"></i>
                                    <span>Blank Page</span>
                                </a>
                            </li>
                            <li {!! (Request::is('invoice') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('invoice') }}">
                                    <i class="feather ft-paperclip"></i>
                                    <span>Invoice</span>
                                </a>
                            </li>
                            <li {!! (Request::is('pricing') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('pricing') }}">
                                    <i class="feather ft-dollar-sign"></i>
                                    <span>Pricing</span>
                                </a>
                            </li>
                            <li {!! (Request::is('profile') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('profile') }}"><i class="feather ft-user-check"></i><span>Profile</span></a>
                            </li>
                            <li {!! (Request::is('timeline') ? 'class="active"':"") !!}><a href="{{ URL::to('timeline') }}"><i class="feather ft-clock"></i><span>Timeline</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--=========================*
              End Main Menu
    *===========================-->
</div>
