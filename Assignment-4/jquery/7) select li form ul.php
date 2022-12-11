<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        $(document).ready(function()
        {
            $("li:first").css("border","2px solid green");
        });
    </script> 

    <ul id="list">
    <li>orange</li>
    <li>Apple</li>
    <li>Banana</li>
    <li>pineapple</li>
    <li>mango</li>
    <li>kiwi</li>
    </ul>

    <ul id="list">
        <li>Orange</li>
        <li>Apple</li>
        <li>Banana</li>
        <li>Pineapple</li>
        <li>Grapes</li>
        <li>Guava</li>
        <li>Kiwi</li>
    </ul>
    <script>
        $(document).ready(function()
        {
            $("li:last").css("border","2px solid red");
        });
    </script>
    
    <ul id="list">
        <li>Orange</li>
        <li>Apple</li>
        <li>Banana</li>
        <li>Pineapple</li>
        <li>Grapes</li>
        <li>Guava</li>
        <li>Kiwi</li>
    </ul>
</body>
</html>
    

    
 