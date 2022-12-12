<?php
    if (isset($_POST['btn'])) {
        $num = $_POST['numero'];
        $result = '';
        while ($num > 1) {
            $result .= $num % 2;
            $num /= 2;
        }
        $result .= $num % 2;
        // $result = (string) $result;
        $result = (int) (strrev($result));
        // echo $result;
    }
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="shortcut icon" href="https://www.nicepng.com/png/detail/44-448816_computer-icons-binary-file-clip-art-binary-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body class="dark:bg-slate-900 dark:text-white font-mono">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-4xl text-sky-500 mt-8 font-pixel">Resultado</h1>

        <h3>O número é:</h3>
        <p class="text-emerald-400 text-2xl font-pixel">
            <?php echo $result ?>
        </p>

        <a href="index.php" class="active:bg-emerald-800 focus:outline-none 
                        focus:ring focus:ring-emerald-300 bg-emerald-500 hover:scale-105 text-emerald-100 px-2 py-1 font-sans 
                        font-bold rounded-full mt-4">
            Converter outro número
        </a>

    </div>

    <style>
        .font-pixel{
            font-family: 'Press Start 2P', monospace, sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

<footer class="
    flex mt-2 flex-row justify-center items-center 
    bg-sky-600 text-white border-t-2 border-sky-200
    w-full h-10 shadow-lg bottom-0 flex-wrap fixed">
        <div class="flex flex-row justify-center text-center items-center
    gap-8 flex-wrap">
            <div class="font-bold">
                Feito por Lucas Antunes |
            </div>
            <div>
                <a class="hover:text-slate-900 font-bold" href="https://github.com/LucasAntunes06">
                Github: LucasAntunes06
                </a>
            </div>
        </div>
    </footer>

</html>