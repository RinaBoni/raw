<div class="container">
    <div class="header_inner">
        <div class="header_logo">RAW</div>

         <nav class="nav">
            <?php if (isset($_SESSION['user_login'])): ?>
                <a class="nav_link" href="index.php">Главная</a>
                <a class="nav_link" href="profile.php">Профиль</a>
                <a class="nav_link" href="raw.php">Рацион</a>
            
            <?php else: ?>
                <a class="nav_link" href="login.php">Вход</a>
                <a class="nav_link" href="index.php">Главная</a>
                <a class="nav_link" href="profile.php">Профиль</a>
                <a class="nav_link" href="raw.php">Рацион</a>
                
            <?php endif; ?>
            
         </nav>
    </div>      
</div>