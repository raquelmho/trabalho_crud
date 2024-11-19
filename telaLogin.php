<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="login.php" method="post" class="h-screen flex flex-col items-center justify-center gap-8">
        <div>
            <h2 class="text-2xl font-bold">Fazer login</h2>
        </div>
        <div>
            <input type="text" name="usuario" placeholder="Usuario" class="w-50 border border-1 border-black px-4 py-2 rounded">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Senha" class="w-50 border border-1 border-black px-4 py-2 rounded">
        </div>
        <div> 
            <button class='btn btn-outside-danger'type="submit" class="bg-red-700 text-black font-bold px-4 py-2 rounded">Entrar</button>
        </div>
    </form>
</body>
</html>