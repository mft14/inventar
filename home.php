<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="assets/icons/mfogo_64x6.ico"> -->
    <link rel="stylesheet" type="text/css" href="src/main.css"> 
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
            if (isset($_GET['ap1']))                     {include "pages/ap1.php";} 
            if (isset($_GET['lf6u']))                    {include "pages/lf6u.php";} 
            if (isset($_GET['lf6l']))                    {include "pages/lf6l.php";} 
            if (isset($_GET['lf8u']))                    {include "pages/lf8u.php";} 
            if (isset($_GET['lf8l']))                    {include "pages/lf8l.php";} 
            if (isset($_GET['lf9u']))                    {include "pages/lf9u.php";} 
            if (isset($_GET['lf9l']))                    {include "pages/lf9l.php";} 

        }
    ?>
</main>

</body>
</html>
