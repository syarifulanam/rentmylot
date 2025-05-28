<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RentMyLot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #343a40;
        }
        .content {
            padding: 30px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">RentMyLot</span>
        <div class="d-flex">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-light">Logout</button>
            </form>
        </div>
    </div>
</nav>

<!-- Body Layout -->
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="p-3 text-white">Admin</h4>
        <a href="#">Dashboard</a>
        <a href="#">Data Lahan</a>
        <a href="#">Data Penyewa</a>
        <a href="#">Transaksi</a>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 content">
        <h2 class="mb-4">Dashboard</h2>

        <div class="card">
            <div class="text-white card-header bg-primary">
                Data Penyewaan
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Penyewa</th>
                        <th>Lokasi Lahan</th>
                        <th>Luas (m²)</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmad Prasetyo</td>
                        <td>Jln. Merdeka No. 10</td>
                        <td>50</td>
                        <td>Rp 1.500.000 / bulan</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lina Marlina</td>
                        <td>Jln. Sudirman No. 24</td>
                        <td>30</td>
                        <td>Rp 950.000 / bulan</td>
                        <td><span class="badge bg-warning text-dark">Menunggu Pembayaran</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>