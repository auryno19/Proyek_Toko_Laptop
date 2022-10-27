<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
    <img src="{{ asset('images\logo.png') }}" alt="logo" height="30" class="d-inline-block align-text-top">     
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class= "nav-link {{ Request::is('katalog') ? 'active' : '' }} "  href="/katalog"><i class="bi bi-laptop mx-2"></i>Katalog</a>
                </li>
                <li class="nav-item">
                    <a class= "nav-link {{ Request::is('service') ? 'active' : '' }} "  href="/service"><i class="bi bi-wrench-adjustable-circle mx-2"></i>Service</a>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li> <button type="submit" class="dropdown-item" > Category 1 </button></li>
                        <li> <button type="submit" class="dropdown-item" > Category 2 </button></li>
                    </ul>
                  </li>
               
            </ul>


            <ul class="navbar-nav ms-auto">
                @auth
                @if(auth()->user()->role == 'member')
                <li class="nav-item">
                    <a class= "nav-link {{ Request::is('courseMember') ? 'active' : '' }}"  href="/courseMember"><i class="bi bi-journal-text mx-2"></i>My Course</a>
                </li>
                <div class="vr" style="color :white; margin: 0px 8px 0px 8px;"></div>
                @endif
                <li class="nav-item dropdown">            
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back , {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @if(auth()->user()->role == 'admin')
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard-minus"></i> My Dashboard</a></li>
                      @else
                      <li><a class="dropdown-item" href="/transaksiMember"><i class="bi bi-menu-button-wide"></i> My Transaction</a></li>
                      @endif
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" action="get">
                              @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                          </form>
                       
                    </ul>
                  </li>
                @else
                <li>
                    <li class="nav-item">
                        <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
           
        </div>
    </div>
    </nav>