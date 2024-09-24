<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Home"></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/index.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <span>Order</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/food-order/order.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Order List</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/food-order/order_details.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Order Details</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                            <span>Menus</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/menus/add_new_menu.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New Menu</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/menus/add_menu_table.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Menu </a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/menus/menu_list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Menu List</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/menus/view_details.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Detail List</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                            <span>Categories</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/food-category/add_categories.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Categories</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/food-category/menu_categories.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Categories</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/food-category/table_categories.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> View Categories</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
                            <span>Customer</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/customer.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer list</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/members.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Members</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
                            <span>Booking Order</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/booking/booking.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Booking Form</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/booking/booking_table.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>jutt-food/main-work/analysis.php">
                            <i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
                            <span>Analysis</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
                            <span>Online Store</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ecommerce_products.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ecommerce_cart.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ecommerce_products_edit.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ecommerce_details.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ecommerce_orders.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ecommerce_checkout.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/invoice.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/invoicelist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>
                        </ul>
                    </li>
                    <li class="header">UI & Pages</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
                            <span>Collections</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/mailbox.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets_blog.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets_chart.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets_list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets_social.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets_statistic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets_weather.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/widgets.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_modals.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_sweatalert.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_notification.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/extra_calendar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/contact_app.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/contact_app_chat.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/extra_taskboard.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/email_index.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Brush"><span class="path1"></span><span class="path2"></span></i>
                            <span>UI & Components</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_bootstrap_switch.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_date_paginator.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_media_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_rangeslider.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_rating.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_animations.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/extension_fullscreen.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/extension_pace.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_nestable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/component_portlet_draggable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Utilities
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/box_cards.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/box_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/box_basic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/box_color.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/box_group.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_badges.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_border_utilities.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_buttons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_color_utilities.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_dropdown.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_dropdown_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_progress_bars.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_fontawesome.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_glyphicons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_material.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_themify.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_simpleline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_cryptocoins.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_flag.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/icons_weather.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Elements
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_ribbons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_sliders.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_typography.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_tab.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_timeline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/ui_timeline_horizontal.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <span>Forms & Tables</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_general.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_wizard.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_validation.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_mask.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_xeditable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_dropzone.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_code_editor.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_editors.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/forms_editor_markdown.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/tables_simple.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/tables_data.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/tables_editable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/tables_color.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                            <span>Charts & Maps</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_chartjs.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_flot.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_inline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_morris.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_peity.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_chartist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_c3_axis.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_c3_bar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_c3_data.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_c3_line.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_echarts_basic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_echarts_bar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/charts_echarts_pie_doughnut.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/map_google.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
                                    <li><a href="<?php echo $base_url; ?>jutt-food/main-work/map_vector.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
                            <span>Authentication</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/Authentication-1/user_login.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/Authentication/user_register.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/Authentication/register_table.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Register</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/auth_lockscreen.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/auth_user_pass.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
                            <span>Miscellaneous</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/error_404.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/error_500.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/error_maintenance.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            <span>Usefull Page</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/extra_app_ticket.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/extra_profile.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/contact_userlist_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/contact_userlist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_faq.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            <span>Extra Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_blank.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_coming_soon.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_custom_scroll.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_gallery.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_lightbox.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
                            <li><a href="<?php echo $base_url; ?>jutt-food/main-work/sample_pricing.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary bg-food-dark rounded20">
                        <div class="text-center">
                            <img src="../images/res-menu.png" class="sideimg" alt="">
                            <h3 class="title-bx">Add Menu</h3>
                            <a href="#" class="text-white py-10 fs-16 mb-0">
                                Manage Your food and beverages menu <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright text-start m-25">
                        <p><strong class="d-block">Riday Admin Dashboard</strong> © 2021 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>