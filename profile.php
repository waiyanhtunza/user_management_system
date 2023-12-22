<?php
include ("vendor/autoload.php");

use Helpers\Auth;
$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style/style.css">
</head>
<body>
    <div class="w-6/12 h-[80vh] mx-auto mt-20 bg-gray-300 flex flex-col items-center rounded-2xl ">
        <div class="w-full text-start">
            <h1 class="w-2/4 pt-2 text-2xl mx-auto text-center">
                <span class="text-3xl uppercase text-sky-500"><?= $auth->name?></span>
                <br>
                <span class="text-md italic underline  underline-offset-2 text-gray-600 ">Role: <?= $auth->role?></span>
            </h1>
        </div>
        
        <?php if(isset($_GET['error']))  :?>
                <div class="h-10 text-center text-red-500/[0.8] pt-1 rounded-lg bg-yellow-100">
                    <span>Cannot Uplaod photo</span>
                </div>
        <?php endif ?>


        <?php if($auth->photo) :?>
            <img src="_actions/photos/<?= $auth->photo ?>" alt="" class="w-2/12 h-60 m-4 rounded-3xl">
        <?php endif ?>
        
        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="  w-6/12">
            <div class="w-full mx-auto">
                <input type="file" name="photo" id="" class="" >
                <button type="submit" class=" w-20 rounded-lg bg-sky-500 border-2 border-zinc-300 hover:bg-sky-200">Upload</button>
            </div>
        </form>
        <ul class="flex flex-col items-start">
            <li class="text-lg w-80 my-2">
                <b>Email:</b><?= $auth->email?>
            </li>
            <li class="text-lg w-80 my-2">
                <b>Phone:</b><?= $auth->phone?>
            </li>
            <li class="text-lg w-80 my-2">
                <b>Address:</b><?= $auth->address?>
            </li>
        </ul>
        <br>
        
        <a href="_actions/logout.php" class="w-40 p-1 m-2 text-lg text-center mx-auto rounded-lg shadow-lg shadow-sky-200 bg-sky-400 border-2 border-zinc-300 hover:bg-sky-300" >Manage Users</a>
        <a href="_actions/logout.php" class="w-40 p-1 text-lg text-center mx-auto rounded-lg shadow-lg shadow-sky-200 bg-red-400 border-2 border-zinc-300 hover:bg-red-300" >Logout</a>
    </div>
</body>
</html> 