<?php
// Memulai session untuk menyimpan data login
session_start();

// --- SIMULASI LOGIN ---
// Di aplikasi asli, nilai ini akan didapat dari proses login.
// Untuk testing, ganti nilainya menjadi 'admin' atau 'operator'.
 $_SESSION['user_role'] = 'admin'; 
// -------------------------

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SIAD</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- Logo di bagian atas Sidebar -->
            <div class="sidebar-logo">
                <h1>SIAD</h1>
                <p>Sistem Informasi Administrasi Desa</p>
            </div>

            <!-- Menu Navigasi -->
            <nav class="sidebar-nav">
                <ul class="sidebar-menu">
                    <li><a href="index.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    
                    <li class="submenu">
                        <a href="#" class="submenu-toggle">
                            <i class="fas fa-users"></i> <span>Data Kependudukan</span> <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="#"><i class="fas fa-home"></i> Data Keluarga</a></li>
                            <li><a href="#"><i class="fas fa-user"></i> Data Penduduk</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" class="submenu-toggle">
                            <i class="fas fa-file-alt"></i> <span>Pelayanan</span> <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="#"><i class="fas fa-plus-circle"></i> Buat Surat Baru</a></li>
                            <li><a href="#"><i class="fas fa-history"></i> Riwayat Surat</a></li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="fas fa-chart-bar"></i> Laporan</a></li>
                    
                    <!-- LOGIKA PHP: Menu ini hanya tampil jika user adalah Admin -->
                    <?php if ($_SESSION['user_role'] == 'admin'): ?>
                        <li><a href="#"><i class="fas fa-user-cog"></i> Manajemen User</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- User Profile di bagian bawah Sidebar -->
            <div class="sidebar-user">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <div>
                        <p>Admin</p>
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Konten Utama -->
        <main class="main-content">
            <div class="content-header">
                <h2>Dashboard</h2>
                <p>Selamat datang, <?php echo ucfirst($_SESSION['user_role']); ?>!</p>
            </div>

            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-icon"><i class="fas fa-users"></i></div>
                    <div class="card-info">
                        <h3>1,250</h3>
                        <p>Total Penduduk</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-home"></i></div>
                    <div class="card-info">
                        <h3>420</h3>
                        <p>Total KK</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-file-alt"></i></div>
                    <div class="card-info">
                        <h3>85</h3>
                        <p>Surat Bulan Ini</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-user-plus"></i></div>
                    <div class="card-info">
                        <h3>12</h3>
                        <p>Penduduk Baru</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>