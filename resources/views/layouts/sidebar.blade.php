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
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>dashboard</span>
                        </a>
                        <ul class="collapse">
                           <li {!! (request()->is('folhaPagamento*') ? 'class="active"' : "")!!}>
                                <a href="{{route('home') }}">Inicio</a></li>
                            
                        </ul>
                    </li>
                    <!-- Inicio de Servidor -->
                    <li {!! (request()->is('servidor*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="icon-profile-male"></i>
                            
                            <span>Servidor</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('servidor*') ? 'class="active"' : "")!!}>
                                <a href="{{route('servidor.index')}}">
                                    <i class="feather ft-users"></i>
                                    <span>Servidores</span>
                                </a>
                            </li>
                            <!-- Fim do -->
                            <li {!! (request()->is('contrato*') ? 'class="active"' : "")!!}>
                                <a href="{{route('contrato.index')}}">
                                    <i class="icon-documents"></i>
                                    <span>Contratos</span>
                                </a>
                            </li>
                            <!-- -->
                            <li {!! (request()->is('endereco*') ? 'class="active"' : "")!!}>
                                <a href="{{route('endereco.index')}}">
                                    <i class="icon-map"></i>
                                    <span>Endereços</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <!--fim de Servidor-->
                    <!-- Inicio de Contrato 
                    <li {!! (request()->is('contrato*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="icon-pencil"></i>
                            <span>Contrato</span>
                        </a>

                        <ul class="collapse">

                            <li {!! (request()->is('contrato*') ? 'class="active"' : "")!!}>
                                <a href="{{route('contrato.index')}}">
                                    <i class="icon-documents"></i>
                                    <span>Contratos</span>
                                </a>
                            </li>

                            <!-- Fim do cadastros auxiliares
                        </ul>
                    </li>  
                    <li {!! (request()->is('endereco*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class=" icon-streetsign"></i>
                            <span>Endereço Servidor</span>
                        </a>

                        <ul class="collapse">

                            <li {!! (request()->is('endereco*') ? 'class="active"' : "")!!}>
                                <a href="{{route('endereco.index')}}">
                                    <i class="icon-map"></i>
                                    <span>Endereços</span>
                                </a>
                            </li>

                         
                        </ul>
                    </li> -->
                    <!--fim de-->
                    <!-- Inicio de Administração -->
                    <li {!! (request()->is('administracao*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="icon-profile-male"></i>
                            
                            <span>Administração</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('administracao/atendimentos*') ? 'class="active"' : "")!!}>
                                <a href="{{route('atendimentos.index')}}">
                                    <i class="feather ft-users"></i>
                                    <span>Atendimentos</span>
                                </a>
                            </li>
                          @role('Admin')
                            <!-- Usuario -->
                            <li {!! (request()->is('administracao/users*') ? 'class="active"' : "")!!}>
                                <a href="{{route('users.index')}}">
                                    <i class="feather ft-users"></i>
                                    <span>Usuários</span>
                                </a>
                            </li>
                            <!-- Fim do User -->
                            <!-- Roles -->
                            <li {!! (request()->is('administracao/roles*') ? 'class="active"' : "")!!}>
                                <a href="{{route('roles.index')}}">
                                    <i class="feather ft-users"></i>
                                    <span>Regras</span>
                                </a>
                            </li>
                            @endrole
                            <!-- Fim do Roles -->
                            <!-- Fim do cadastros auxiliares -->
                        </ul>
                    </li>
                    <!--fim de Administração-->
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
