<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorbereitung mit BO - Modelltest</title>
    <meta name="description" content="Online Prüfungsvorbereitung für Deutsch Test für Zuwanderer (A1, A2, B1, B2, C1, C2 )">
    <meta name="keywords" content="Vorbereitung, Deutsch, Kurs, Test">
    <meta property="og:image" content="https://deutsch-vorbereitung.com/img/logo_medium.png">
    <meta property="og:title" content="Vorbereitung mit BO">
    <meta property="og:description" content="Deutsch Prüfung - Vorbereitung auf Hören, Lesen, Schreiben und Sprechen.">
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/login/login.css" />
</head>

<body>
    <?php include "../components/header.php" ?>

    <section class='login'>
        <div class="container">
            <div class="login__content">
                <p class='text p3 regular'>Um den Service weiterhin nutzen zu konnen, ist eine kostenlose Registrierung bzw.ein Login erforderlich</p>
                <div class="login__button-group">
                    <button class="secondary-button border" type="button">
                        <p class="text p3">Log In</p>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 12H19.5M19.5 12L13.5 6M19.5 12L13.5 18" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="secondary-button border" type="button">
                        <p class="text p3">Registrierung</p>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 12H19.5M19.5 12L13.5 6M19.5 12L13.5 18" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <form action="#" method="POST" class="login__form">
                    <div class="login__form-group">
                        <label for="email" class="login__form-label">Email address</label>
                        <div class="form_input">
                            <span class='field'>
                                <input type="email" name="email" id="email" class="login__form-input" placeholder="Email address" required="">
                            </span>
                        </div>
                    </div>
                    <div class="login__form-group">
                        <label for="password" class="login__form-label">Passwort</label>
                        <div class="form_input">
                            <span class='field'>
                                <input type="password" name="password" id="password" class="login__form-input" placeholder="Password" required="">
                                <i class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46967 4.46967C4.76256 4.17678 5.23744 4.17678 5.53033 4.46967L19.5303 18.4697C19.8232 18.7626 19.8232 19.2374 19.5303 19.5303C19.2374 19.8232 18.7626 19.8232 18.4697 19.5303L4.46967 5.53033C4.17678 5.23744 4.17678 4.76256 4.46967 4.46967Z" fill="#0A0A0A" />
                                        <path d="M3.80078 3.76367L20.1996 20.1625" stroke="#0A0A0A" stroke-width="1.5" stroke-linecap="round" />
                                        <circle cx="11.9986" cy="12" r="3.23684" stroke="#0A0A0A" stroke-width="1.5" />
                                        <path d="M20.5953 10.3669C21.494 11.2972 21.494 12.7031 20.5953 13.6334C18.6471 15.6502 15.4811 18.1833 12.0006 18.1833C8.52018 18.1833 5.35422 15.6502 3.40594 13.6334C2.50729 12.7031 2.50729 11.2972 3.40594 10.3669C5.35422 8.35 8.52018 5.81689 12.0006 5.81689C15.4811 5.81689 18.6471 8.35 20.5953 10.3669Z" stroke="#0A0A0A" stroke-width="1.5" />
                                    </svg>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.9986" cy="12" r="3.23684" stroke="#0A0A0A" stroke-width="1.5" />
                                        <path d="M20.5953 10.3669C21.494 11.2972 21.494 12.7031 20.5953 13.6334C18.6471 15.6502 15.4811 18.1833 12.0006 18.1833C8.52018 18.1833 5.35422 15.6502 3.40594 13.6334C2.50729 12.7031 2.50729 11.2972 3.40594 10.3669C5.35422 8.35 8.52018 5.81689 12.0006 5.81689C15.4811 5.81689 18.6471 8.35 20.5953 10.3669Z" stroke="#0A0A0A" stroke-width="1.5" />
                                    </svg>
                                </i>
                            </span>
                        </div>
                    </div>
                    <a href="#" class="login__link">Forgot your password?</a>
                    <button class="primary-button big" type="send" name="send">Log In</button>
                </form>
            </div>

            <div class="login__content">
                <h3>Forgot password?</h3>
                <p class='text p3 regular'>Don’t worry we can help you out! if you still remember your email address you can quickly reset your password. Just input that information in the fields below and click on the button. This will send you a new email that will link you to the password change website.</p>

                <form action="#" method="POST" class="login__form">
                    <div class="login__form-group">
                        <label for="email" class="login__form-label">Email address</label>
                        <div class="form_input">
                            <span class='field'>
                                <input type="email" name="email" id="email" class="login__form-input" placeholder="Email address" required="">
                            </span>
                        </div>
                    </div>
                    <button class="primary-button big" type="send">Log In</button>
                </form>
            </div>

            <div class="login__content">
                <h3>Change password</h3>
                <form action="#" method="POST" class="login__form">
                    <div class="login__form-group">
                        <label for="password" class="login__form-label">New Password</label>
                        <div class="form_input">
                            <span class='field'>
                                <input type="password" name="password" id="password" class="login__form-input" placeholder="New Password" required="">
                                <i class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46967 4.46967C4.76256 4.17678 5.23744 4.17678 5.53033 4.46967L19.5303 18.4697C19.8232 18.7626 19.8232 19.2374 19.5303 19.5303C19.2374 19.8232 18.7626 19.8232 18.4697 19.5303L4.46967 5.53033C4.17678 5.23744 4.17678 4.76256 4.46967 4.46967Z" fill="#0A0A0A" />
                                        <path d="M3.80078 3.76367L20.1996 20.1625" stroke="#0A0A0A" stroke-width="1.5" stroke-linecap="round" />
                                        <circle cx="11.9986" cy="12" r="3.23684" stroke="#0A0A0A" stroke-width="1.5" />
                                        <path d="M20.5953 10.3669C21.494 11.2972 21.494 12.7031 20.5953 13.6334C18.6471 15.6502 15.4811 18.1833 12.0006 18.1833C8.52018 18.1833 5.35422 15.6502 3.40594 13.6334C2.50729 12.7031 2.50729 11.2972 3.40594 10.3669C5.35422 8.35 8.52018 5.81689 12.0006 5.81689C15.4811 5.81689 18.6471 8.35 20.5953 10.3669Z" stroke="#0A0A0A" stroke-width="1.5" />
                                    </svg>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.9986" cy="12" r="3.23684" stroke="#0A0A0A" stroke-width="1.5" />
                                        <path d="M20.5953 10.3669C21.494 11.2972 21.494 12.7031 20.5953 13.6334C18.6471 15.6502 15.4811 18.1833 12.0006 18.1833C8.52018 18.1833 5.35422 15.6502 3.40594 13.6334C2.50729 12.7031 2.50729 11.2972 3.40594 10.3669C5.35422 8.35 8.52018 5.81689 12.0006 5.81689C15.4811 5.81689 18.6471 8.35 20.5953 10.3669Z" stroke="#0A0A0A" stroke-width="1.5" />
                                    </svg>
                                </i>
                            </span>
                        </div>
                    </div>
                    <div class="login__form-group">
                        <label for="password" class="login__form-label">Confirm new password</label>
                        <div class="form_input">
                            <span class='field'>
                                <input type="password" name="password" id="password" class="login__form-input" placeholder="Confirm new password" required="">
                                <i class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46967 4.46967C4.76256 4.17678 5.23744 4.17678 5.53033 4.46967L19.5303 18.4697C19.8232 18.7626 19.8232 19.2374 19.5303 19.5303C19.2374 19.8232 18.7626 19.8232 18.4697 19.5303L4.46967 5.53033C4.17678 5.23744 4.17678 4.76256 4.46967 4.46967Z" fill="#0A0A0A" />
                                        <path d="M3.80078 3.76367L20.1996 20.1625" stroke="#0A0A0A" stroke-width="1.5" stroke-linecap="round" />
                                        <circle cx="11.9986" cy="12" r="3.23684" stroke="#0A0A0A" stroke-width="1.5" />
                                        <path d="M20.5953 10.3669C21.494 11.2972 21.494 12.7031 20.5953 13.6334C18.6471 15.6502 15.4811 18.1833 12.0006 18.1833C8.52018 18.1833 5.35422 15.6502 3.40594 13.6334C2.50729 12.7031 2.50729 11.2972 3.40594 10.3669C5.35422 8.35 8.52018 5.81689 12.0006 5.81689C15.4811 5.81689 18.6471 8.35 20.5953 10.3669Z" stroke="#0A0A0A" stroke-width="1.5" />
                                    </svg>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.9986" cy="12" r="3.23684" stroke="#0A0A0A" stroke-width="1.5" />
                                        <path d="M20.5953 10.3669C21.494 11.2972 21.494 12.7031 20.5953 13.6334C18.6471 15.6502 15.4811 18.1833 12.0006 18.1833C8.52018 18.1833 5.35422 15.6502 3.40594 13.6334C2.50729 12.7031 2.50729 11.2972 3.40594 10.3669C5.35422 8.35 8.52018 5.81689 12.0006 5.81689C15.4811 5.81689 18.6471 8.35 20.5953 10.3669Z" stroke="#0A0A0A" stroke-width="1.5" />
                                    </svg>
                                </i>
                            </span>
                        </div>
                    </div>

                    <button class="primary-button big" type="send" name="send">Log In</button>
                </form>
            </div>

            <div class="login__content">
                <h3 class='color-orange'>Success!</h3>
                <p class='text p3 regular'>We have succsefuly created your new account. But before you start you will have to activate it. We have sent an activation mail to the email you provided during registration. It should arrive in a couple of minutes</p>
                <a href="#" class="primary-button big">Close</a>
            </div>

        </div>
    </section>

    <?php include "../components/footer.php" ?>
    <script src="../script.js"></script>
</body>