            <nav class="nav">
                <ul class="navbar">
                    <li class="navbar__logo navbar__items--left">
                        <a class="navbar__link--logo" href="<?php echo site_url('main/index/home_page')?>"><img class="navbar__link--img" src="<?php echo base_url(); ?>assets/img/logo-navbar.png" alt="new media logo"></a>
                    </li>
                    <?php
                        echo $this->view($who);
                    ?>
                    <li class="navbar__item navbar__items--right">
                        <a class="navbar__link" href="<?php echo site_url('main/index/about')?>">O NAS</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="<?php echo site_url('main/index/offer')?>">OFERTA</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="<?php echo site_url('main/index/news/1')?>">AKTUALNOŚCI</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="<?php echo site_url('main/index/career')?>">KARIERA</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="<?php echo site_url('main/index/contact')?>">KONTAKT</a>
                    </li>
                    <li class="navbar__item navbar__item--hidden">
                        <div class="navbar__button">
                            <div class="single__bar single__bar--menu"></div>
                            <div class="single__bar single__bar--menu"></div>
                            <div class="single__bar single__bar--menu"></div>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="nav-mobile">
                <ul class="sidenav">
                    <li><a class="sidenav__link" href="<?php echo site_url('main/index/home_page')?>"><img src="<?php echo base_url(); ?>assets/img/logo-navbar-smaller.png" alt="new media logo" alt="new media logo"></a></li>
                    <li><a class="sidenav__link" href="<?php echo site_url('main/index/about')?>">O NAS</a></li>
                    <li><a class="sidenav__link" href="<?php echo site_url('main/index/offer')?>">OFERTA</a></li>
                    <li><a class="sidenav__link" href="<?php echo site_url('main/index/news/1')?>">AKTUALNOŚCI</a></li>
                    <li><a class="sidenav__link" href="<?php echo site_url('main/index/career')?>">KARIERA</a></li>
                    <li><a class="sidenav__link" href="<?php echo site_url('main/index/contact')?>">KONTAKT</a></li>
                </ul>
            </nav>