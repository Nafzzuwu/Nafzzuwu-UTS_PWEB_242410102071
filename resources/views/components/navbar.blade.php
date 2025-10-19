<style>
  .navbar-modern {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%) !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    padding: 1rem 0;
  }
  
  .navbar-modern .navbar-brand {
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff !important;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  }
  
  .navbar-modern .navbar-brand:hover {
    transform: scale(1.05);
    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  }
  
  .navbar-modern .nav-link {
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 500;
    padding: 0.5rem 1.2rem !important;
    margin: 0 0.2rem;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
  }
  
  .navbar-modern .nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: #fff;
    transition: all 0.3s ease;
    transform: translateX(-50%);
  }
  
  .navbar-modern .nav-link:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
  }
  
  .navbar-modern .nav-link:hover::before {
    width: 80%;
  }
  
  .navbar-modern .nav-link.active {
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-modern">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
      SkinCS2
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
             href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}" 
             href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">
            Management
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" 
             href="{{ route('profile', ['username' => request()->query('username')]) }}">
            Profile
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>