<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNICEF-style Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #0066b3;
            --secondary-blue: #0099ff;
            --light-blue: #e6f3ff;
        }

        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: var(--primary-blue);
            min-height: 100vh;
            position: fixed;
            width: 250px;
            padding: 20px;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .navbar-custom {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .metric-icon {
            font-size: 2rem;
            color: var(--secondary-blue);
        }

        .menu-item {
            padding: 12px 15px;
            border-radius: 8px;
            margin: 5px 0;
            transition: all 0.3s;
        }

        .menu-item:hover {
            background-color: var(--secondary-blue);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="mb-4"><i class="fas fa-hand-holding-heart"></i> Dashboard</h3>
        <div class="menu-item">
            <i class="fas fa-home"></i> Overview
        </div>
        <div class="menu-item">
            <i class="fas fa-chart-line"></i> Analytics
        </div>
        <div class="menu-item">
            <i class="fas fa-users"></i> Beneficiaries
        </div>
        <div class="menu-item">
            <i class="fas fa-project-diagram"></i> Projects
        </div>
        <div class="menu-item">
            <i class="fas fa-file-invoice"></i> Reports
        </div>
        <div class="menu-item">
            <i class="fas fa-cog"></i> Settings
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand navbar-custom">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search...">
                </form>
                <div class="d-flex align-items-center">
                    <i class="fas fa-bell text-muted me-3"></i>
                    <div class="dropdown">
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile">
                    </div>
                </div>
            </div>
        </nav>

        <!-- Summary Cards -->
        <div class="row mt-4">
            <div class="col-md-3 mb-4">
                <div class="card card-custom bg-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted">Total Beneficiaries</h5>
                                <h2>24,501</h2>
                            </div>
                            <i class="metric-icon fas fa-users"></i>
                        </div>
                        <div class="text-success"><i class="fas fa-arrow-up"></i> 12% from last month</div>
                    </div>
                </div>
            </div>
            <!-- Repeat similar cards for other metrics -->
        </div>

        <!-- Charts Section -->
        <div class="row">
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Program Coverage</h5>
                        <canvas id="mainChart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Regional Distribution</h5>
                        <canvas id="regionalChart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activities</h5>
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                New vaccination program launched in Region X
                                <span class="text-muted float-end">2h ago</span>
                            </li>
                            <!-- Add more activities -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Initialize charts (example using Chart.js)
        const mainChart = new Chart(document.getElementById('mainChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Beneficiaries Reached',
                    data: [65, 59, 80, 81, 56, 55],
                    borderColor: '#0066b3',
                    tension: 0.4
                }]
            }
        });

        const regionalChart = new Chart(document.getElementById('regionalChart'), {
            type: 'bar',
            data: {
                labels: ['Region A', 'Region B', 'Region C', 'Region D'],
                datasets: [{
                    label: 'Distribution',
                    data: [12, 19, 3, 5],
                    backgroundColor: '#0099ff'
                }]
            }
        });
    </script>
</body>
</html>