
<div class="sidebar" data-color="azure" data-background-color="white" data-image="">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      <img title="VSRK Capital" class="img-fluid vsrk-logo-admin" src="{{asset('admin/img/logo.png')}}">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{@$activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('vsrkAdmin') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      </li>
      <li class="nav-item{{@$activePage == 'media' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">perm_media</i>
            <p>{{ __('Media') }}</p>
        </a>
      </li>
      <li class="nav-item{{@$activePage == 'blogs' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('all-blogs') }}">
          <i class="material-icons">history_edu</i>
            <p>{{ __('Blogs') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'FormTable' ||@$activePage == 'allForm') ? ' active' : '' }}">
        <a class="nav-link   {{ ($activePage == 'FormTable' ||@$activePage == 'allForm') ? '' : 'collapsed' }}" data-toggle="collapse" href="#MFForms" aria-expanded="{{ ($activePage == 'FormTable' ||@$activePage == 'allForm') ? 'true' : 'false' }}">
          <i><i class="material-icons">content_paste</i></i>
          <p>{{ __('Forms') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse  {{ ($activePage == 'FormTable' ||@$activePage == 'allForm') ? 'show' : '' }}" id="MFForms">
          <ul class="nav">
            <li class="nav-item{{@$activePage == 'FormTable' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('all-forms') }}">
              <i class="material-icons">content_paste</i>
                <p>{{ __('MF Forms') }}</p>
              </a>
            </li>
            <li class="nav-item{{@$activePage == 'allForm' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('all-forms') }}">
              <i class="material-icons">content_paste</i>
                <p>{{ __('All Other Forms') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{@$activePage == 'team' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('team') }}">
          <i class="material-icons">groups</i>
          <p>{{ __('Team') }}</p>
        </a>
      </li>
      <li class="nav-item{{@$activePage == 'form-category' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cateTag.index') }}">
              <i class="material-icons">category</i>
                <p> {{ __('Categories/ Tags') }} </p>
              </a>
            </li>
      <li class="nav-item {{ ($activePage == 'profile' ||@$activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i><span class="material-icons">pages</span></i>
          <p>{{ __('All Static Pages') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{@$activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{@$activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{@$activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{@$activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' ||@$activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('admin') }}/img/laravel.svg"></i>
          <p>{{ __('User Section') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{@$activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{@$activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
        
      <li class="nav-item{{@$activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{@$activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>
