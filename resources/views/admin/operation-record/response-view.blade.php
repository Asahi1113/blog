<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html, iframe {
            margin: 0;
            border: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <title>响应内容查看器</title>
</head>
<body>
<iframe src="data:text/html;base64,{{ base64_encode($content) }}"></iframe>
</body>
</html>