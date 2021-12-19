<style>.row {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: -15px;
}
</style>
<div class="header-bottom-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-4">
                        <!-- logo start -->
                        <div class="logo">
                            <h3 style="color:#000">Muslim Entreprenuer 360</h3>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <!-- main-menu-area start -->
                        <div class="main-menu-area">
                            <nav class="main-navigation" style="display: block;">
                                <ul>
                                    <li class="active"><a href="{{ route('home.index') }}">Home  </a>
                                        
                                    </li>
                                   
                                  
                                <li><a href="{{url('aboutus')}}">About</a></li>
                                <li><a href="{{url('contactus')}}">Contact us</a></li>
                               <li><a href="#">Blog  <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('blog')}}">Ethic Men Force</a></li>
                                            <li><a href="{{url('blog')}}">IT Platform</a></li>
                                            <li><a href="{{url('blog')}}">Online cab Healing service</a></li>
                                            <li><a href="{{url('blog')}}">New Start ups</a></li>
                                            <li><a href="{{url('blog')}}">Mosque</a></li>
                                        </ul>
                                    </li>
                                <li><a href="{{url('login')}}">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu-area End -->
                    </div>
                    
                    <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                </div>
            </div>
        </div>