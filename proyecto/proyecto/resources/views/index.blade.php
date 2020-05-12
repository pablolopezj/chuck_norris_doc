<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M9ZNP6P');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet">
    <link rel="stylesheet" href="https://chuck-norris-media.s3.us-east-2.amazonaws.com/css/styles.min.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9ZNP6P"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main class="main">
        <section class="section-main">
            <div class="media" >
                <img class="media-chuk" src="https://chuck-norris-media.s3.us-east-2.amazonaws.com/images/chucknorris_05.png" id="picture" alt="">
            </div>

            <div class="paragraph">
                <div class="" id="joke"></div>
            </div>

            <div class="control">
                <a class="btn-green"  id="newJoke" >Message </a>
            </div>

            <audio id="audioPlayback" controls autoplay style="display:none">
                <source id="audioSource" type="audio/mp3" src="">
            </audio>
        </section>
    </main>
    <script src="https://sdk.amazonaws.com/js/aws-sdk-2.673.0.min.js"></script>
    <script type="text/javascript"> var remoteConfig = {voice: '{{ $voice }}'}; </script>
    <script src="js/main.js" charset="utf-8"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166230704-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166230704-1');
    </script>

</body>
</html>
