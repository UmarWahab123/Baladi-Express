<?php include 'header-2.php' ?>

<main id="main" class="site-primary">
    <div class="site-content">
        <div class="shop-content my-account-page mt-60">
            <div class="container">
                <div class="woocommerce">
                    <div class="woocommerce-notices-wrapper"></div>

                    <div class="u-columns row col2-set" id="customer_login">
                        <div class="u-column1 col-md-6">
                            <h2> Login </h2>
                            <form class="woocommerce-form woocommerce-form-login login border shadow p-3 h-90"
                                method="post">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="username">Username or email address&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                        name="username" id="username" autocomplete="username" value="">
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                                    <span class="password-input"><span class="password-input"><span
                                                class="password-input"><input
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="password" name="password" id="password"
                                                    autocomplete="current-password"><span
                                                    class="show-password-input"></span></span><span
                                                class="show-password-input"></span><span
                                                class="show-password-input"></span></span><span
                                            class="show-password-input"></span><span
                                            class="show-password-input"></span><span
                                            class="show-password-input"></span></span>
                                </p>
                                <p class="form-row">
                                <div class="d-flex justify-content-between">
                                    <label
                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                            name="rememberme" type="checkbox" id="rememberme" value="forever">
                                        <span>Remember me</span>
                                    </label>
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="">Lost your
                                            password?</a>

                                    </p>
                                </div>
                                <a href="account-setting.php"> <input type="hidden" id="woocommerce-login-nonce"
                                        name="woocommerce-login-nonce" value="9096d6b682"><input type="hidden"
                                        name="_wp_http_referer" value="/machic/my-account/?d=rtl"> <button type="submit"
                                        class="woocommerce-button button woocommerce-form-login__submit" name="login"
                                        value="Log in">Log in</button></a>
                                <a href="account-setting.php"> <input type="hidden" id="woocommerce-login-nonce"
                                        name="woocommerce-login-nonce" value="9096d6b682"><input type="hidden"
                                        name="_wp_http_referer" value="/machic/my-account/?d=rtl"> <button type="submit"
                                        class="woocommerce-button bg-dark button woocommerce-form-login__submit"
                                        name="login" value="Log in">Continue as Guest</button></a>
                                </p>

                                <p>Or Connect with</p>
                                <div class="social-share site-social colored">
                                    <ul class="social-container ">
                                        <li><a href="" class="facebook" target="_blank"><i
                                                    class="klbth-icon-facebook"></i></a></li>

                                        <li><a href="" class="instag" target="_blank"><i
                                                    class="klbth-icon-instagram"></i></a>
                                        </li>
                                        <li><a href="" class="google" target="_blank"><i
                                                    class="klbth-icon-google"></i></a></li>
                                        <li><a href="" class="bg-secondary" target="_blank"><i
                                                    class="fa fa-apple"></i></a></li>
                                    </ul>

                                </div>
                            </form>
                        </div>

                        <div class="u-column2 col-md-6">
                            <h2>Register</h2>
                            <form method="post"
                                class="woocommerce-form border shadow p-3 h-90 woocommerce-form-register register">

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text"
                                        name="email" id="reg_email" autocomplete="email" value="">
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_password">Password&nbsp;<span class="required">*</span></label>
                                    <span class="password-input"><span class="password-input"><span
                                                class="password-input"><input type="password"
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    name="password" id="reg_password" autocomplete="new-password"><span
                                                    class="show-password-input"></span></span><span
                                                class="show-password-input"></span><span
                                                class="show-password-input"></span></span><span
                                            class="show-password-input"></span><span
                                            class="show-password-input"></span><span
                                            class="show-password-input"></span></span>
                                </p>
                                <div class="woocommerce-privacy-policy-text">
                                    <p>Your personal data will be used to support your experience throughout this
                                        website, to manage access to your account, and for other purposes described
                                        in our <a href="privacy-policy.php" class="woocommerce-privacy-policy-link"
                                            target="_blank">privacy
                                            policy</a>.</p>
                                </div>
                                <p class="woocommerce-form-row form-row">
                                    <input type="hidden" id="woocommerce-register-nonce"
                                        name="woocommerce-register-nonce" value="b98c70acb1"><input type="hidden"
                                        name="_wp_http_referer" value="/machic/my-account/?d=rtl"> <button type="submit"
                                        class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                                        name="register" value="Register">Register</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- site-content -->
</main>
<?php include 'footer.php' ?>