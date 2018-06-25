        <header class="header header--login">
            <?php
                echo $this->view($navbar);
            ?>
                <div class="header__info">
                    <form class="header__desc">
                        <label for="username">Login:</label>
                        <input type="text" id="username" name="username"><br>
                        <label for="password">Hasło:</label>
                        <input type="password" id="password" name="password"><br>
                        <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
                        <p><a href="#">Zapomniałeś hasła?</a></p>
                        <div id="lower">                          
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
        </header>
       
