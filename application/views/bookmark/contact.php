        <header id="home" class="header header--contact">
            <?php
                echo $this->view($navbar);
            ?>
            <div class="header__info">
                <h2 class="header__title">Kontakt</h2>
                <p class="header__desc">Skontaktuj się z nami!</p>
            </div>
            <a href="#contact-form" class="header__btn"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </header>
        <section style="overflow-y: hidden; padding: 50px 0" id="contact-form">
            <section  class="nm-contact" id="formularz-kontaktowy">
                <div class="container2">
                    <div class="slider-child-wrapper" style="opacity: 1;">
                        <h2>Kontakt</h2>
                        <p>Masz pytania? Napisz do&nbsp;nas!</p>
                    </div>
                    <form method="POST" action="#" id="contactForm" class="contact-form">
                        <div class="form-group">
                            <div class="divrow">
                                <input type="text" name="firstname" placeholder="Imię*" class="form-control form-contact" value="">
                            </div>
                            <div class="divrow">
                                <input type="text" name="lastname" placeholder="Nazwisko" class="form-control form-contact" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="divrow">
                                <input type="text" name="email" placeholder="Email*" class="form-control form-contact" value="">
                            </div>
                            <div class="divrow">
                                <input type="text" name="phone" placeholder="Telefon" class="form-control form-contact" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Wiadomość*" class="form-contact form-message"></textarea>
                        </div>
                        <button type="submit" class="pull-right">
                            Wyślij wiadomość <i class="icon-arrow"></i>
                            <span></span>
                        </button>
                    </form>
                </div>
            </section>
            <section id="social-media">
                <div class="fb box">
                    <a href="http://facebook.com/" target="_blank" class="sociallink"><i class="icon-facebook"></i></a>
                </div>
                <div class="tw box">
                    <a href="http://twitter.com/" target="_blank" class="sociallink"><i class="icon-twitter"></i></a>
                </div>
                <div class="yt box">
                    <a href="http://youtube.com/" target="_blank" class="sociallink"><i class="icon-youtube"></i></a>
                </div>
                <div class="gplus box">
                    <a href="http://plus.google.com/" target="_blank" class="sociallink"><i class="icon-gplus"></i></a>
                </div>
                <div class="fb box">
                    <a href="http://linkedin.com/" target="_blank" class="sociallink"><i class="icon-linkedin"></i></a>
                </div>
                <div style="clear:both;"></div>
            </section>
        </section>
