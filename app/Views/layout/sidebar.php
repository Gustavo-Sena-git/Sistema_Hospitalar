<aside class="sidebar">
    <header class="sidebar-header">
        <img src="<?= BASE_PUBLIC ?>/assets/img/Logo-png.png" alt="CodingNepal" class="header-logo" />
        <!-- Sidebar header -->
        <button class="sidebar-toggle">
            <span class="material-symbols-rounded">chevron_left </span>
        </button>
    </header>

    <div class="sidebar-content">
        <!-- Search form -->
        <form action="#" class="search-form">
            <span class="material-symbols-rounded"> search </span>
            <input type="search" placeholder="Search..." required> 
        </form>
        

        <!-- Menu list -->
        <ul class="menu-list">
            <li class="menu-item">
                <a href="#" class="menu-link" active>
                    <span class="material-symbols-rounded">dashboard</span>
                    <span class="menu-labal">Dashboard</span>
                </a>
            </li>
        
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="material-symbols-rounded">insert_chart</span>
                    <span class="menu-labal">Analystic</span>
                </a>
            </li>
        
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="material-symbols-rounded">notifications</span>
                    <span class="menu-labal">Notifications</span>
                </a>
            </li>
        
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="material-symbols-rounded">star</span>
                    <span class="menu-labal">Favorites</span>
                </a>
            </li>
        
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="material-symbols-rounded">storefront</span>
                    <span class="menu-labal">Products</span>
                </a>
            </li>
        
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="material-symbols-rounded">group</span>
                    <span class="menu-labal">Customers</span>
                </a>
            </li>
    
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="material-symbols-rounded">settings</span>
                    <span class="menu-labal">Settings</span>
                </a>
            </li>
        </ul>
    </div>

<!--  -->
    <div class="sidebar-footer">
        <button class="theme-toggle">
            <div class="theme label">
                <span class=" theme-icons material-symbols-rounded"> dark_mode </span>
                <span class="theme-text">Dark Mode</span>
            </div>
            <div class="theme-toggle-track">
                <div class="theme-toggle-indicator"></div>
            </div>
        </button>
    </div>
</aside>