<ul id="dropdown1" class="dropdown-content">
    <li>
        <a href="#!"><i class="fas fa-sign-out-alt fa-flip-horizontal"></i></a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#!" class="ttext-center">
            <i class="fas fa-cog"></i>
        </a>
    </li>
</ul><!-- USER DROP DOWN -->


<div class="tbg-primary">
    <div class="tcontainer">
        <div class="tflex titems-center tjustify-between tpy-3">
            <div class="">
                <img src="http://www.urbanui.com/cloudui/light/images/logo.svg" alt="">
            </div>
            <a href="{{ url('/') }}" class="ttext-blue-400 tunderline">Back to site</a>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                <i class="fas fa-user-secret fa-2x ttext-white"></i>
                <i class="material-icons right ttext-white" style="margin:0!important">arrow_drop_down</i>
            </a>
        </div>
    </div>
</div>

<div class="row tshadow-md tm-0">
    <div class="tcontainer">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'dashboard', 'active') }}" onclick="location.href = '/admin/dashboard'">
                        <i class="fas fa-desktop tmr-1 fa-lg"></i>
                        Dashboard
                    </a>
                </li>
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'orders', 'active') }}" onclick="location.href = '/admin/orders'">
                        <i class="fas fa-shopping-cart tmr-1 fa-lg"></i>
                        Orders
                    </a>
                </li>
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'products', 'active') }}" onclick="location.href = '/admin/products'">
                        <i class="fas fa-leaf tmr-1 fa-lg"></i> 
                        Products
                    </a>
                </li>
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'inventory', 'active') }}" onclick="location.href = '/admin/inventory'">
                        <i class="fas fa-comment tmr-1 fa-lg"></i> 
                        Inventory
                    </a>
                </li>
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'users', 'active') }}" onclick="location.href = '/admin/users'">
                        <i class="fas fa-users tmr-1 fa-lg"></i> 
                        Users
                    </a>
                </li>
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'categories', 'active') }}" onclick="location.href = '/admin/categories'">
                        <i class="fas fa-comment tmr-1 fa-lg"></i> 
                        Categories
                    </a>
                </li>
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'banners', 'active') }}" onclick="location.href = '/admin/banners'">
                        <i class="fas fa-images tmr-1 fa-lg"></i> 
                        Banners
                    </a>
                </li>
               
                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'settings', 'active') }}" onclick="location.href = '/admin/settings'">
                        <i class="fas fa-cogs tmr-1 fa-lg"></i> 
                        Settings
                    </a>
                </li>

                <li class="tab col">
                    <a href="#" class="{{ is_matched_return_class(admin_parent_nav(), 'inventory', 'active') }}" onclick="location.href = '/admin/inventory'">
                        <i class="fas fa-cogs tmr-1 fa-lg"></i> 
                        Inventory
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>