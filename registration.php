

<!DOCTYPE html>
<html lang = "ru">
    

    <head>
        <title>
            Регистрация
        </title>
        <?php require_once 'parts/header.php';?>
        <link rel="stylesheet" href="css/reg-style.css"/>
    </head>



    <body>
    
        <header class="header">
            <?php require_once 'parts/head.php';?>
        </header>
        
        <main>
            <form action="vendor/reg.php" method="post">
                
                <div class="circle"></div>

                <div class="reg_container">
                    <h1 class="reg_title">Регистрация</h1>

                    <div class="reg_fields">
                        <div class="field">
                            <input class="reg_field_input" type="text" name="login" placeholder="Логин">
                        </div>
                        <div class="field">
                            <input class="reg_field_input" type="text" name="email" placeholder="Почта">
                        </div>
                        <div class="field">
                            <input class="reg_field_input" type="password" name="password" placeholder="Пароль">
                        </div>
                        <div class="field">
                            <input class="reg_field_input" type="password" name="password_confirm" placeholder="Подтвердить пароль">
                        </div>
                    </div>  <!--reg_fields -->

                    <div class="reg_buttons">
                        <button class="butt">Регистрация</button>
                        <!-- <div class="divider">или</div> -->
                        <!-- <a class="butt_google" href="#" >Google</a> -->
                    </div>  <!--reg_button -->

                </div>  <!--reg_container -->
            </form>
        </main>
    </body>


</html>