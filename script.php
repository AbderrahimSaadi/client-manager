 <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        function handleSettingsClick(btn, event) {
            toggleSettings(event);
            showSection('stay', btn);
        }

        function showSection(section, btn) {
            document.querySelectorAll(".nav-btn").forEach(e => e.classList.remove("active"));
            if (section !== 'stay') {
                document.querySelectorAll(".page-section").forEach(e => e.classList.remove("active-section"));
                const actionCols = document.querySelectorAll('.action-col');

                if (section === "list") {
                    document.getElementById("view-list").classList.add("active-section");
                    actionCols.forEach(el => el.style.display = 'none');
                }
                else if (section === "manage") {
                    document.getElementById("view-list").classList.add("active-section");
                    actionCols.forEach(el => el.style.display = 'table-cell');
                }
                else if (section === "add") document.getElementById("view-add").classList.add("active-section");
                else if (section === "edit") document.getElementById("view-edit").classList.add("active-section");
                else if (section === "download") document.getElementById("view-download").classList.add("active-section");
                else if (section === "settings-page") document.getElementById("view-settings-page").classList.add("active-section");
            }
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

        function printAllClients() {
            window.print();
        }

        document.addEventListener("DOMContentLoaded", function () {
            if (localStorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark-mode');
                const icon = document.getElementById('theme-icon');
                if (icon) icon.setAttribute('data-feather', 'sun');
                const text = document.getElementById('theme-text');
                if (text) text.innerText = "Light Mode";
                feather.replace();
            }
            window.addEventListener('click', function (e) {
                const menu = document.getElementById('dropdown-menu');
                const btn = document.getElementById('btn-settings');
                if (menu && btn && !btn.contains(e.target) && !menu.contains(e.target)) menu.classList.remove('show');
            });
            <?php if ($editMode): ?> showSection('edit', document.getElementById('btn-manage')); <?php else: ?> showSection('list', document.getElementById('btn-list')); <?php endif; ?>
        });
    </script>