<div class="header-area">
    <div class="row align-items-center">
  
    <div class="col-md-12 col-sm-12">
        <!--==================================*
                 Navigation and Search
        *====================================-->
        <div class="col-md-6 col-sm-12">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
           
        </div>
        <!--==================================*
                 End Navigation and Search
        *====================================-->

        <!--==================================*
                 Notification Section
        *====================================-->
        <div class="col-md-12 col-sm-12">
            <ul id="notification_section" class="notification-area pull-right">
             <div>

                
             
                <li class="user-dropdown">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d_none_sm"> <font color="#6600ff">{{Auth::user()->name}} </font><i class="ti-angle-down"></i></span>
                            <img width="20" height="10" src="{{asset('assets/images/sair.png')}}" alt="" class="img-fluid">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">                         
                            <a class="dropdown-item" href="/logout"><font color="#ff0000"><i class="ti-power-off"></i>Logout</a> </font>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--==================================*
                 End Notification Section
        *====================================-->
        </div>
    </div>
</div>
