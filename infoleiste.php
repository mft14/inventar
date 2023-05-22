<div class="infoleiste">
    <?php
        echo '<a href="../logout.php" class="infoleistelogout">Logout</a>';
        echo ' | Eingeloggt als <div class="underlined">' , $_SESSION['uname'] , '</div>';
        echo ' | Abteilungs-ID: <div class="underlined">' , $_SESSION['role'] , '</div>';
        echo ' | Session Login: <div class="underlined">' , $_SESSION['loggedin'] , '</div>';
    ?>
</div>
