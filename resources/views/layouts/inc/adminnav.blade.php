 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg  fixed-top " id="navigation-example">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="dashboard-title"> TACTKORS </a>
      </div>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav"> 
          <li class="nav-item dropdown">
            
            <a class="btn btn-primary btn-sm" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" >
              LOGOUT
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              <a  class="btn btn-primary btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sure</a>
                <a  class="btn btn-danger btn-sm back">Cancel</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->