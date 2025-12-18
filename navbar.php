    <nav class="side-navbar">
        <div class="logo-container mb-5">
            <img src="assets/image_1.png" onerror="this.src='https://via.placeholder.com/60?text=Logo'" class="log">
        </div>

        <button class="nav-btn active" onclick="showSection('list', this)" id="btn-list">
            <i data-feather="home"></i>
        </button>
        <button class="nav-btn" onclick="showSection('add', this)" id="btn-add">
            <i data-feather="plus"></i>
        </button>
        <button class="nav-btn" onclick="showSection('manage', this)" id="btn-manage">
            <i data-feather="edit"></i>
        </button>
        <button class="nav-btn" onclick="showSection('settings-page', this)" id="btn-settings-page">
            <i data-feather="user-check"></i>
        </button>

        <div class="settings-wrapper mt-auto mb-4" style="position: relative;">
            <button class="nav-btn" id="btn-settings" onclick="handleSettingsClick(this, event)">
                <i data-feather="settings"></i>
            </button>
            <div class="settings-dropdown" id="dropdown-menu">
                <h6 class="fw-bold mb-3">Settings</h6>
                <button class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2 mb-2" onclick="toggleTheme()">
                    <i data-feather="moon" id="theme-icon"></i>
                    <span id="theme-text">Dark Mode</span>
                </button>
                <hr style="opacity:0.1">
                <a href="login.php?action=logout" class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2" onclick="return confirm('Voulez-vous vous déconnecter ?')">
                    <i data-feather="log-out"></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </div>
    </nav>