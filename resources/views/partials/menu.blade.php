<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('admins_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        {{-- <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Cellular Companies
                    </a>
                    <ul class="nav-dropdown-items">
                       <li class="nav-item">
                        <a href="{{ route("admin.timezone.index") }}" class="nav-link {{ request()->is('admin/timezone') || request()->is('admin/timezone/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Time Zone
                        </a>
                    </li>  
                      
                      <li class="nav-item">
                        <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Countries
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.currency.index") }}" class="nav-link {{ request()->is('admin/currency') || request()->is('admin/currency/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Currency
                        </a>
                    </li> 

                     <li class="nav-item">
                        <a href="{{ route("admin.currencyexchange.index") }}" class="nav-link {{ request()->is('admin/currencyexchange') || request()->is('admin/currencyexchange/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Currency Exchange
                        </a>
                    </li>
                    

                      <li class="nav-item">
                        <a href="{{ route("admin.cellularcompanies.index") }}" class="nav-link {{ request()->is('admin/cellularcompanies') || request()->is('admin/cellularcompanies/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Cellular Company
                        </a>
                    </li>

                   
                       <li class="nav-item">
                        <a href="{{ route("admin.callingphone.index") }}" class="nav-link {{ request()->is('admin/callingphone') || request()->is('admin/callingphone/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Calling Plan
                        </a>
                    </li> 

                     <li class="nav-item">
                        <a href="{{ route("admin.callingplan.index") }}" class="nav-link {{ request()->is('admin/callingplan') || request()->is('admin/callingplan/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                      Calling Plan Costing
                        </a>
                    </li>  
                    </ul>
                </li>
                  <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Routs
                    </a>
                    <ul class="nav-dropdown-items">
                         <li class="nav-item">
                        <a href="{{ route("admin.rout.index") }}" class="nav-link {{ request()->is('admin/rout') || request()->is('admin/rout/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Rout
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.routsaleprice.index") }}" class="nav-link {{ request()->is('admin/routsaleprice') || request()->is('admin/routsaleprice/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Rout Sale Price
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route("admin.carrierbuy.index") }}" class="nav-link {{ request()->is('admin/carrierbuy') || request()->is('admin/carrierbuy/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Carrier Buy Route
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.timerang.index") }}" class="nav-link {{ request()->is('admin/timerang') || request()->is('admin/timerang/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Time Rang
                        </a>
                    </li>
                    </ul>
                </li> 
               
                 <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Invoices
                    </a>
                    <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.carrierinvoices.index") }}" class="nav-link {{ request()->is('admin/carrierinvoices') || request()->is('admin/carrierinvoices/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Carrier Invoice
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.carrierpays.index") }}" class="nav-link {{ request()->is('admin/carrierpays') || request()->is('admin/carrierpays/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Carrier CS Payment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.cpayments.index") }}" class="nav-link {{ request()->is('admin/cpayments') || request()->is('admin/cpayments/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          CPPayment
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route("admin.mcppayments.index") }}" class="nav-link {{ request()->is('admin/mcppayments') || request()->is('admin/mcppayments/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          MCP Payment
                        </a>
                    </li>
                    </ul>
                </li>
                     
                    
                    
                    <!-- <li class="nav-item">
                        <a href="{{ route("admin.cplines.index") }}" class="nav-link {{ request()->is('admin/cplines') || request()->is('admin/cplines/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       CP Line Route
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.mcps.index") }}" class="nav-link {{ request()->is('admin/mcps') || request()->is('admin/mcps/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                        MCP
                        </a>
                    </li> -->
                 <!--    <li class="nav-item">
                        <a href="{{ route("admin.cpunits.index") }}" class="nav-link {{ request()->is('admin/cpunits') || request()->is('admin/cpunits/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       PCUnit uptime 
                        </a>
                    </li> -->
                   
                  <!--   <li class="nav-item">
                        <a href="{{ route("admin.carriersales.index") }}" class="nav-link {{ request()->is('admin/carriersales') || request()->is('admin/carriersales/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Carrier Sales
                        </a>
                    </li>  -->
                   
                   <!--  <li class="nav-item">
                        <a href="{{ route("admin.cps.index") }}" class="nav-link {{ request()->is('admin/cps') || request()->is('admin/cps/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       CP Information
                        </a>
                    </li>  -->
                     
                     <!-- <li class="nav-item">
                        <a href="{{ route("admin.buyerinfos.index") }}" class="nav-link {{ request()->is('admin/buyerinfos') || request()->is('admin/buyerinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Buyer Information
                        </a>
                    </li> -->
                    <!--   <li class="nav-item">
                        <a href="{{ route("admin.carrierinfos.index") }}" class="nav-link {{ request()->is('admin/carrierinfos') || request()->is('admin/carrierinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       Carrier Information
                        </a>
                    </li>   -->     
                 
                  <!--  <li class="nav-item">
                        <a href="{{ route("admin.lines.index") }}" class="nav-link {{ request()->is('admin/lines') || request()->is('admin/lines/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       Lines
                        </a>
                    </li> -->
                  <!--   <li class="nav-item">
                        <a href="{{ route("admin.lineinfos.index") }}" class="nav-link {{ request()->is('admin/lineinfos') || request()->is('admin/lineinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       LineInfo
                        </a>
                    </li>  -->
                  
                   
            @endcan
           <li class="nav-item nav-dropdown @if(request()->is('admin/orders*') || request()->is('admin/payments*') || request()->is('admin/generateorders*') || request()->is('admin/quotationgenerates*') || request()->is('admin/bookingstatus') || request()->is('admin/items'))open @endif">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-bars nav-icon">

                    </i>
                    Profile
                </a>
                <ul class="nav-dropdown-items">

                   
                  

              
                    
                    
                    
                 <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    Change password
                </a>
            </li>       
               
          

                </ul>
         @can('carrier_manage')
                    <li class="nav-item">
                        <a href="{{ route("admin.carrierinfos.index") }}" class="nav-link {{ request()->is('admin/carrierinfos') || request()->is('admin/carrierinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Carrier Info
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route("admin.buyerinfos.index") }}" class="nav-link {{ request()->is('admin/buyerinfos') || request()->is('admin/buyerinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                           Buyer Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.accountantinfos.index") }}" class="nav-link {{ request()->is('admin/accountantinfos') || request()->is('admin/accountantinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                           Accountant Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.techinfos.index") }}" class="nav-link {{ request()->is('admin/techinfos') || request()->is('admin/techinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Tech Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.bankinfos.index") }}" class="nav-link {{ request()->is('admin/bankinfos') || request()->is('admin/bankinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                        Bank Info
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route("admin.paymethods.index") }}" class="nav-link {{ request()->is('admin/paymethods') || request()->is('admin/paymethods/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                        Payment Method
                        </a>
                    </li>
        @endcan
         @can('carriersale_manage')
                    <li class="nav-item">
                        <a href="{{ route("admin.carriersales.index") }}" class="nav-link {{ request()->is('admin/carriersales') || request()->is('admin/carriersales/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Carrier Sales
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.financials.index") }}" class="nav-link {{ request()->is('admin/financials') || request()->is('admin/financials/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       Financial Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.payments.index") }}" class="nav-link {{ request()->is('admin/payments') || request()->is('admin/payments/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       Payment Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.digitals.index") }}" class="nav-link {{ request()->is('admin/digitals') || request()->is('admin/digitals/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       Digital Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.bankinfos.index") }}" class="nav-link {{ request()->is('admin/bankinfos') || request()->is('admin/bankinfos/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                       Bank Information
                        </a>
                    </li>
                   @endcan
                    @can('cp_manage')
                   <li class="nav-item">
                        <a href="{{ route("admin.whatsapps.index") }}" class="nav-link {{ request()->is('admin/whatsapps') || request()->is('admin/whatsapps/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Whatsapp
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route("admin.sims.index") }}" class="nav-link {{ request()->is('admin/sims') || request()->is('admin/sims/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                          Android
                        </a>
                    </li> 
                 @endcan    
                   
                  
           
        
                    
                 <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="nav-icon fas fa-fw fa-sign-out-alt">

                            </i>
                            {{ trans('global.logout') }}
                        </a>
                </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>