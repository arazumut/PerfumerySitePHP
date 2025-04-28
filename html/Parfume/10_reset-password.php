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
                    <div class="uk-h2">Reset Password</div>
                    <form class="uk-form-stacked" action="#!" autocomplete="off">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Viasun">
                        <input type="hidden" name="admin_email" value="test@gmail.com">
                        <input type="hidden" name="form_subject" value="Reset Password">
                        <!-- END Hidden Required Fields -->
                        <div class="uk-margin">
                            <p>Lost your password?<br> Please enter your email or username. You will receive a link to create a new password via email.</p>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-label">Enter Username or Email <span class="accent-text">*</span></div>
                            <div class="uk-form-controls"><input class="uk-input uk-form-large" type="email" name="Email" autocomplete="off"></div>
                        </div>
                        <div class="uk-margin"><button class="uk-button uk-button-danger uk-button-large" type="submit">Reset Password</button></div>
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
