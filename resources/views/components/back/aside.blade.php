<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div>
      <p class="app-sidebar__user-name text-center">moath</p>
      <p class="app-sidebar__user-designation">fullstack Developer</p>
    </div>
  </div>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item active" href="{{ route('admin.index') }}">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-product-hunt" aria-hidden="true"></i>
        <span class="app-menu__label">product</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="{{ route('product.index') }}">
            <i class="icon fa fa-circle-o"></i>
            All
          </a>
        </li>
        <li>
          <a class="treeview-item" href="{{ route('product.create') }}" rel="noopener">
            <i class="icon fa fa-circle-o"></i>
            add new product
          </a>
        </li>
      </ul>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-product-hunt" aria-hidden="true"></i>
        <span class="app-menu__label">categoyr</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="{{ route('category.index') }}">
            <i class="icon fa fa-circle-o"></i>
            All
          </a>
        </li>
        <li>
          <a class="treeview-item" href="{{ route('category.create') }}" rel="noopener">
            <i class="icon fa fa-circle-o"></i>
            add new category
          </a>
        </li>
      </ul>
    </li>


  </ul>
</aside>
