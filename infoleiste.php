<div class="infoleiste">
    <?php
        echo '<a href="../logout.php" class="infoleistelogout">Logout</a>';
        echo ' | Eingeloggt als <div class="underlined">' , $_SESSION['username'] , '</div>';
        echo ' | Abteilungs-ID: <div class="underlined">' , $_SESSION['site'] , '</div>';
        echo ' | Session Login: <div class="underlined">' , $_SESSION['logged_in'] , '</div>';
    ?>
</div>
