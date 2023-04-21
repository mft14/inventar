<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="assets/icons/mfogo_64x6.ico"> -->
    <link rel="stylesheet" type="text/css" href="src/main.css"> 
    <link rel="stylesheet" type="text/css" href="src/table.css"> 
</head>
<body>
<header>
    <div class="menuleiste">
        <?php include 'menu-top.php'; ?>
    </div>
</header>

<main>
    <?php  
        if ($_GET) {
            if (isset($_GET['abtleiter']))               {include "pages/abtleiter.php";} 
            if (isset($_GET['it']))                      {include "pages/it.php";} 
            if (isset($_GET['it2']))                     {include "pages/it2.php";} 
            if (isset($_GET['personal']))                {include "pages/personal.php";} 

        }
    ?>
</main>

</body>
</html>
