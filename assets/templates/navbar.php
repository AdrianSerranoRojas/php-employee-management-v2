<header class="main-header d-flex navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex d-flex-center main-header__container">
        <img src="https://i2.wp.com/assemblerschool.com/wp-content/uploads/2020/11/LOGO-ORG.png?fit=479%2C131" alt="logo" class="main-header-logo">
        <h3 class="main-header-title navbar-brand">Employees Management</h3>
        <nav id="mainNav" data-base_url="<?= BASE_URL ?>"  class="main-header__menu collapse navbar-collapse" id="navbarText">
            <ul class="list-container d-flex navbar-nav mr-auto">
              <li class="nav-item" id="tab-dashboard">
              <a class="nav-link" href="<?= BASE_URL ?>employee/dashboard">Dashboard</a></li>
              <li class="nav-item" id="tab-employee">
              <a class="nav-link" href="<?= BASE_URL ?>employee/show2">New Employee</a></li>
            
            </ul>
            <form action="<?= BASE_URL ?>login/logoutUser" method="post" class="form-inline ml-auto">
            <button class="btn btn-outline-primary ml-auto my-2 my-sm-0" type="submit">Logout</button>
        </form>
        </nav>
    </div>
</header>