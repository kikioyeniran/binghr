<nav class="navbar navbar-light bg-color-main p-3 col-md-9 col-lg-9 ml-auto">
    <div class="d-flex col-12 col-md-3 col-lg-1 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
        <a class="navbar-brand" href="#">
            Users
        </a>
        <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="col-12 col-md-4 col-lg-5 d-flex align-items-center">
        {{-- <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search"> --}}
        <div class="form-group mr-2">
            <select name="" id="" class="form-select custom-control">
                <option value="">Year</option>
            </select>
        </div>
        <div class="form-group has-search">
            <div class="input-group">
                <input type="text" class="form-control custom-control search" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                <span class="input-group-text search-icon-container custom-control" id="basic-addon2"><span class="fa fa-search form-control-feedback"></span></span>
            </div>
        </div>

    </div>
    <div class="col-12 col-md-5 col-lg-6 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        <div class="dropdown mr-4">
            <a class="dropdown-toggle nav-dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Language
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>

        <div class="dropdown mr-4">
            <a class="dropdown-toggle nav-dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Reports
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>

        <div class="dropdown mr-4">
            <a class="dropdown-toggle nav-dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Projects
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
        <div class="dropdown mr-4">
            <a class="nav-link-icon" type="button" id="dropdownMenuButton" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
                <div class="after-icon"></div>
            </a>
        </div>
        <div class="dropdown mr-4">
            <a class="nav-link-icon" type="button" id="dropdownMenuButton" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
                <div class="after-icon"></div>
            </a>
        </div>
        <div class="dropdown mr-4">
            <a class="nav-link-icon" type="button" id="dropdownMenuButton" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
            </a>
        </div>

        {{-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Hello, John Doe
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Messages</a></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div> --}}
    </div>
</nav>