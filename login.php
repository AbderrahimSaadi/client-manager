<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css2?family=VT323&family=Montserrat:wght@300;600&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style_login.css">
</head>

<body>
    <div class="stage" role="main" id="main-content">
        <div class="brand" aria-hidden="false">
            <div class="logo" aria-hidden="true">
            </div>

        </div>

        <section class="card" id="card" role="region" aria-label="Terminal Login">
            <h1>LOGIN ADMIN</h1>

            <form autocomplete="off" id="login-form">

                <div class="field">
                    <input id="user" type="text" placeholder="Email" />
                    <label for="user" class="floating">EMAIL</label>
                </div>

                <div class="field">
                    <input id="key" type="password" placeholder="Password" />
                    <label for="key" class="floating">PASSWORD</label>
                    <div class="eye" onclick="toggle()" title="Show/Hide">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="eyeIcon">
                                <path
                                    d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-4 0-7.8-3-10-8 1.4-2 3.6-3.8 6.4-4.5M10.55 5.14A10 10 0 0 1 12 4c4 0 7.8 3 10 8-.6 1.1-1.3 2.2-2.3 3.1"
                                    stroke="var(--text)" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M1 1l22 22" stroke="var(--text)" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                </div>



                <button class="execute" type="submit">SE CONNECTER</button>

            </form>


        </section>
    </div>

    <div class="loader" id="loader">
        <div class="loader-wrapper">
            <span class="loader-letter">G</span>
            <span class="loader-letter">e</span>
            <span class="loader-letter">n</span>
            <span class="loader-letter">e</span>
            <span class="loader-letter">r</span>
            <span class="loader-letter">a</span>
            <span class="loader-letter">t</span>
            <span class="loader-letter">i</span>
            <span class="loader-letter">n</span>
            <span class="loader-letter">g</span>
            <span class="loader-letter">.</span>
            <span class="loader-letter">.</span>
            <span class="loader-letter">.</span>
            <div class="loader-circle"></div>
        </div>
    </div>
    <script>
        // 1. SVG Assets for the Eye Toggle
        const SVG_STROKE_COLOR = 'var(--text)';
        const openEyeSVG = `<path d="M2 12s4-8 10-8 10 8 10 8-4 8-10 8S2 12 2 12z" stroke="${SVG_STROKE_COLOR}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><circle cx="12" cy="12" r="3" stroke="${SVG_STROKE_COLOR}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />`;
        const closedEyeSVG = `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-4 0-7.8-3-10-8 1.4-2 3.6-3.8 6.4-4.5M10.55 5.14A10 10 0 0 1 12 4c4 0 7.8 3 10 8-.6 1.1-1.3 2.2-2.3 3.1" stroke="${SVG_STROKE_COLOR}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M1 1l22 22" stroke="${SVG_STROKE_COLOR}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />`;

        // 2. Toggle Password Visibility
        function toggle() {
            const p = document.getElementById('key');
            const iconGroup = document.getElementById('eyeIcon');

            if (p.type === 'password') {
                p.type = 'text';
                iconGroup.innerHTML = openEyeSVG;
            } else {
                p.type = 'password';
                iconGroup.innerHTML = closedEyeSVG;
            }
        }

        // 3. Show Loader and Redirect
        function showLoaderAndRedirect(targetUrl) {
            const mainContent = document.getElementById('main-content');
            const loader = document.getElementById('loader');

            // Hide main UI and show the neon loader
            mainContent.style.display = 'none';
            loader.style.display = 'flex';

            setTimeout(() => {
                window.location.href = targetUrl;
            }, 2500); // 2.5 second delay for dramatic effect
        }

        // 4. Handle Form Submission
        function handleLogin(event) {
            event.preventDefault();

            const userEmail = document.getElementById('user').value;
            const userPassword = document.getElementById('key').value;

            const CORRECT_EMAIL = 'abderahime2002@gmail.com';
            const CORRECT_PASSWORD = '1234';
            const TARGET_PAGE = 'home.php';

            if (userEmail === CORRECT_EMAIL && userPassword === CORRECT_PASSWORD) {
                showLoaderAndRedirect(TARGET_PAGE);
            } else if (userEmail !== CORRECT_EMAIL && userPassword !== CORRECT_PASSWORD) {
                alert("Votre Password et Email sont incorrects");
            } else if (userEmail !== CORRECT_EMAIL) {
                alert("Votre Email est incorrect");
            } else {
                alert("Votre Password est incorrect");
            }
        }

        // 5. Initialize Listener
        document.getElementById('login-form').addEventListener('submit', handleLogin);

    </script>
</body>

</html>