<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="Templines" name="author">
    <meta content="Viasun" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/images/favicon.html" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="page-login">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
 

        <?php include 'includes/header.php'; ?>

        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="assets/img/login-hero.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title section-hero__top_padding">My Account</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section-large uk-container uk-container-small">
                    <div class="uk-h2">Sign In</div>
                    <form class="uk-form-stacked" action="#!" autocomplete="off">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Viasun">
                        <input type="hidden" name="admin_email" value="test@gmail.com">
                        <input type="hidden" name="form_subject" value="Login">
                        <!-- END Hidden Required Fields -->
                        <div class="uk-margin">
                            <div class="uk-form-label">Username or Email <span class="accent-text">*</span></div>
                            <div class="uk-form-controls"><input class="uk-input uk-form-large" type="email" name="Email" autocomplete="off"></div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-label">Password <span class="accent-text">*</span></div>
                            <div class="uk-form-controls"><input class="uk-input uk-form-large" type="password" name="Password" autocomplete="off"></div>
                        </div>
                        <div class="uk-margin">
                            <div class="checkbox-custome path"><label><input type="checkbox" checked="checked" /><svg viewBox="0 0 21 21">
                                        <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                                    </svg><span>Remember me</span></label></div>
                        </div>
                        <div class="uk-margin"><button class="uk-button uk-button-danger uk-button-large" type="submit">Sign In</button></div>
                        <div class="uk-margin"><a href="10_reset-password.php">Forgot Your Password? </a></div>
                    </form>
                </div>
            </div>
        </main>


        <?php include 'includes/footer.php'; ?>

    </div>
    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "../../../mc.yandex.ru/metrika/tag.js", "ym");

        ym(82984270, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });

    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/82984270/1" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->


</body>


</html>
