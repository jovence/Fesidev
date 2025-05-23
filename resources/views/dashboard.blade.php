<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>UNICEF Dashboard</title>
  <link rel="icon" href="https://www.unicef.org/sites/default/files/favicon.ico " type="image/x-icon"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap @5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css "/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto :wght@300;400;500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/styles.css"/>
</head>
<body class="dark-theme">
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <i class="fas fa-hand-holding-heart logo-icon"></i>
      <h3>Dashboard</h3>
      <button class="sidebar-toggle" id="sidebarToggle">
        <i class="fas fa-chevron-left"></i>
      </button>
    </div>
    <a href="#" class="menu-item active"><i class="fas fa-home"></i><span>Overview</span></a>
    <a href="#" class="menu-item"><i class="fas fa-chart-line"></i><span>Analytics</span></a>
    <a href="#" class="menu-item"><i class="fas fa-users"></i><span>Beneficiaries</span></a>
    <a href="#" class="menu-item"><i class="fas fa-project-diagram"></i><span>Projects</span></a>
    <a href="#" class="menu-item"><i class="fas fa-file-invoice"></i><span>Reports</span></a>
    <a href="#" class="menu-item"><i class="fas fa-cog"></i><span>Settings</span></a>
    <a href="#" class="menu-item"><i class="fas fa-question-circle"></i><span>Help & Support</span></a>
    <a href="#" class="menu-item mt-auto"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="mainContent">
    <nav class="navbar navbar-expand navbar-custom">
      <div class="container-fluid">
        <form class="d-flex w-auto me-3">
          <input class="form-control" type="search" placeholder="Search..." aria-label="Search"/>
        </form>
        <div class="d-flex align-items-center ms-auto">
          <button class="btn btn-link nav-icon-btn position-relative me-3" title="Notifications">
            <i class="fas fa-bell"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
          </button>
          <button class="btn btn-link nav-icon-btn me-3" title="Messages">
            <i class="fas fa-envelope"></i>
          </button>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown"
               data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://via.placeholder.com/45/0066b3/FFFFFF?text=JP " class="rounded-circle profile-img me-2" alt="Profile"/>
              <span class="d-none d-md-block text-white">John Doe</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="profileDropdown">
              <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-2"></i>Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
              <li><hr class="dropdown-divider"/></li>
              <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <h1 class="mb-4"><i class="fas fa-tachometer-alt me-2"></i> Overview</h1>

    <!-- Metric Cards -->
    <div class="row g-4 mb-5">
      <div class="col-xl-3 col-md-6">
        <div class="card card-custom h-100">
          <div class="card-body">
            <div class="metric-card-content">
              <div>
                <h5>Total Beneficiaries</h5>
                <h2>24,501</h2>
              </div>
              <i class="metric-icon fas fa-users"></i>
            </div>
            <div class="metric-card-footer">
              <span class="text-success me-1"><i class="fas fa-arrow-up"></i> 12%</span> from last month
            </div>
          </div>
        </div>
      </div>
      <!-- More cards... -->
    </div>

    <!-- Charts -->
    <div class="row g-4 mb-5">
      <div class="col-lg-8">
        <div class="card card-custom">
          <div class="card-header">
            <h5 class="card-title">Program Coverage Trends</h5>
          </div>
          <div class="card-body chart-container">
            <canvas id="mainChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-custom">
          <div class="card-header">
            <h5 class="card-title">Regional Distribution</h5>
          </div>
          <div class="card-body chart-container">
            <canvas id="regionalChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Activity List & Table -->
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card card-custom">
          <div class="card-header">
            <h5 class="card-title">Recent Activities</h5>
          </div>
          <div class="card-body p-0">
            <ul class="list-group list-group-flush">
              <!-- Activity items -->
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-custom">
          <div class="card-header">
            <h5 class="card-title">Key Performance Indicators</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <!-- Table rows -->
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap @5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js @4.4.2/dist/chart.umd.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
