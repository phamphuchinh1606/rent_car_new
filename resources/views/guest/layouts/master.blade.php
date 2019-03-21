
<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- ================= Favicon ================== -->

    <link rel="icon" href="//bizweb.dktcdn.net/100/344/585/themes/707889/assets/favicon.png?1550886402904" type="image/x-icon" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        Tin tức
    </title>

    <!-- Bizweb conter for header -->
    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'template-thuexe.bizwebvietnam.net';
        Bizweb.id='344585';
        Bizweb.theme = {"id":707889,"role":"main","name":"Thuexe.hn 2019-02-23"};
        Bizweb.template = 'blog';
    </script>

    <script>
        (function() {
            function asyncLoad() {
                var urls = ["//productreviews.bizwebapps.vn/assets/js/productreviews.min.js?store=template-thuexe.bizwebvietnam.net"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            }
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>

    <script type='text/javascript'>
        (function() {
            var log = document.createElement('script'); log.type = 'text/javascript'; log.async = true;
            log.src = '//stats.bizweb.vn/delivery/344585.js?lang=vi';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(log, s);
        })();
    </script>



    <!-- ================= Page description ================== -->

    <meta name="description" content="Trang tin cập nhật thông tin thị trường xe hơi, cho thuê xe hàng đầu Việt Nam">

    <!-- ================= Meta ================== -->
    <meta name="keywords" content="Tin tức, Thuê xe HN, template-thuexe.bizwebvietnam.net"/>
    <link rel="canonical" href="https://template-thuexe.bizwebvietnam.net/tin-tuc"/>
    <meta name='revisit-after' content='1 days' />


    <meta name="robots" content="noodp,index,follow" />




    <!-- Facebook Open Graph meta tags -->


    <meta property="og:type" content="website">
    <meta property="og:title" content="Tin tức">
    <meta property="og:image" content="https://bizweb.dktcdn.net/100/344/585/themes/707889/assets/logo.png?1550886402904">
    <meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/100/344/585/themes/707889/assets/logo.png?1550886402904">

    <meta property="og:description" content="Trang tin cập nhật thông tin thị trường xe hơi, cho thuê xe hàng đầu Việt Nam">
    <meta property="og:url" content="https://template-thuexe.bizwebvietnam.net/tin-tuc">
    <meta property="og:site_name" content="Thuê xe HN">

    <!-- Plugin CSS -->

    <!-- Plugin CSS -->
    <link href="http://bizweb.dktcdn.net/100/344/585/themes/707889/assets/plugin.scss.css?1550886402904" rel="stylesheet" type="text/css" />
    <!-- Build Main CSS -->
    <link href="http://bizweb.dktcdn.net/100/344/585/themes/707889/assets/base.scss.css?1550886402904" rel="stylesheet" type="text/css" />
    <link href="http://bizweb.dktcdn.net/100/344/585/themes/707889/assets/style.scss.css?1550886402904" rel="stylesheet" type="text/css" />
    <link href="http://bizweb.dktcdn.net/100/344/585/themes/707889/assets/module.scss.css?1550886402904" rel="stylesheet" type="text/css" />


    <!-- Bizweb javascript customer -->


    <script>var ProductReviewsAppUtil=ProductReviewsAppUtil || {};</script>

    <style type="text/css">
        .button_gradient {
            background-image:linear-gradient( 90deg, #f83f3f 0%, #ff4121 100%);
            background-image:-webkit-linear-gradient( 90deg, #f83f3f 0%, #ff4121 100%);
            background-image:-moz-linear-gradient( 90deg, #f83f3f 0%, #ff4121 100%);
            background-image:-o-linear-gradient( 90deg, #f83f3f 0%, #ff4121 100%);
        }
        .footer_email_bg {
            background-image: -moz-linear-gradient( 90deg, #f83f3f 0%, #ff4121 99%);
            background-image: -webkit-linear-gradient( 90deg, #f83f3f 0%, #ff4121 99%);
            background-image: -ms-linear-gradient( 90deg, #f83f3f 0%, #ff4121 99%);
            box-shadow: 0px 0px 87px 0px rgba(0, 0, 0, 0.04);
        }
        .button_gradient:hover {
            background:#ff2d37;
        }
    </style>
</head>
<body class="wrap_background">
    @yield('body.content')

    @yield('body.js')
</body>
</html>