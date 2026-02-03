<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Проекты')</title>
</head>
<style>
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    li{
        list-style: none;
    }
    a{
        text-decoration: none;
    }
    .wrapper{
        height: 100vh;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }
    .wrapper-form{
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 10px 0;
        margin-bottom: 10px;
    }
    .project{
        margin-bottom: 20px;
    }
    .project:last-child{
        margin-bottom: 0;
    }
    .project h2{
        margin-bottom: 10px;
    }
    .project p{
        margin-bottom: 5px;
    }
    .alert {
        padding: 10px;
        border-radius: 8px;
        text-align: center;
        line-height: 1.5;
        position: absolute;
        width: 300px;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
     }
    .alert-title {
        font-weight: bold;
        margin-bottom: 6px;
    }
    .alert-message {
        font-size: 14px;
        color: #333;
    }
</style>
</style>
<body>


    @yield('content')


</body>
</html>