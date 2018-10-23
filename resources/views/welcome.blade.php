

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta class="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Farmcredity</title>
    <!-- Don't forget to add your metadata here -->
    <link rel='stylesheet' href='css/style.min.css' />
</head>
<body>
    <!-- Hero(extended) navbar -->
    <div class="navbar navbar--extended">
        <nav class="nav__mobile"></nav>
        <div class="container">
            <div class="navbar__inner">
                <a href="index.html" class="navbar__logo">Farmcredity</a>
                <nav class="navbar__menu">
                    <ul>
                    @if (Route::has('login'))
                
                    @auth
                        <li>
                        <a href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li>
                        <a href="{{ route('login') }}">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li>
                            <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                
            @endif

                    </ul>
                </nav>
                <div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
            </div>
        </div>
    </div>
    <!-- Hero unit -->
    <div class="hero">
        <div class="hero__overlay hero__overlay--gradient"></div>
        <div class="hero__mask"></div>
        <div class="hero__inner">
            <div class="container">
                <div class="hero__content">
                    <div class="hero__content__inner" id='navConverter'>
                        <h1 class="hero__title">A seemless way for farmers and agro-based business to access agricultural loans</h1>
                        <p class="hero__text">At Farmcredity we are committed to seeing the dream of every farmer fullfilled by opening up access to an all round spectrum of agric loans ranging from cash loans, equipment,storage facilities, production and processing inputs.</p>
                        <a href="#" class="button button__accent">Request Now</a>
                        <a href="#" class="button hero__button">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero__sub">
        <span id="scrollToNext" class="scroll">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/></svg>
        </span>
    </div>
    <!-- Steps -->
    <div class="steps landing__section">
        <div class="container">
            <h2>Who can use Farmcredity?</h2>
            <p>Here's who we can think of, but surely creative people will surprise us.</p>
        </div>
        <div class="container">
            <div class="steps__inner">
                <div class="step">
                    <div class="step__media">
                        <img src="./images/undraw_designer.svg" class="step__image">
                    </div>
                    <h4>Farmers</h4>
                    <p class="step__text"> With our seemless approach to loans,every farmer is empowered to take his farming business to the next level.</p>
                </div>
                <div class="step">
                    <div class="step__media">
                        <img src="./images/undraw_responsive.svg" class="step__image">
                    </div>
                    <h4>Agro-based businesses</h4>
                    <p class="step__text">We pay particular attention to your business needs.We partner together so that you can have the optimum ROI from your agro-investment.</p>
                </div>
                <div class="step">
                    <div class="step__media">
                        <img src="./images/undraw_creation.svg" class="step__image">
                    </div>
                    <h4>Farm managers</h4>
                    <p class="step__text">Manging your farm just got seamless.With our seasoned agro professionals, you can get the insights you need for you business</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Expanded sections -->
    <div class="expanded landing__section">
        <div class="container">
            <div class="expanded__inner">
                <div class="expanded__media">
                    <img src="./images/undraw_browser.svg" class="expanded__image">
                </div>
                <div class="expanded__content">
                    <h2 class="expanded__title">Loans with no collateral</h2>
                    <p class="expanded__text">We strongly believe that the absense of a collateral should not be an hinderance to accessing the best that agriculture can give. Taking out the stress of collaterals, we help you to focus on what is important</p>
                </div>
            </div>
        </div>
    </div>
    <div class="expanded landing__section">
        <div class="container">
            <div class="expanded__inner">
                <div class="expanded__media">
                    <img src="./images/undraw_wallet_aym5.svg" class="expanded__image">
                </div>
                <div class="expanded__content">
                    <h2 class="expanded__title">Flexible loan plans ranging from cashloans, equipement loans , production and .</h2>
                    <p class="expanded__text"> Cash loans can be very importaant to run an agric business, but more importantly, it is important that our farmers have easy access to other credit facilities like machineries,and inputs</p>
                </div>
            </div>
        </div>
    </div>
    <div class="expanded landing__section">
        <div class="container">
            <div class="expanded__inner">
                <div class="expanded__media">
                    <img src="./images/together.svg" class="expanded__image">
                </div>
                <div class="expanded__content">
                    <h2 class="expanded__title">Access to our seasoned agro-experts that guide you in makinng the right decisions</h2>
                    <p class="expanded__text">With more than 30 years of experience, our seasoned experts guide you in your agro business providing all the insights that you need in managing and scaling your farm business.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action -->
    <div class="cta cta--reverse">
        <div class="container">
            <div class="cta__inner">
                <h2 class="cta__title">Get started now</h2>
                <p class="cta__sub cta__sub--center">Request for your loan in 2 minuts.</p>
                <a href="#" class="button button__accent">Start Now</a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer footer--dark">
        <div class="container">
            <div class="footer__inner">
                <a href="index.html" class="footer__textLogo">Farmcredity</a>
                <div class="footer__data">
                    <div class="footer__data__item">
                        <div class="footer__row">
                            Created by <a href="https://twitter.com/ninalimpi" target="_blank" class="footer__link">Conquistadors team</a>
                        </div>
                        <div class="footer__row">
                        Code/design by <a href="https://twitter.com/anges244" target="_blank" class="footer__link">Ogunniran Olusola</a>
                        </div>
                    </div>
                    <div class="footer__data__item">
                        <div class="footer__row">Created for <a href="https://undraw.co" target="_blank" class="footer__link">NaijaHacks2018</a>
                        </div>
                        <div class="footer__row">Special thx to <a href="https://shareboost.co" target="_blank" class="footer__link">NaijaHacks</a> for the support
                        </div>
                    </div>
                    <div class="footer__data__item">
                    <div class="footer__row">
                        <a href="https://github.com/anges244/evie" target="_blank" class="footer__link">GitHub</a>
                    </div>
                    <div class="footer__row">
                        <a href="https://twitter.com/undraw_co" target="_blank" class="footer__link">Twitter</a>
                    </div>
                    <div class="footer__row">
                        <a href="https://www.facebook.com/undraw.co/" target="_blank" class="footer__link">Facebook</a>
                    </div>
                    <div class="footer__row">
                        <a href="./additional.html" class="footer__link">MIT license</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='js/app.min.js'></script>
</body>
</html>