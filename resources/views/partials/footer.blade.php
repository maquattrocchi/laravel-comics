<footer>
    <section id="footer-top">
        <div class="container">
            <div class="left-footer flex-gap-1">
                <div>
                    <p>Dc Comics</p>
                    <ul>
                        @foreach($data_footer['dcComicsList'] as $item)
                        <li>
                            <a href="{{$item['url']}}">{{$item['testo']}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <p>Shop</p>
                    <ul>
                        @foreach($data_footer['shopList'] as $item)
                        <li>
                            <a href="{{$item['url']}}">{{$item['testo']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p>Dc</p>
                    <ul>
                        @foreach($data_footer['dcList'] as $item)
                        <li>
                            <a href="{{$item['url']}}">{{$item['testo']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p>Sites</p>
                    <ul>
                        @foreach($data_footer['sitesList'] as $item)
                        <li>
                            <a href="{{$item['url']}}">{{$item['testo']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="right-footer">
                <img src="../images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </section>
    <section id="footer-bottom">
        <div class="container">
            <div class="left-footer">
                <a href="#">Sign-up now</a>
            </div>
            <div class="right-footer">
                <p>Follow us</p>
                <ul class="flex-gap-1">
                    <li>
                        <a href="/">
                            <img src="../images/footer-facebook.png" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="../images/footer-twitter.png" alt="twitter">
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="../images/footer-youtube.png" alt="youtube">
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="../images/footer-pinterest.png" alt="pinterest">
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="../images/footer-periscope.png" alt="periscope">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>