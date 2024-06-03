<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('user') ? 'active':''}}" href="{{route('users.index')}}">
              <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">User</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('article') ? 'active':''}}" href="{{route('article.index')}}">
              <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Artikel</span>
            </a>
          </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('contact.create') }}">
        <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="menu-title">Contact</span>
      </a>
    </li>

  </ul>
</nav>