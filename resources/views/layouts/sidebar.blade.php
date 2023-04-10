<div class="sidebar-menu">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="{{ URL::to('home') }}"><img src="{{asset('assets/images/rbprev_siap.png')}}" alt="logo"></a>
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
                        <a href="{{route('home')}}" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>Inicio</span>
                        </a>
                        
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
                                <a href="{{route('contratos.index')}}">
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

                    <!- Fim do cadastros auxiliares
                </ul>
            </li> -->
                    <li {!! (request()->is('atendimentos*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class=" icon-streetsign"></i>
                            <span>Atendimentos</span>
                        </a>

                        <ul class="collapse">

                            <li {!! (request()->is('atendimentos*') ? 'class="active"' : "")!!}>
                                <a href="{{route('atendimentos.index')}}">
                                    <i class="icon-clipboard"></i>
                                    <span>Atendimentos</span>
                                </a>
                            </li>
                            <li {!! (request()->is('atendimentos*') ? 'class="active"' : "")!!}>
                                <a href="{{route('atendimentos.dash')}}" target="_blank">
                                    <i class="icon-bargraph"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li {!! (request()->is('atendimentos*') ? 'class="active"' : "")!!}>
                                <a href="{{route('atendimentosHistorico.historico')}}">
                                    <i class="icon-book-open"></i>
                                    <span>Historico</span>
                                </a>
                            </li>
                            <li {!! (request()->is('atendimentos*') ? 'class="active"' : "")!!}>
                                <a href="{{route('atendimentos.pdfGeralRecadastramento')}}" target="_blank">
                                    <i class="icon-book-open"></i>
                                    <span>Relatorio recadastramento</span>
                                </a>
                            </li>


                        </ul>
                    </li>
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
                    <!--Inicio  de DAP -->
                    <!--<li {!! (request()->is('dap*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-money"></i>
                            <span>DAP</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('dap/*') ? 'class="active"' : "")!!}>
                                <a href="{{route('dap.index')}}">
                                    <i class="ti-money"></i>
                                    <span>DAP</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <!--Fim de DAP-->
                    <!--Inicio  de dIPREV -->
                    <li {!! (request()->is('diprev*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-agenda"></i>
                            <span>DIPREV</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('diprev/*') ? 'class="active"' : "")!!}>
                                <a href="{{route('diprev.index')}}">
                                    <i class="ti-archive"></i>
                                    <span>Requerimentos</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="collapse">
                            <li {!! (request()->is('diprev/*') ? 'class="active"' : "")!!}>
                                <a href="{{route('ctc.index')}}">
                                    <i class="ti-envelope"></i>
                                    <span>CTC</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="collapse">
                            <li {!! (request()->is('/*') ? 'class="active"' : "")!!}>
                                <a href="{{route('aposentadorias.index')}}">
                                    <i class="ti-envelope"></i>
                                    <span>Aposentadorias</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Fim de Diprev-->
                    <!--Inicio  de DAF -->
                    <li {!! (request()->is('daf*') ? 'class="active"' : "")!!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-briefcase"></i>
                            <span>DAF</span>
                        </a>

                        <ul class="collapse">
                            <li {!! (request()->is('daf/*') ? 'class="active"' : "")!!}>
                                <a href="{{route('almoxarifado.index')}}">
                                    <i class="ti-layers-alt"></i>
                                    <span>Almoxarifado</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Fim de DAF-->
                     <!--Inicio  de Folha
                    <li {!! (request()->is('folhaPagamento*') ? 'class="active"' : "")!!}>
                        <a href="{{route('folhaPagamento.index')}}" aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span>Folha</span>
                        </a>                                          
                    </li>
                    Fim de DAF-->
                     <!--Inicio  de Cédula -->
                    <li {!! (request()->is('dirf*') ? 'class="active"' : "")!!}>
                        <a href="{{route('dirf.index')}}" aria-expanded="true">
                            <i class="ti-money"></i>
                            <span>Cédula C</span>
                        </a>                                          
                    </li>
                    <!--Fim de DAF-->
                    <!--Inicio  de Atualizações de rbprev numero -->
                    <li {!! (request()->is('rbprevAtualizacoes*') ? 'class="active"' : "")!!}>
                        <a href="{{route('rbprevAtualizacoes.index')}}" aria-expanded="true">
                            <i class="ti-reload"></i>
                            <span>Atualizações site principal</span>
                        </a>                                          
                    </li>
                    <!--Fim de Atualizações de rbprev numero-->

                </ul>
            </nav>
        </div>
    </div>
    <!--=========================*
              End Main Menu
    *===========================-->
</div>
