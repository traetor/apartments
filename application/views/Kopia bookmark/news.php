        <header class="header header--news">
            <?php
                echo $this->view($navbar);
            ?>
            <div class="header__info">
                <h2 class="header__title">Aktualności</h2>
                <p class="header__desc">Sprawdź!</p>
            </div>
            <a href="#news-container" class="header__btn"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </header>
        
        <section id="news-container" class="newmedia-news">
                <h2 class="section__title">Aktualności New Media Sp. z.o.o</h2>
                <div class="newmedia-news__list">
                    <a class="newmedia-news__pag">
                        <img src="<?php echo base_url(); ?>assets/img/strzalka_lewo.png">
                    </a>
                <?php foreach($news as $n){
                    $news_id = $n['news_id'];
                    $news_title = $n['news_title'];
                    $news_date = $n['news_date'];   
                    $config['base_url'] = site_url('main/index/news/1/');
                    $config['total_rows'] = 4;
                    $config['per_page'] = 3; 
                    $config['uri_segment'] = 5; 
                    $this->pagination->initialize($config); 
                    //echo $this->pagination->create_links();   
                ?>
                    <a class="newmedia-news__item" href="<?php echo site_url('main/index/news/'.$n['news_id'])?>">
                        <img alt="" src="<?php echo base_url(); ?>assets/img/<?php echo $n['news_img']; ?>">
                            <div>
                                <p class="newmedia-news__cat">Aktualności, Strona główna</p>
                                <p class="newmedia-news__title"><?php echo $news_title; ?></p>
                                <p class="newmedia-news__date"><?php echo $news_date; ?></p>
                            </div>
                        </a>
                <?php }?>
                    <a class="newmedia-news__pag">
                        <img src="<?php echo base_url(); ?>assets/img/strzalka_prawo.png">
                    </a>
            </div>                
            <div class="full-news">
                <?php foreach($news_where as $nw){ ?>
                <p class="full-news__date"><?php echo $nw['news_date']; ?></p>
                <h1 class="full-news__title"><?php echo $nw['news_title']; ?></h1>
                <img class="full-news__img" src="<?php echo base_url(); ?>assets/img/winterdark.jpg" width="500px">
                <article class="full-news__article">        
                    <p>New Media z o.o. to dynamicznie rozwijająca się firma, działająca w branży IT internetowej i informatycznej. Pracuje tu zespół młodych, ambitnych ludzi, którzy zajmują się każdą dziedziną Internetu i Informatyki i dbają o jakość i zawartość merytoryczną oraz sprawność i niezawodność a także o owocną współpracę z wieloma partnerami biznesowymi. Nie ma dla Nas rzeczy niemożliwych, są jedynie rzeczy nad którymi trzeba poświecić więcej czasu. Naszym pracownikom zapewniamy możliwość stałego rozwoju i pracy w przyjaznej atmosferze oraz promowania ich zaangażowania i kreatywności.</p>

                    <p>Jesteśmy producentem stron, sklepów i systemów CRM i B2B. Dążymy do tego aby jakość świadczonych usług przez nas była na najwyższym poziomie poprzez zachowanie konkurencyjności. Duży wachlarz usług jakie oferujemy pozwala być elastyczym i otwartym na korzyści klienta a duże, ponad 20 - letnie, doświadczenie w branży pozwala nam na zaspokajanie potrzeb naszych klientów poprzez oferowanie i zastosowanie najnowszych rozwiązań w każdym sektorze działania.</p>   
                </article>
                <?php } ?>
                <a href="" class="pull-right" style="margin: 25px 0;">
                    <p>Następny</p>
                </a>
                <a href="" class="pull-right" style="margin: 25px 0;">
                    <p>Poprzedni</p>
                </a>
            </div>
       </section>
