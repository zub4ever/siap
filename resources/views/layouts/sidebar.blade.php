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
                </ul>
            </nav>
        </div>
    </div>
    <!--=========================*
              End Main Menu
    *===========================-->
</div>
