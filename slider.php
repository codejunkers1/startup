
<!doctype html>
<html>
<head>
    <title>QNimate Slider</title>
    <style type="text/css">
                .slider-holder
        {
            width: 800px;
            height: 400px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
        
        .image-holder
        {
            width: 2400px;
            background-color: red;
            height: 400px;
            clear: both;
            position: relative;
            
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
        
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
        
        .button-holder
        {
            position: relative;
            top: -20px;
        }
        
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }
    </style>
    <link href="style.css" type="text/css" rel="stylesheet">
    <style type="text/css">         #carbonads { 
                max-width: 300px; 
                background: #f8f8f8;
            }

            .carbon-text { 
                display: block; 
                width: 130px; 
            }

            .carbon-poweredby { 
                float: right; 
            }
            .carbon-text {
                padding: 8px 0; 
            }

            #carbonads { 
                padding: 15px;
                border: 1px solid #ccc; 
            }

            .carbon-text {
                font-size: 12px;
                color: #333333;
                text-decoration: none;
            }


            .carbon-poweredby {
                font-size: 75%;
                text-decoration: none;
            }

            #carbonads { 
                position: fixed; 
                top: 5px;
                right: 5px;
            }</style>
</head>
<body>
    <div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <img src="bg1.jpg" class="slider-image" />
            <img src="bg2.jpg" class="slider-image" />
            <img src="bg1.jpg" class="slider-image" />
        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>
    <a href="http://qnimate.com/creating-a-slider-using-html-and-css-only/">&#8592; Back to the tutorial</a>

                <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=qnimate" id="_carbonads_js"></script>
                <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57883751-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>