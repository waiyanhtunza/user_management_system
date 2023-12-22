<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style/style.css">
</head>
<body>
    <div class="w-4/12 mx-auto flex flex-col items-center bg-gray-200 mt-20 rounded-2xl shadow-lg shadow-gray-300">
        <div class="h-1/6 w-full m-4">
            <h1 class="text-center text-3xl font-bold text-black/[.81]">Register Lote Par Nyi 400</h1>
        </div>
        <form action="_actions/create.php" method="post" class="flex flex-col"> 

            <?php if(isset($_GET['error']))  :?>
                <div class="h-10 text-center text-red-500/[0.8] pt-1 rounded-lg bg-yellow-100">
                    <span>Cannot Create account</span>
                </div>
            <?php endif ?>
            <input type="text" name="name" id="" placeholder=" Your Name" class="w-80 h-10 my-5 rounded-2xl border-2 hover:border-sky-300 shadow-lg shadow-sky-200 text-center text-lg text-gray-500">
            <input type="email" name="email" id="" placeholder=" Email" class="w-80 h-10 my-5 rounded-2xl border-2 hover:border-sky-300 shadow-lg shadow-sky-200 text-center text-lg text-gray-500">
            <input type="text" name="phone" id="" placeholder=" Phone Number" class="w-80 h-10 my-5 rounded-2xl border-2 hover:border-sky-300 shadow-lg shadow-sky-200 text-center text-lg text-gray-500">
            <input type="text" name="address" id="" placeholder=" Address" class="w-80 h-10 my-5 rounded-2xl border-2 hover:border-sky-300 shadow-lg shadow-sky-200 text-center text-lg text-gray-500">
            <input type="password" name="password" id="" placeholder="Password" class="w-80 h-10 my-5 rounded-2xl border-2 hover:border-sky-300 shadow-lg shadow-sky-200 text-center text-lg text-gray-500">
            <button type="submit" class="w-40 p-1 text-lg mx-auto mt-6 rounded-lg shadow-lg shadow-sky-200 bg-sky-400 border-2 border-zinc-300 hover:bg-sky-300">Register</button>
        </form>
        <br>
        <a href="index.php" class="underline underline-offset-2 hover:text-sky-500 p-2" >Login</a>
    </div>
</body>
</html>