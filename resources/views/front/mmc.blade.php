<html>
    <head>
        <title>mmc</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form id="mmc" method="post" action="/mmc-test">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="text" name="mmc" value="" style="width: 100%;" />
            <button>ok</button>
        </form>
        <div id="pre">
        </div>
        <div id="result">
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/front/mmc.js"></script>
</html>
