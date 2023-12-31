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

                                    <strong class="">
                                        The following addresses will be used on the checkout page by default.</strong>



                                    <table
                                        class="woocommerce-orders-table rounded my-3 woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">

                                        <thead>
                                            <tr>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                                    <span class="nobr">Address</span>
                                                </th>

                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                                    <span class="nobr">Total</span>
                                                </th>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions">
                                                    <span class="nobr">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr
                                                class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                                                    data-title="Order">
                                                    <a href="">
                                                        Billing </a>

                                                </td>

                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                                    data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol"></span>1Jena
                                                        Benjamin
                                                        Oneill Mcintyre Associates
                                                        128 East Green Old Road</span>

                                                </td>
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                                    data-title="Actions">
                                                    <a href="billing-update.php "
                                                        class="woocommerce-button button view">Edit</a>
                                                </td>
                                            </tr>
                                            <tr
                                                class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                                                    data-title="Order">
                                                    <a href="">
                                                        Shipping</a>

                                                </td>

                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                                    data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol"></span>1Jena
                                                        Benjamin
                                                        Oneill Mcintyre Associates
                                                        128 East Green Old Road</span>

                                                </td>
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                                    data-title="Actions">
                                                    <a href="shipping-update.php"
                                                        class="woocommerce-button button view">Edit</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

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