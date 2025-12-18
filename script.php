<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();

    function handleSettingsClick(btn, event) {
        // Toggle dropdown
        toggleSettings(event);
        // Highlight this button blue (active state)
        showSection('stay', btn);
    }

    function showSection(section, btn) {
        // 1. Remove 'active' (blue) from all buttons
        document.querySelectorAll(".nav-btn").forEach(e => e.classList.remove("active"));

        // 2. Hide all page sections (unless we just want to highlight the button)
        if (section !== 'stay') {
            document.querySelectorAll(".page-section").forEach(e => e.classList.remove("active-section"));
            document.querySelectorAll('.action-col').forEach(el => el.style.visibility = 'hidden');

            if (section === "list") document.getElementById("view-list").classList.add("active-section");
            else if (section === "manage") {
                document.getElementById("view-list").classList.add("active-section");
                document.querySelectorAll('.action-col').forEach(el => el.style.visibility = 'visible');
            }
            else if (section === "add") document.getElementById("view-add").classList.add("active-section");
            else if (section === "edit") document.getElementById("view-edit").classList.add("active-section");
            else if (section === "settings-page") document.getElementById("view-settings-page").classList.add("active-section");
        }

        // 3. Add 'active' (blue) to the current button
        if (btn) btn.classList.add("active");
    }

    function toggleSettings(event) {
        if (event) event.stopPropagation();
        document.getElementById('dropdown-menu').classList.toggle('show');
    }

    function toggleTheme() {
        const body = document.body;
        const icon = document.getElementById('theme-icon');
        const text = document.getElementById('theme-text');
        body.classList.toggle('dark-mode');

        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
            icon.setAttribute('data-feather', 'sun');
            text.innerText = "Light Mode";
        } else {
            localStorage.setItem('theme', 'light');
            icon.setAttribute('data-feather', 'moon');
            text.innerText = "Dark Mode";
        }
        feather.replace();
    }

    document.addEventListener("DOMContentLoaded", function () {
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            document.getElementById('theme-icon').setAttribute('data-feather', 'sun');
            document.getElementById('theme-text').innerText = "Light Mode";
            feather.replace();
        }

        window.addEventListener('click', function (e) {
            const menu = document.getElementById('dropdown-menu');
            const btn = document.getElementById('btn-settings');
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove('show');
            }
        });

        <?php if ($editMode): ?>
            showSection('edit', document.getElementById('btn-manage'));
        <?php else: ?>
            showSection('list', document.getElementById('btn-list'));
        <?php endif; ?>
    });
</script>