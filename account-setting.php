<?php include 'header-2.php' ?>

<main id="main" class="site-primary">
    <div class="site-content">
        <div class="shop-content my-account-page mt-60">
            <div class="container">
                <div class="woocommerce">
                    <div class="row content-wrapper sidebar-right">
                        <div class="col-12 col-md-12 col-lg-12 content-primary">
                            <div class="my-account-wrapper">

                                <?php include 'components/dashboard.php' ?>

                                <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <form class="woocommerce-EditAccountForm edit-account" action="" method="post">
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                            <label for="account_first_name">First name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                name="account_first_name" id="account_first_name"
                                                autocomplete="given-name" value="Jena">
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                            <label for="account_last_name">Last name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                name="account_last_name" id="account_last_name"
                                                autocomplete="family-name" value="Benjamin">
                                        </p>
                                        <div class="clear"></div>

                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="account_display_name">Display name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                name="account_display_name" id="account_display_name"
                                                value="Jena Benjamin"> <span><em>This will be how your name will be
                                                    displayed in the account section and in reviews</em></span>
                                        </p>
                                        <div class="clear"></div>

                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="account_email">Email address&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="email"
                                                class="woocommerce-Input woocommerce-Input--email input-text"
                                                name="account_email" id="account_email" autocomplete="email"
                                                value="wagipihako@mailinator.com">
                                        </p>

                                        <fieldset>
                                            <legend>Password change</legend>

                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password_current">Current password (leave blank to leave
                                                    unchanged)</label>
                                                <span class="password-input"><input type="password"
                                                        class="woocommerce-Input woocommerce-Input--password input-text"
                                                        name="password_current" id="password_current"
                                                        autocomplete="off"><span
                                                        class="show-password-input"></span></span>
                                            </p>
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password_1">New password (leave blank to leave
                                                    unchanged)</label>
                                                <span class="password-input"><input type="password"
                                                        class="woocommerce-Input woocommerce-Input--password input-text"
                                                        name="password_1" id="password_1" autocomplete="off"><span
                                                        class="show-password-input"></span></span>
                                            </p>
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password_2">Confirm new password</label>
                                                <span class="password-input"><input type="password"
                                                        class="woocommerce-Input woocommerce-Input--password input-text"
                                                        name="password_2" id="password_2" autocomplete="off"><span
                                                        class="show-password-input"></span></span>
                                            </p>
                                        </fieldset>
                                        <div class="clear"></div>


                                        <p>
                                            <input type="hidden" id="save-account-details-nonce"
                                                name="save-account-details-nonce" value="6618061b2b"><input
                                                type="hidden" name="_wp_http_referer"
                                                value="/machic/my-account/edit-account/"> <button type="submit"
                                                class="woocommerce-Button button" name="save_account_details"
                                                value="Save changes">Save changes</button>
                                            <input type="hidden" name="action" value="save_account_details">
                                        </p>

                                    </form>

                                </div>

                            </div><!-- my-account-wrapper -->
                        </div><!-- content-primary -->
                    </div><!-- row -->
                </div>
            </div>
        </div>
        <!--WPFC_FOOTER_START-->
    </div><!-- site-content -->
</main>

<?php include 'footer.php' ?>