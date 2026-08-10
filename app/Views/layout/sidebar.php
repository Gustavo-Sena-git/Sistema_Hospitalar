<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!---------->
<nav class="site-nav">
    <button type="button" class="sidebar-toggle" aria-label="Abrir menu lateral">
        <span class="material-symbols-rounded">chevron_left</span>
    </button>
</nav>
<!---------->
<aside class="sidebar">
    <header class="sidebar-header">
        <img src="<?= BASE_PUBLIC ?>/assets/img/Logo-png.png" alt="Logo do hospital" class="header-logo" />
        <button type="button" class="sidebar-toggle" aria-label="Alternar menu lateral">
            <span class="material-symbols-rounded">menu</span>
        </button>
    </header>
<!---------->
    <div class="sidebar-content">
        <form action="#" class="search-form">
            <span class="material-symbols-rounded">search</span>
            <input type="search" placeholder="Search..." aria-label="Buscar" required>
        </form>
<!---------->
        <ul class="menu-list">
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/dashboard.php" class="menu-link" <?= $paginaAtual == 'dashboard.php' ? 'active' : '' ?>>
                    <span class="material-symbols-rounded">dashboard</span>
                    <span class="menu-label">Dashboard</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/pacientes.php" class="menu-link <?= $paginaAtual == 'pacientes.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">groups</span>
                    <span class="menu-label">Pacientes</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/medicos.php" class="menu-link <?= $paginaAtual == 'medicos.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">medical_services</span>
                    <span class="menu-label">Médicos</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/consultas.php" class="menu-link <?= $paginaAtual == 'consultas.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">calendar_month</span>
                    <span class="menu-label">Consultas</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/internacoes.php" class="menu-link <?= $paginaAtual == 'internacoes.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">local_hospital</span>
                    <span class="menu-label">Internações</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/medicamentos.php" class="menu-link <?= $paginaAtual == 'medicamentos.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">medication</span>
                    <span class="menu-label">Medicamentos</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/relatorios.php" class="menu-link <?= $paginaAtual == 'relatorios.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">bar_chart</span>
                    <span class="menu-label">Relatórios</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/notificacoes.php" class="menu-link <?= $paginaAtual == 'notificacoes.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">notifications</span>
                    <span class="menu-label">Notificações</span>
                </a>
            </li>
<!---------->
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/configuracoes.php" class="menu-link <?= $paginaAtual == 'configuracoes.php' ? 'active' : '' ?>">
                    <span class="material-symbols-rounded">settings</span>
                    <span class="menu-label">Configurações</span>
                </a>
            </li>
        </ul>
    </div>
<!---------->
    <div class="sidebar-footer">
        <button type="button" class="theme-toggle" aria-label="Alternar tema">
            <div class="theme-label">
                <span class="theme-icon material-symbols-rounded">dark_mode</span>
                <span class="theme-text">Dark Mode</span>
            </div>
            <div class="theme-toggle-track">
                <div class="theme-toggle-indicator"></div>
            </div>
        </button>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="<?= BASE_PUBLIC ?>/sair.php" class="menu-link">
                    <span class="material-symbols-rounded">logout</span>
                    <span class="menu-label">Sair</span>
                </a>
            </li>
        </ul>
    </div>
</aside>