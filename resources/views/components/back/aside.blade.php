<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div class="mr-auto ml-auto">
      <p class="app-sidebar__user-name text-center">moath</p>
      <p class="app-sidebar__user-designation">fullstack Developer</p>
    </div>
  </div>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item {{  Request::is('admin') ? 'active' : '' }}" href="{{ route('admin.index') }}">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item {{  Request::is('admin/homeAdmin') ? 'active' : '' }}" href="{{ route('homeAdmin') }}">
        <i class="app-menu__icon fa fa-home"></i>
        <span class="app-menu__label">home</span>
      </a>
    </li>
    <li class="treeview">
      <a class="app-menu__item {{  Request::is('admin/product') || Request::is('admin/product/create') ? 'active' : '' }}" href="#" data-toggle="treeview">
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
      <a class="app-menu__item {{  Request::is('admin/category') || Request::is('admin/category/create') ? 'active' : '' }}" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-eercast" aria-hidden="true"></i>
        <span class="app-menu__label">category</span>
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
    <li class="treeview">
      <a class="app-menu__item {{  Request::is('admin/brand') || Request::is('admin/brand/create') ? 'active' : '' }}" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa  fa-list-alt" aria-hidden="true"></i>
        <span class="app-menu__label">brand</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="{{ route('brand.index') }}">
            <i class="icon fa fa-circle-o"></i>
            All
          </a>
        </li>
        <li>
          <a class="treeview-item" href="{{ route('brand.create') }}" rel="noopener">
            <i class="icon fa fa-circle-o"></i>
            add new brand
          </a>
        </li>
      </ul>
    </li>

    <li>
      <a class="app-menu__item {{  Request::is('couponIndex') ? 'active' : '' }}" href="{{ route('couponIndex') }}">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Coupon</span>
      </a>
    </li>

    <li>
      <a class="app-menu__item {{  Request::is('payment.index') ? 'active' : '' }}" href="{{ route('payment.index') }}">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">payment</span>
      </a>
    </li>


  </ul>
</aside>
