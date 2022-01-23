<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{ route('admin.home') }}" class="nav-link {{ request()->route()->named('admin.home') ? 'active' : '' }}">
            <i class="fas fa-home nav-icon"></i>
            <p>Main</p>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/products*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
                Products
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.products.create') }}" class="nav-link {{ request()->route()->named('admin.products.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create product</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->route()->named('admin.products.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List products</p>
                </a>
            </li>
      </ul>
    </li>
</ul>
