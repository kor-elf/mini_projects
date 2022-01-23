<nav class="navbar navbar-expand">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{ route('admin.products.create') }}" class="nav-link">Create</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->route()->named('admin.products.index') ? 'd-none' : '' }}">List</a>
        </li>
    </ul>
  </nav>
