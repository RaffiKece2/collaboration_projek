<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <p id="notif"></p>


    <form id="loginPage">

        <p>Email: </p>
        <input id="email" placeholder="Email..." type="email">
        <p id="errorEmail"></p>

        <p>Password</p>
        <input id="password" type="password">
        <p id="errorPassword"></p>

        <button type="submit">Login</button>

    </form>

    
    @vite('resources/js/login.js')

    
</body>
</html>