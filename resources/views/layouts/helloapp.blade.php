<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body{ font-size:16pt; color:#999; margin:5px; }
            h1{ font-size:50pt; text-align:right; color:pink; margin:-20pt 0pt -30pt 0pt; letter-spacing:-4px; }
            ul{ font-size:12pt; }
            hr{ margin: 25px 100px; border-top: 1px dashed #ddd; }
            .menutitle{ font-size: 14pt; font-weight: bold; margin: 0px; }
            .content{ margin:10px; }
            .footer{ text-align:right; font-size: 10pt; margin:10px; border-bottom: solid 1px #ccc; color:ccc; }
            th{background-color: #999; color:#fff; padding:5px 10px;}
            td{border: solid 1px #aaa; color:#999; padding:5px 10px;}
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">*メニュー</h2>
        <ul>
            <li>
                親テンプレートファイルのやつ
            </li>
            <li>
                @show
            </li>
        </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>