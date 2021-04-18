    <footer>
        <div class="container">
            <div class="contact-wrapper">
                <div class="title">
                    <h1><span>Apricot.</span></h1>
                    <p><span>-Dog Cafe-</span></p>
                </div>
                <div class="contact">
                    <div class="contact-wrap">
                        <p>住所：東京都江東区東砂7-1-28</p>
                        <p>TEL：03-6458-4503</p>
                        <p>営業時間：10：00〜20：00 (ラストオーダー19:00)</p>
                        <p>定休日：月曜日・金曜日</p>
                        <p>アクセス：東京メトロ東西線「南砂町駅」より徒歩10分</p>
                    </div>
                    <div class="insta_wrapper">
                        <div class="instagram">
                            <a href="https://www.instagram.com/dogcafe_apricot/" class="instagram-btn">
                                <span class="instagram-icon icon-wrapper">
                                    <i class="fab fa-instagram icon"></i>
                                </span>
                            </a>
                        </div>
                        <p>instagram</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">© 2021 ドッグカフェアプリコット All Rights Reserved.</p>
    </footer>
    <?php if (  is_front_page() ||  is_home() ) : ?>
        <script src="<?php echo get_template_directory_uri() ?>/script.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/jquery.bgswitcher.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/bubbly-bg.js"></script>
        <script>  bubbly({
            animate: true, // default is true
            blur: 6, // default is 4
            bubbleFunc: () => `hsla(${Math.random() * 360}, 100%, 50%, ${Math.random() * 0.25})`, // default is () => `hsla(0, 0%, 100%, ${r() * 0.1})`)
            bubbles: 80, // default is Math.floor((canvas.width + canvas.height) * 0.02);
            canvas: document.querySelector("#background"), // default is created and attached
            colorStart: "#f8e3cd", // default is blue-ish
            colorStop: "#f7b977",// default is blue-ish
            compose: "lighter", // default is "lighter"
            shadowColor: "#fff", // default is #fff
        });</script>
    <?php elseif ( is_page(7) || is_page(36) || is_page(34) || is_page(38) ) : ?>
        <script src="<?php echo get_template_directory_uri() ?>/menu.js"></script>
    <?php elseif ( is_page(9) ) : ?>
        <script src="<?php echo get_template_directory_uri() ?>/dogs.js"></script>
    <?php elseif ( is_page(11) ) : ?>
        <script src="<?php echo get_template_directory_uri() ?>/access.js"></script>
    <?php endif; ?>
  <?php wp_footer(); ?>
</body>
</html>