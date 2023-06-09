<?php
// php

// function
function generatePassword($length = 10)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"£$%&/()=?^*[]@#°§';
    $password = '';
    $charsLength = strlen($chars);
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charsLength - 1)];
    }
    return $password;
}

// get
$length = $_GET['length'];

// call function
$password = generatePassword($length);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="text-bg-dark vh-100">
    <!-- header -->
    <header class="text-center container-fluid p-2">
        <h1 class="text-primary">Password Generator 💻</h1>
    </header>

    <!-- main -->
    <main class="bg-success container-fluid">
        <!-- form to decided the length -->
        <div class="card bg-dark text-center text-white w-50 mx-auto m-4">
            <div class="card-body">
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="length" class="form-label">Password length</label>
                        <input type="number" class="form-control" id="length" name="length" min="1" max="50" value="10">
                    </div>
                    <button type="submit" class="btn btn-primary">Generate</button>
                </form>
            </div>
        </div>
        <!-- password -->
        <div class="card bg-dark text-center text-white w-50 mx-auto">
            <div class="card-body">
                <h2 class="card-title">Password</h2>
                <p class="card-text"><?php echo $password ?></p>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="text-center container-fluid">
        <p class="text-primary">&copy; 2023 🤘</p>
    </footer>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>