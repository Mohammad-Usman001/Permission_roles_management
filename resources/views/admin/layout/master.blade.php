{{-- @include('admin.layout.app')
@include('admin.layout.aside')
@include('admin.layout.sidemenu')


@yield('section') --}}


<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">



<head>

    <meta charset="utf-8">
    <title>Salon Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->
{{-- <div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-learning.html" class="nav-link" data-key="t-learning"> Learning </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-real-estate.html" class="nav-link" data-key="t-real-estate"> Real Estate </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-layout"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-apps">Apps</span></li>

                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Calendar</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-chat.html" class="nav-link menu-link"> <i class="ph-chats"></i> <span data-key="t-chat">Chat</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-email.html" class="nav-link menu-link"> <i class="ph-envelope"></i> <span data-key="t-email">Email</span> </a>
                </li>

                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ph-storefront"></i> <span data-key="t-ecommerce">Ecommerce</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-products-grid.html" class="nav-link" data-key="t-products-grid">Products Grid</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product">Create Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-order-overview.html" class="nav-link" data-key="t-order-overview">Order Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart">Shopping Cart</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout">Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers">Sellers</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-seller-overview.html" class="nav-link" data-key="t-seller-overview">Seller Overview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="apps-file-manager.html" class="nav-link menu-link"> <i class="ph-folder-open"></i> <span data-key="t-file-manager">File Manager</span> </a>
                </li>

                <li class="nav-item">
                    <a href="#sidebarLearning" class="nav-link menu-link  collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLearning">
                        <i class="ph-graduation-cap"></i> <span data-key="t-learning">Learning</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLearning">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarCourses" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCourses" data-key="t-courses"> Courses </a>
                                <div class="collapse menu-dropdown" id="sidebarCourses">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-learning-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-grid.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-category.html" class="nav-link" data-key="t-category">Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-create.html" class="nav-link" data-key="t-create-course">Create Course</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarStudent" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarStudent" data-key="t-students"> Students </a>
                                <div class="collapse menu-dropdown" id="sidebarStudent">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-student-subscriptions.html" class="nav-link" data-key="t-my-subscriptions">My Subscriptions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-student-courses.html" class="nav-link" data-key="t-my-courses">My Courses</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInstructors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInstructors" data-key="t-instructors"> Instructors </a>
                                <div class="collapse menu-dropdown" id="sidebarInstructors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-instructors-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-instructors-grid.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-instructors-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-instructors-create.html" class="nav-link" data-key="t-create-instructors">Create Instructor</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarInvoices" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class="ph-file-text"></i> <span data-key="t-invoices">Invoices</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoices">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice">Create Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarTickets" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets">
                        <i class="ph-ticket"></i> <span data-key="t-support-tickets">Support Tickets</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTickets">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-tickets-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarRealeEstate" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRealeEstate">
                        <i class="ph-buildings"></i> <span data-key="t-real-estate">Real Estate</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarRealeEstate">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-real-estate-grid.html" class="nav-link" data-key="t-listing-grid">Listing Grid</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-list.html" class="nav-link" data-key="t-listing-list">Listing List</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-map.html" class="nav-link" data-key="t-listing-map">Listing Map</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-property-overview.html" class="nav-link" data-key="t-property-overview">Property Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAgent" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgent" data-key="t-agent"> Agent </a>
                                <div class="collapse menu-dropdown" id="sidebarAgent">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agent-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agent-grid.html" class="nav-link" data-key="t-grid-view"> Grid View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agent-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAgencies" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgencies" data-key="t-agencies"> Agencies </a>
                                <div class="collapse menu-dropdown" id="sidebarAgencies">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agencies-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agencies-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-add-properties.html" class="nav-link" data-key="t-add-property">Add Property</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-earnings.html" class="nav-link" data-key="t-earnings">Earnings</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ph-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-signin.html" class="nav-link" role="button" data-key="t-signin"> Sign In </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signup.html" class="nav-link" role="button" data-key="t-signup"> Sign Up </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-reset.html" class="nav-link" role="button" data-key="t-password-reset">
                                    Password Reset
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-change.html" class="nav-link" role="button" data-key="t-password-create">
                                    Password Create
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-lockscreen.html" class="nav-link" role="button" data-key="t-lock-screen">
                                    Lock Screen
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-logout.html" class="nav-link" role="button" data-key="t-logout"> Logout </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-success-msg.html" class="nav-link" role="button" data-key="t-success-message"> Success Message </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-twostep.html" class="nav-link" role="button" data-key="t-two-step-verification"> Two Step Verification </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404.html" class="nav-link" data-key="t-404-error"> 404 Error </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-503.html" class="nav-link" data-key="t-503"> 503 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ph-address-book"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-profile.html" class="nav-link" data-key="t-profile"> Profile </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-profile-settings.html" class="nav-link" data-key="t-profile-setting"> Profile Settings </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-privacy-policy.html" class="nav-link" data-key="t-privacy-policy"> Privacy Policy </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-term-conditions.html" class="nav-link" data-key="t-term-conditions"> Term & Conditions </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ph-bandaids"></i> <span data-key="t-bootstrap-ui">Bootstrap UI</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-links.html" class="nav-link" data-key="t-links">Links</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ph-stack-simple"></i> <span data-key="t-advance-ui">Advance UI</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#customUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="customUI">
                        <i class="ph-wrench"></i> <span data-key="t-custom-ui">Custom UI</span> <span class="badge badge-pill bg-danger" data-key="t-custom">Custom</span>
                    </a>
                    <div class="collapse menu-dropdown" id="customUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-profile.html" class="nav-link" data-key="t-profile">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-counter.html" class="nav-link" data-key="t-counter">Counter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ph-paint-brush-broad"></i> <span data-key="t-widgets">Widgets</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Forms</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select.html" class="nav-link" data-key="t-form-select">Form Select</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxes-radios">Checkboxes & Radios</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers.html" class="nav-link" data-key="t-pickers">Pickers</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider">Range Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ph-table"></i> <span data-key="t-tables">Tables</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ph-chart-pie-slice"></i> <span data-key="t-apexcharts">Apexcharts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="charts-apex-line.html" class="nav-link" data-key="t-line">Line</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-area.html" class="nav-link" data-key="t-area">Area</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-column.html" class="nav-link" data-key="t-column">Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar">Bar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed">Mixed</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-range-area.html" class="nav-link" data-key="t-range-area">Range Area</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-funnel.html" class="nav-link" data-key="t-funnel">Funnel</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick">Candlstick</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">Boxplot</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">Bubble</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">Scatter</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">Heatmap</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">Treemap</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie">Pie</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar">Radialbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar">Radar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">Polar Area</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ph-traffic-cone"></i> <span data-key="t-icons">Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-bootstrap.html" class="nav-link" data-key="t-bootstrap">Bootstrap</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-phosphor.html" class="nav-link" data-key="t-phosphor">Phosphor</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ph-map-trifold"></i> <span data-key="t-maps">Maps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google.html" class="nav-link" data-key="t-google">Google</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector.html" class="nav-link" data-key="t-vector">Vector</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">Leaflet</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="bi bi-share"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div> --}}
@include('admin.layout.sidemenu')
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
{{-- <div class="vertical-overlay"></div>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="22">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="22">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <form class="app-search d-none d-md-inline-flex">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">
                                    <!-- item-->
                                    <div class="dropdown-header">
                                        <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                    </div>
                
                                    <div class="dropdown-item bg-transparent text-wrap">
                                        <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                    </div>
                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                    </div>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>
                
                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                    </div>
                
                                    <div class="notification-list">
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">Angela Bernier</h6>
                                                    <span class="fs-2xs mb-0 text-muted">Manager</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">David Grasso</h6>
                                                    <span class="fs-2xs mb-0 text-muted">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">Mike Bunch</h6>
                                                    <span class="fs-2xs mb-0 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                
                                <div class="text-center pt-3 pb-1">
                                    <a href="#" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-grid fs-2xl'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fw-semibold fs-base"> Browse by Apps </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="btn btn-sm btn-subtle-info"> View All Apps
                                                <i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                    <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">English</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                    <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">Española</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                    <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                    <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">Italiana</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                    <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">русский</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                    <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">中国人</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                    <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">français</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                                    <img src="assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                                    <span class="align-middle">عربي</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-bag fs-2xl'></i>
                                <span class="position-absolute topbar-badge cartitem-badge fs-3xs translate-middle badge rounded-pill bg-info">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 product-list" aria-labelledby="page-header-cart-dropdown">
                                <div class="p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-lg fw-semibold"> My Cart <span class="badge bg-secondary fs-sm cartitem-badge ms-1">7</span></h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 300px;">
                                    <div class="p-3">
                                        <div class="text-center empty-cart" id="empty-cart">
                                            <div class="avatar-md mx-auto my-3">
                                                <div class="avatar-title bg-info-subtle text-info fs-2 rounded-circle">
                                                    <i class='bx bx-cart'></i>
                                                </div>
                                            </div>
                                            <h5 class="mb-3">Your Cart is Empty!</h5>
                                            <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                        </div>
                                
                                        <div class="d-block dropdown-item product text-wrap p-2">
                                            <div class="d-flex">
                                                <div class="avatar-sm me-3 flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/products/32/img-1.png" class="avatar-xs" alt="user-pic">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                    <h6 class="mt-0 mb-3 fs-md">
                                                        <a href="#!" class="text-reset">Blive Printed Men Round Neck</a>
                                                    </h6>
                                                    <div class="text-muted fw-medium d-none">$<span class="product-price">327.49</span></div>
                                                    <div class="input-step">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                    <h5 class="mb-0">$ <span class="product-line-price">654.98</span></h5>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item product text-wrap p-2">
                                            <div class="d-flex">
                                                <div class="avatar-sm me-3 flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/products/32/img-5.png" class="avatar-xs" alt="user-pic">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1 fs-sm text-muted">Sportwear</p>
                                                    <h6 class="mt-0 mb-3 fs-md">
                                                        <a href="#!" class="text-reset">Willage Volleyball Ball</a>
                                                    </h6>
                                                    <div class="text-muted fw-medium d-none">$<span class="product-price">49.06</span></div>
                                                    <div class="input-step">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                    <h5 class="mb-0">$ <span class="product-line-price">147.18</span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item product text-wrap p-2">
                                            <div class="d-flex">
                                                <div class="avatar-sm me-3 flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/products/32/img-10.png" class="avatar-xs" alt="user-pic">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                    <h6 class="mt-0 mb-3 fs-md">
                                                        <a href="#!" class="text-reset">Cotton collar tshirts for men</a>
                                                    </h6>
                                                    <div class="text-muted fw-medium d-none">$<span class="product-price">53.33</span></div>
                                                    <div class="input-step">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                    <h5 class="mb-0">$ <span class="product-line-price">159.99</span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item product text-wrap p-2">
                                            <div class="d-flex">
                                                <div class="avatar-sm me-3 flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/products/32/img-11.png" class="avatar-xs" alt="user-pic">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                    <h6 class="mt-0 mb-3 fs-md">
                                                        <a href="#!" class="text-reset">Jeans blue men boxer</a>
                                                    </h6>
                                                    <div class="text-muted fw-medium d-none">$<span class="product-price">164.37</span></div>
                                                    <div class="input-step">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                    <h5 class="mb-0">$ <span class="product-line-price">164.37</span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item product text-wrap p-2">
                                            <div class="d-flex">
                                                <div class="avatar-sm me-3 flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/products/32/img-8.png" class="avatar-xs" alt="user-pic">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                    <h6 class="mt-0 mb-3 fs-md">
                                                        <a href="#!" class="text-reset">Full Sleeve Solid Men Sweatshirt</a>
                                                    </h6>
                                                    <div class="text-muted fw-medium d-none">$<span class="product-price">180.00</span></div>
                                                    <div class="input-step">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                    <h5 class="mb-0">$ <span class="product-line-price">180.00</span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="count-table">
                                            <table class="table table-borderless mb-0  fw-semibold">
                                                <tbody>
                                                    <tr>
                                                        <td>Sub Total :</td>
                                                        <td class="text-end cart-subtotal">$1306.52</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discount <span class="text-muted">(Steex15)</span>:</td>
                                                        <td class="text-end cart-discount">- $195.98</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Charge :</td>
                                                        <td class="text-end cart-shipping">$65.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estimated Tax (12.5%) : </td>
                                                        <td class="text-end cart-tax">$163.31</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                
                                    </div>
                                </div>
                                <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <h5 class="m-0 text-muted">Total:</h5>
                                        <div class="px-2">
                                            <h5 class="m-0 cart-total">$1338.86</h5>
                                        </div>
                                    </div>

                                    <a href="apps-ecommerce-checkout.html" class="btn btn-info text-center w-100">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                <i class='bi bi-arrows-fullscreen fs-lg'></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-sun align-middle fs-3xl"></i>
                            </button>
                            <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-bell fs-2xl'></i>
                                <span class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head rounded-top">
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger fs-sm notification-badge"> 4</span></h6>
                                                <p class="fs-md text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                            </div>
                                            <div class="col-auto dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                    <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                    <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="py-2 ps-2" id="notificationItemsTabContent">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">New</h6>
                                        <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                            Optimization <span class="text-secondary">reward</span> is ready!
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                        <label class="form-check-label" for="all-notification-check01"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="position-relative me-3 flex-shrink-0">
                                                    <img src="assets/images/users/32/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                    <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                                    </a>
                                                    <div class="fs-sm text-muted">
                                                        <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                    </div>
                                                    <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                        <label class="form-check-label" for="all-notification-check02"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                        <i class='bx bx-message-square-dots'></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                        <label class="form-check-label" for="all-notification-check03"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">Read Before</h6>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">

                                                <div class="position-relative me-3 flex-shrink-0">
                                                    <img src="assets/images/users/32/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                    <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-md fw-semibold">Maureen Gibson</h6>
                                                    </a>
                                                    <div class="fs-sm text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                        <label class="form-check-label" for="all-notification-check04"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-actions" id="notification-actions">
                                        <div class="d-flex text-muted justify-content-center align-items-center">
                                            Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="assets/images/users/32/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Richard Marshall</span>
                                        <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Richard!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-tickets-overview.html"><i class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-lockscreen.html"><i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}
        @include('admin.layout.topbar')

        <!-- removeNotificationModal -->
        <!-- /.modal -->

        <!-- removeCartModal -->
        <!-- /.modal -->
        
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        {{-- <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">CRM</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">CRM</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded">
                                            <i class="ph ph-briefcase"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="368.24">0</span>M </h4>
                                    <p class="text-muted mb-4">Annual Profit</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 4.65%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 76%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded">
                                            <i class="ph ph-wallet"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="1454.71">0</span>k </h4>
                                    <p class="text-muted mb-4">Daily average income</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 1.33%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 88%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-danger-subtle text-danger fs-3xl rounded">
                                            <i class="bi bi-broadcast"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="33.37"></span>%</h4>
                                    <p class="text-muted mb-4">Lead Conversations</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 2.69%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 18%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-success-subtle text-success fs-3xl rounded">
                                            <i class="ph ph-rocket-launch"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="648"></span></h4>
                                    <p class="text-muted mb-4">Campaign Sent</p>
                                    <p class="text-muted mb-0"><span class="badge bg-danger-subtle text-danger"><i class="bi bi-arrow-down"></i> 0.78%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 49%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                                            <i class="ph ph-heartbeat"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="1742"></span></h4>
                                    <p class="text-muted mb-4">Annual Deals</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 7.93%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 83%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Realized Rate</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="realized_rate" data-colors='["--tb-primary", "--tb-secondary", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-9">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Balance Overview</h6>
                                    <div>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-subtle-primary btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="balance_overview" data-colors='["--tb-primary", "--tb-light","--tb-secondary"]' class="apex-charts ms-n3" dir="ltr"></div>
                                    <div class="table-responsive table-card mb-0 mt-2">
                                        <table class="table table-sm table-borderless align-middle text-center mb-0 table-nowrap">
                                            <tr>
                                                <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-primary"></i> Total Revenue</td>
                                                <th>$795.69k</th>
                                                <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 6.19%</span> than last years</td>
                                                <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-light"></i> Total Expenses</td>
                                                <th>$415.37k</th>
                                                <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 3.62%</span> than last years</td>
                                                <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-secondary"></i> Profit Ratio </td>
                                                <th>3.6%</th>
                                                <td class="text-muted"><span class="text-danger"><i class="bi bi-caret-down-fill align-baseline me-1"></i> 1.47%</span> than last years</td>
                                                <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card" id="leadsList">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Contact Leads</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown sortble-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                </span><span class="text-muted dropdown-title">Leads Score</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <button class="dropdown-item sort" data-sort="leads_score">Leads Score</button>
                                                <button class="dropdown-item sort" data-sort="contact_name">Contact Name</button>
                                                <button class="dropdown-item sort" data-sort="phone_number">Phone Number</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card mt-0">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="contact_name">Contact Name</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="phone_number">Phone Number</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="leads_score">Leads Score</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="location">Location</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="create_date">Create Date</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="react.png" class="avatar-xxs rounded"> 
                                                            <a href="pages-profile.html" class="text-reset contact_name">Buck Roberts</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(11) 3885-1022</td>
                                                    <td class="leads_score">234</td>
                                                    <td class="location">Guarulhos, Brazil</td>
                                                    <td class="create_date">17 Mar, 2023</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="contact_name">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-3.jpg" alt="shopify.png" class="avatar-xxs rounded"> 
                                                            <a href="pages-profile.html" class="text-reset">Josefa Weissnat</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(53) 3035-3100</td>
                                                    <td class="leads_score">418</td>
                                                    <td class="location">California, USA</td>
                                                    <td class="create_date">15 Mar, 2023</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="sketch.png" class="avatar-xxs rounded"> 
                                                            <a href="pages-profile.html" class="text-reset contact_name">Jacinthe Will</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(33) 3521-6761</td>
                                                    <td class="leads_score">357</td>
                                                    <td class="location">Brasília, Brazil</td>
                                                    <td class="create_date">11 Mar, 2023</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="sketch.png" class="avatar-xxs rounded">
                                                            <a href="pages-profile.html" class="text-reset contact_name">Donnell Schultz</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(51) 3233-7909</td>
                                                    <td class="leads_score">631</td>
                                                    <td class="location">Natal, Brazil</td>
                                                    <td class="create_date">29 Feb, 2023</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="sketch.png" class="avatar-xxs rounded">
                                                            <a href="pages-profile.html" class="text-reset contact_name">Xander Wyman</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(48) 3877-9000</td>
                                                    <td class="leads_score">249</td>
                                                    <td class="location">Logrono, Spain</td>
                                                    <td class="create_date">24 Feb, 2023</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-8.jpg" alt="sketch.png" class="avatar-xxs rounded">
                                                            <a href="pages-profile.html" class="text-reset contact_name">Buck Roberts</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(92) 3639-8685</td>
                                                    <td class="leads_score">176</td>
                                                    <td class="location">Ibiza, Spain</td>
                                                    <td class="create_date">27 Jan, 2023</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="assets/images/users/avatar-9.jpg" alt="sketch.png" class="avatar-xxs rounded">
                                                            <a href="pages-profile.html" class="text-reset contact_name">Federico Hand</a>
                                                        </div>
                                                    </td>
                                                    <td class="phone_number">(11) 3666-9716</td>
                                                    <td class="leads_score">176</td>
                                                    <td class="location">San Luis Potosi, Mexico</td>
                                                    <td class="create_date">21 Dec, 2022</td>
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                    <div class="align-items-center mt-4 pt-2 row">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">05</span> of <span class="fw-semibold">07</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <div class="pagination-wrap pagination-sm hstack gap-2 justify-content-center">
                                                <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                                    <i class="bi bi-arrow-left"></i>
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascript:void(0)">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Email Sent</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="emailSent" data-colors='["--tb-primary", "--tb-success", "--tb-secondary"]' dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Users Activity</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">This Month<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="usersActivity" data-colors='["--tb-primary", "--tb-light"]' class="apex-charts ms-n2" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Sync Status Breakdown</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">This Month<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="syncStatusBreakdown" data-colors='["--tb-primary", "--tb-primary-rgb, 0.85", "--tb-primary-rgb, 0.60", "--tb-primary-rgb, 0.50", "--tb-info"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Open Deals</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase">Sort by:
                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div data-simplebar class="card-body py-0" style="max-height: 350px;">
                                        <div class="vstack gap-2">
                                            <div class="py-2 px-3 border border-dashed rounded">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-10.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">SASS app workflow diagram</a></h6>
                                                        <p class="text-muted mb-0">Closing Deal date 14 Jan, 2023</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <h5 class="fs-md text-primary mb-0">$49.99</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 px-3 border border-dashed rounded">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-9.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Steex - Admin Dashboard</a></h6>
                                                        <p class="text-muted mb-0">Closing Deal date 22 April, 2023</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <h5 class="fs-md text-primary mb-0">$132.94</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 px-3 border border-dashed rounded">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-8.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Create New Components</a></h6>
                                                        <p class="text-muted mb-0">Closing Deal date 29 April, 2023</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <h5 class="fs-md text-primary mb-0">$349.99</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 px-3 border border-dashed rounded">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-7.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">New Email Design Templates</a></h6>
                                                        <p class="text-muted mb-0">Closing Deal date 23 March, 2023</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <h5 class="fs-md text-primary mb-0">$258.73</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 px-3 border border-dashed rounded">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-6.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Urban Modern Design</a></h6>
                                                        <p class="text-muted mb-0">Closing Deal date 17 March, 2023</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <h5 class="fs-md text-primary mb-0">$374.61</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 px-3 border border-dashed rounded">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-4.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Airbnb React Development</a></h6>
                                                        <p class="text-muted mb-0">Closing Deal date 03 Feb, 2023</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <h5 class="fs-md text-primary mb-0">$976.07</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Create Tasks List</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase">Sort by:
                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div data-simplebar class="card-body py-0" style="max-height: 350px;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0" id="task_one">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <label class="form-check-label mb-0 ps-2" for="task_one">
                                                            <span class="d-block fw-semibold mb-1 text-truncate">Review and make sure nothing slips through cracks</span>
                                                            <span class="text-muted d-block">If someone cracks, they lose control of their emotions or actions because they are under a lot of pressure.</span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <p class="text-muted fs-xs fw-medium mb-0">15 Sep, 2023</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0" id="task_two">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <label class="form-check-label mb-0 ps-2" for="task_two">
                                                            <span class="d-block fw-semibold mb-1 text-truncate">Send meeting invites for sales campaign</span>
                                                            <span class="text-muted d-block">I will send you a meeting invite" is grammatically incorrect. Invite is a verb and invitation is the noun.</span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <p class="text-muted fs-xs fw-medium mb-0">20 Sep, 2023</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check flex-sharink-0 ps-0">
                                                        <input type="checkbox" class="form-check-input ms-0" id="task_three">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <label class="form-check-label mb-0 ps-2" for="task_three">
                                                            <span class="d-block fw-semibold mb-1 text-truncate">Make a creating an account profile</span>
                                                            <span class="text-muted d-block">Like any other essay, a profile essay has three main parts, the introduction, body, and conclusion.</span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <p class="text-muted fs-xs fw-medium mb-0">08 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0" id="task_four">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <label class="form-check-label mb-0 ps-2" for="task_four">
                                                            <span class="d-block fw-semibold mb-1 text-truncate">Change email option process</span>
                                                            <span class="text-muted d-block">If people have you saved as something else in their contacts, that's the name they'll see.</span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <p class="text-muted fs-xs fw-medium mb-0">19 Jan, 2023</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0" id="task_five">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <label class="form-check-label mb-0 ps-2" for="task_five">
                                                            <span class="d-block fw-semibold mb-1 text-truncate">Additional Calendar</span>
                                                            <span class="text-muted d-block">Employees can use shared calendars to manage their own assignments and appointments</span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <p class="text-muted fs-xs fw-medium mb-0">03 Jan, 2023</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Steex.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div> --}}
        @yield('content')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button class="btn btn-dark btn-icon" id="back-to-top">
        <i class="bi bi-caret-up fs-3xl"></i>
    </button>
    <!--end back-to-top-->

  

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    
    <!-- list js-->
    <script src="{{ asset('assets/libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/libs/list.pagination.js/list.pagination.min.js')}}"></script>
    
    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!--dashboard crm init js-->
    <script src="{{asset('assets/js/pages/dashboard-crm.init.js') }}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js') }}"></script>
</body>


</html>