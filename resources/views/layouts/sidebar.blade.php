<div class="sidebar-menu">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="{{ URL::to('home') }}"><img src="{{asset('assets/images/logo.svg')}}" alt="logo"></a>
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
                    <!-- Inicio de Servidor -->
                    <li {!! (request()->is('servidor*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Servidor</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('servidor*') ? 'class="active"' : "")!!}>
                                <a href="{{route('servidor.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Servidores</span>
                                </a>
                            </li>
                            <!-- Fim do cadastros auxiliares -->
                        </ul>
                    </li>
                    <!--fim de Servidor-->
                    <!-- Inicio de Contrato -->
                    <li {!! (request()->is('contrato*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Contrato</span>
                        </a>

                        <ul class="collapse">

                            <li {!! (request()->is('contrato*') ? 'class="active"' : "")!!}>
                                <a href="{{route('contrato.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Contratos</span>
                                </a>
                            </li>

                            <!-- Fim do cadastros auxiliares -->
                        </ul>
                    </li>
                    <li {!! (request()->is('endereco*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Endereço Servidor</span>
                        </a>

                        <ul class="collapse">

                            <li {!! (request()->is('endereco*') ? 'class="active"' : "")!!}>
                                <a href="{{route('endereco.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Endereços</span>
                                </a>
                            </li>

                            <!-- Fim do  -->
                        </ul>
                    </li>
                    <!--fim de-->
                    <!-- Inicio de Cadastros -->
                    <li {!! (request()->is('cadastrosAuxiliares*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-settings"></i>
                            <span>Cadastros Auxiliares</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('cadastrosAuxiliares/origem*') ? 'class="active"' : "")!!}>
                                <a href="{{route('origem.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Origem</span>
                                </a>
                            </li>
                            <li {!! (request()->is('cadastrosAuxiliares/orgao*') ? 'class="active"' : "")!!}>
                                <a href="{{route('orgao.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Orgão</span>
                                </a>
                            </li> 
                            <li {!! (request()->is('cadastrosAuxiliares/funcao*') ? 'class="active"' : "")!!}>
                                <a href="{{route('funcao.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Funções</span>
                                </a>
                            </li>                              
                            <!-- Fim do cadastros auxiliares -->
                        </ul>
                    </li>
                    <!--fim de Cadastros-->
                </ul>
            </nav>
        </div>
    </div>
    <!--=========================*
              End Main Menu
    *===========================-->
</div>
