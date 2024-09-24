<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Account Settings - Profile - SB Admin Pro</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.php">Persekutuan Pengakap Malaysia</a>
            <!-- Navbar Search Input-->
            <!-- * * Note: * * Visible only on and above the lg breakpoint-->
            <form class="form-inline me-auto d-none d-lg-block me-3">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-text"><i data-feather="search"></i></div>
                </div>
            </form>
            <!-- Navbar Items-->
            <ul class="navbar-nav align-items-center ms-auto">
                <!-- Documentation Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-md-block me-3">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="fw-500">Documentation</div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0 me-sm-n15 me-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book"></i></div>
                            <div>
                                <div class="small text-gray-500">Documentation</div>
                                Usage instructions and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="code"></i></div>
                            <div>
                                <div class="small text-gray-500">Components</div>
                                Code snippets and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
                            <div>
                                <div class="small text-gray-500">Changelog</div>
                                Updates and changes
                            </div>
                        </a>
                    </div>
                </li>
                <!-- Navbar Search Dropdown-->
                <!-- * * Note: * * Visible only below the lg breakpoint-->
                <li class="nav-item dropdown no-caret me-3 d-lg-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                    <!-- Dropdown - Search-->
                    <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                        <form class="form-inline me-auto w-100">
                            <div class="input-group input-group-joined input-group-solid">
                                <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-text"><i data-feather="search"></i></div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Alerts Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="bell"></i>
                            Alerts Center
                        </h6>
                        <!-- Example Alert 1-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                                <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
                            </div>
                        </a>
                        <!-- Example Alert 2-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 22, 2021</div>
                                <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                            </div>
                        </a>
                        <!-- Example Alert 3-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 8, 2021</div>
                                <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                            </div>
                        </a>
                        <!-- Example Alert 4-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 2, 2021</div>
                                <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                    </div>
                </li>
                <!-- Messages Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="mail"></i>
                            Message Center
                        </h6>
                        <!-- Example Message 1  -->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-2.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                            </div>
                        </a>
                        <!-- Example Message 2-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-3.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                            </div>
                        </a>
                        <!-- Example Message 3-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-4.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                            </div>
                        </a>
                        <!-- Example Message 4-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-5.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                            </div>
                        </a>
                        <!-- Footer Link-->
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                    </div>
                </li>
                <!-- User Dropdown-->
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="assets/img/illustrations/profiles/profile-1.png" /></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="assets/img/illustrations/profiles/profile-1.png" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">Valerie Luna</div>
                                <div class="dropdown-user-details-email">vluna@aol.com</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>
                        <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <!-- Sidenav Menu Heading (Account)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <div class="sidenav-menu-heading d-sm-none">Account</div>
                            <!-- Sidenav Link (Alerts)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                Alerts
                                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                            </a>
                            <!-- Sidenav Link (Messages)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                            </a>
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Core</div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">

    <a class="nav-link" href="dashboard-1.php">
        <div class="nav-link-icon">
            <i data-feather="activity"></i>
        </div>
        Dashboards
    </a>


                            <!-- Sidenav Heading (Custom)-->
                            <div class="sidenav-menu-heading">Custom</div>
                            <!-- Sidenav Accordion (Pages)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                Pages
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                    <!-- Nested Sidenav Accordion (Pages -> Account)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                        Account
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAccount" data-bs-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="account-profile.php">Profile</a>
                                            <a class="nav-link" href="account-billing.php">Billing</a>
                                            <a class="nav-link" href="account-security.php">Security</a>
                                            <a class="nav-link" href="account-notifications.php">Notifications</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <!-- Sidenav Accordion (Applications)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
                                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                                Applications
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                                    <!-- Nested Sidenav Accordion (Apps -> User Management)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapseUserManagement" aria-expanded="false" aria-controls="appsCollapseUserManagement">
                                        User Management
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="appsCollapseUserManagement" data-bs-parent="#accordionSidenavAppsMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="user-management-list.php">Users List</a>
                                            <a class="nav-link" href="user-management-edit-user.php">Edit User</a>
                                            <a class="nav-link" href="user-management-add-user.php">Add User</a>
                                            <a class="nav-link" href="user-management-groups-list.php">Groups List</a>
                                            <a class="nav-link" href="user-management-org-details.php">Organization Details</a>
                                        </nav>
                                    </div>
                                    <!-- Nested Sidenav Accordion (Apps -> Posts Management)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapsePostsManagement" aria-expanded="false" aria-controls="appsCollapsePostsManagement">
                                        Posts Management
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="appsCollapsePostsManagement" data-bs-parent="#accordionSidenavAppsMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="blog-management-posts-list.php">Posts List</a>
                                            <a class="nav-link" href="blog-management-create-post.php">Create Post</a>
                                            <a class="nav-link" href="blog-management-edit-post.php">Edit Post</a>
                                            <a class="nav-link" href="blog-management-posts-admin.php">Posts Admin</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <!-- Sidenav Heading (Addons)-->
                            <div class="sidenav-menu-heading">Plugins</div>
                            <!-- Sidenav Link (Charts)-->
                            <a class="nav-link" href="charts.php">
                                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Charts
                            </a>
                            <!-- Sidenav Link (Tables)-->
                            <a class="nav-link" href="tables.php">
                                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Valerie Luna</div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                            Account Settings - Profile
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <!-- Account page navigation-->
                        <nav class="nav nav-borders">
                            <a class="nav-link active ms-0" href="account-profile.php">Profile</a>
                            <a class="nav-link" href="account-billing.php">Billing</a>
                            <a class="nav-link" href="account-security.php">Security</a>
                            <a class="nav-link" href="account-notifications.php">Notifications</a>
                        </nav>
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                                        <!-- Profile picture help block-->
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-->
                                        <button class="btn btn-primary" type="button">Upload new image</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Account Details</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Group (user full name)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputName">Full name</label>
                                                <input class="form-control" id="inputName" type="text" placeholder="Enter your name" />
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (username)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputUsername"> Username (how your name will appear to other users on the site)</label>
                                                    <input class="form-control" id="inputUsername" type="text" placeholder="eg : valerie"/>
                                                </div>
                                                <!-- Form Group (ic number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputICNum">IC number</label>
                                                    <input class="form-control" id="inputICNum" type="text" placeholder="eg : 012345-67-8910"/>
                                                </div>
                                            </div>
                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (organization name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputOrgName">School name</label>
                                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your school name"/>
                                                </div>
                                                <!-- Form Group (email address)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                    <input class="form-control" id="inputEmailAddress" type="email" placeholder="name@example.com"/>
                                                </div>
                                            </div>
                                            <!-- Form Group (address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputLocation">Address</label>
                                                <input class="form-control" id="inputAddress" type="text" placeholder="Enter your adress"/>
                                            </div>
                                            <!-- Form Row -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (district name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputDistrict">District</label>
                                                    <select name="district" id="district" class="form-control">
                                                        <optgroup label="Johor">
                                                            <option value="batu pahat">Batu Pahat</option>
                                                            <option value="johor bahru">Johor Bahru</option>
                                                            <option value="kluang">Kluang</option>
                                                            <option value="kota tinggi">Kota Tinggi</option>
                                                            <option value="kulai">Kulai</option>
                                                            <option value="mersing">Mersing</option>
                                                            <option value="muar">Muar</option>
                                                            <option value="pontian">Pontian</option>
                                                            <option value="segamat">Segamat</option>
                                                            <option value="tangkak">Tangkak</option>
                                                        </optgroup>
                                                        <optgroup label="Kedah">
                                                            <option value="baling">Baling</option>
                                                            <option value="bandar baharu">Bandar Baharu</option>
                                                            <option value="kota setar">Kota setar</option>
                                                            <option value="kuala muda">Kuala Muda</option>
                                                            <option value="kulim">Kulim</option>
                                                            <option value="langkawi">Langkawi</option>
                                                            <option value="padang terap">Padang Terap</option>
                                                            <option value="pendang">Pendang</option>
                                                            <option value="pokok sena">Pokok Sena</option>
                                                            <option value="sik">Sik</option>
                                                            <option value="yan">Yan</option>
                                                        </optgroup>
                                                        <optgroup label="Kelantan">
                                                            <option value="bachok">Bachok</option>
                                                            <option value="gua musang">Gua Musang</option>
                                                            <option value="jeli">Jeli</option>
                                                            <option value="kota bharu">Kota Bharu</option>
                                                            <option value="kuala krai">Kuala Krai</option>
                                                            <option value="machang">Machang</option>
                                                            <option value="pasir mas">Pasir Mas</option>
                                                            <option value="pasir puteh">Pasir Puteh</option>
                                                            <option value="tanah merah">Tanah Merah</option>
                                                            <option value="tumapt">Tumpat</option>
                                                            <option value="lojing">Lojing</option>
                                                        </optgroup>
                                                        <optgroup label="Melaka">
                                                            <option value="alor gajah">Alor Gajah</option>
                                                            <option value="melaka tengah">Melaka Tengah</option>
                                                            <option value="jasin">Jasin</option>
                                                        </optgroup>
                                                        <optgroup label="Negeri Sembilan">
                                                            <option value="jelebu">Jelebu</option>
                                                            <option value="jempol">Jempol</option>
                                                            <option value="kuala pilah">Kuala Pilah</option>
                                                            <option value="port dickson">Port Dickson</option>
                                                            <option value="rembau">Rembau</option>
                                                            <option value="seremban">Seremban</option>
                                                            <option value="tampin">Tampin</option>
                                                        </optgroup>
                                                        <optgroup label="Pahang">
                                                            <option value="bentong">Bentong</option>
                                                            <option value="bera">Bera</option>
                                                            <option value="cameron highlands">Cameron Highlands</option>
                                                            <option value="jerantut">Jerantut</option>
                                                            <option value="kuantan">Kuantan</option>
                                                            <option value="lipis">Lipis</option>
                                                            <option value="maran">Maran</option>
                                                            <option value="pekan">Pekan</option>
                                                            <option value="raub">Raub</option>
                                                            <option value="rompin">Rompin</option>
                                                            <option value="temerloh">Temerloh</option>
                                                        </optgroup>
                                                        <optgroup label="Pulau Pinang">
                                                            <option value="timur laut">Timur Laut</option>
                                                            <option value="barat daya">Barat Daya</option>
                                                            <option value="seberang perai utara">Seberang Perai Utara</option>
                                                            <option value="seberang perai tengah">Seberang Perai Tengah</option>
                                                            <option value="seberang perai Selatan">Seberang Perai Selatan</option>
                                                        </optgroup>
                                                        <optgroup label="Perak">
                                                            <option value="batang padang">Batang Padang</option>
                                                            <option value="hilir perak">Hilir Perak</option>
                                                            <option value="hulu perak">Hulu Perak</option>
                                                            <option value="kampar">Kampar</option>
                                                            <option value="kerian">Kerian</option>
                                                            <option value="kinta">Kinta</option>
                                                            <option value="kuala kangsar">Kuala Kangsar</option>
                                                            <option value="larut matang selama">Larut, Matang dan Selama</option>
                                                            <option value="manjung">Manjung</option>
                                                            <option value="muallim">Muallim</option>
                                                            <option value="perak tengah">Perak Tengah</option>
                                                            <option value="bagan datuk">Bagan Datuk</option>
                                                        </optgroup>
                                                        <optgroup label="Perlis">
                                                            <option value="perlis">Perlis</option>
                                                        </optgroup>
                                                        <optgroup label="Selangor">
                                                            <option value="gombak">Gombak</option>
                                                            <option value="hulu langat">Hulu Langat</option>
                                                            <option value="hulu selangor">Hulu Selangor</option>
                                                            <option value="klang">Klang</option>
                                                            <option value="kuala langat">Kuala Langat</option>
                                                            <option value="kuala selangor">Kuala Selangor</option>
                                                            <option value="petaling">Petaling</option>
                                                            <option value="sabak bernam">Sabak Bernam</option>
                                                            <option value="sepang">Sepang</option>
                                                        </optgroup>
                                                        <optgroup label="Terengganu">
                                                            <option value="besut">Besut</option>
                                                            <option value="dungun">Dungun</option>
                                                            <option value="hulu terengganu">Hulu Terengganu</option>
                                                            <option value="kemaman">Kemaman</option>
                                                            <option value="kuala terengganu">Kuala Terengganu</option>
                                                            <option value="marang">Marang</option>
                                                            <option value="setiu">Setiu</option>
                                                            <option value="kuala nerus">Kuala Nerus</option>
                                                        </optgroup>
                                                        <optgroup label="WP Kuala Lumpur">
                                                            <option value="kuala lumpur">Kuala Lumpur</option>
                                                        </optgroup>
                                                        <optgroup label="WP Putrajaya">
                                                            <option value="putrajaya">Putrajaya</option>
                                                        </optgroup>
                                                        <optgroup label="WP Labuan">
                                                            <option value="batu manikar">Batu Manikar</option>
                                                            <option value="pohon batu">Pohon Batu</option>
                                                            <option value="ganggarak merinding">Ganggarak/Merinding</option>
                                                            <option value="tanjung aru">Tanjung Aru</option>
                                                            <option value="lajau">Lajau</option>
                                                            <option value="lubok temiang">Lubok Temiang</option>
                                                            <option value="bukit kuda">Bukit Kuda</option>
                                                            <option value="layang-layangan">Layang-Layangan</option>
                                                            <option value="sungai labu">Sungai Labu</option>
                                                            <option value="Bukit Kalam">bukit kalam</option>
                                                            <option value="kilan kilan pulau akar">Kilan/Kilan Pulau Akar</option>
                                                            <option value="sungai bangat">Sungai Bangat</option>
                                                            <option value="sungai buton">Sungai Buton</option>
                                                            <option value="sungai bedaun sungai sembilang">Sungai Bedaun/Sungai Sembilang</option>
                                                            <option value="sungai miri pagar">Sungai Miri/Pagar</option>
                                                            <option value="belukut">Belukut</option>
                                                            <option value="bebuloh">Bebuloh</option>
                                                            <option value="sungai lada">Sungai Lada</option>
                                                            <option value="victoria">Victoria</option>
                                                            <option value="pantai">Pantai</option>
                                                            <option value="durian tunjung">Durian Tunjung</option>
                                                            <option value="Batu Arang">Batu Arang</option>
                                                            <option value="gersik saguking jawa parit">Gersik/Saguking/Jawa/Parit</option>
                                                            <option value="patau patau 1">Patau-Patau 1</option>
                                                            <option value="patau-patau 2">Patau-Patau 2</option>
                                                            <option value="sungai keling">Sungai Keling</option>
                                                            <option value="rancha-rancha">Rancha-Rancha</option>
                                                            <option value="nagalang kerupang">Nagalang/Kerupang</option>
                                                        </optgroup>
                                                        <optgroup label="Sabah">
                                                            <option value="kota marudu">Kota Marudu</option>
                                                            <option value="kudat">Kudat</option>
                                                            <option value="pitas">Pitas</option>
                                                            <option value="kota belud">Kota Belud</option>
                                                            <option value="kota kinabalu">Kota Kinabalu</option>
                                                            <option value="papar">Papar</option>
                                                            <option value="penampang">Penampang</option>
                                                            <option value="putatan">Putatan</option>
                                                            <option value="ranau">Ranau</option>
                                                            <option value="tuaran">Tuaran</option>
                                                            <option value="beaufort">Beaufort</option>
                                                            <option value="keningau">Keningau</option>
                                                            <option value="kuala penyu">Kuala Penyu</option>
                                                            <option value="nabawan">Nabawan</option>
                                                            <option value="sipitang">Sipitang</option>
                                                            <option value="tambunan">Tambunan</option>
                                                            <option value="tenom">Tenom</option>
                                                            <option value="beluran">Beluran</option>
                                                            <option value="kinabatangan">Kinabatangan</option>
                                                            <option value="sandakan">Sandakan</option>
                                                            <option value="telupid">Telupid</option>
                                                            <option value="tongod">Tongod</option>
                                                            <option value="kalabakan">Kalabakan</option>
                                                            <option value="kunak">Kunak</option>
                                                            <option value="lahad datu">Lahad Datu</option>
                                                            <option value="semporna">Semporna</option>
                                                            <option value="tawau">Tawau</option>
                                                        </optgroup>
                                                        <optgroup label="Sarawak">
                                                            <option value="betong">Betong</option>
                                                            <option value="saratok">Saratok</option>
                                                            <option value="kabong">Kabong</option>
                                                            <option value="pusa">Pusa</option>
                                                            <option value="bintulu">Bintulu</option>
                                                            <option value="tatau">Tatau</option>
                                                            <option value="belaga">Belaga</option>
                                                            <option value="kapit">Kapit</option>
                                                            <option value="song">Song</option>
                                                            <option value="bau">Bau</option>
                                                            <option value="kuching">Kuching</option>
                                                            <option value="lundu">Lundu</option>
                                                            <option value="lawas">Lawas</option>
                                                            <option value="limbang">Limbang</option>
                                                            <option value="marudi">Marudi</option>
                                                            <option value="miri">Miri</option>
                                                            <option value="dalat">Dalat</option>
                                                            <option value="daro">Daro</option>
                                                            <option value="matu">Matu</option>
                                                            <option value="mukah">Mukah</option>
                                                            <option value="asajaya">Asajaya</option>
                                                            <option value="samarahan">Samarahan</option>
                                                            <option value="simunjan">Simunjan</option>
                                                            <option value="julau">Julau</option>
                                                            <option value="meradong">Meradong</option>
                                                            <option value="sarikei">Sarikei</option>
                                                            <option value="pakan">Pakan</option>
                                                            <option value="serian">Serian</option>
                                                            <option value="tebedu">Tebedu</option>
                                                            <option value="kanowit">Kanowit</option>
                                                            <option value="selangau">Selangau</option>
                                                            <option value="sibu">Sibu</option>
                                                            <option value="lubok antu">Lubok Antu</option>
                                                            <option value="sri aman">Sri Aman</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <!-- Form Group (state)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputState">State</label>
                                                    <select name="state" id="state" class="form-control">
                                                            <option value="johor">Johor</option>
                                                            <option value="kedah">Kedah</option>
                                                            <option value="kelantan">Kelantan</option>
                                                            <option value="melaka">Melaka</option>
                                                            <option value="negeri sembilan">Negeri Sembilan</option>
                                                            <option value="pahang">Pahang</option>
                                                            <option value="perak">Perak</option>
                                                            <option value="perlis">Perlis</option>
                                                            <option value="pulau pinang">Pulau Pinang</option>
                                                            <option value="selangor">Selangor</option>
                                                            <option value="terengganu">Terengganu</option>
                                                            <option value="sabah">Sabah</option>
                                                            <option value="sarawak">Sarawak</option>
                                                            <option value="wp kuala lumpur">WP Kuala Lumpur</option>
                                                            <option value="wp labuan">WP Labuan</option>
                                                            <option value="wp putrajaya">WP Putrajaya</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (poscode)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPoscode">Poscode</label>
                                                    <input class="form-control" id="inputPoscode" type="text" placeholder="Enter your poscode"/>
                                                </div>
                                                <!-- Form Group (no group)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputGroup">Pengakap Group Number</label>
                                                    <input class="form-control" id="inputGroup" type="text" name="no group" placeholder="Enter your pengakap group number"/>
                                                </div>
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (badge)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputBadge">Current Badge</label>
                                                    <input class="form-control" id="inputBadge" type="text" placeholder="Enter your current badge"/>
                                                </div>
                                                <!-- Form Group (membership)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputMembership">Pengakap Membership</label>
                                                    <select name="membership" id="membership" class="form-control">
                                                            <option value="pengakap kanak kanak">Pengakap Kanak-Kanak</option>
                                                            <option value="pengakap muda">Pengakap Muda</option>
                                                            <option value="pengakap remaja">Pengakap Remaja</option>
                                                            <option value="pengakap kelana">Pengakap Kelana</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                                    <input class="form-control" id="inputPhone" type="tel" placeholder="012-345678910"/>
                                                </div>
                                                <!-- Form Group (birthday)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                                    <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Enter your birthday" value="06/10/1988" />
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                <!-- Guardian details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Guardian Details</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Group (name)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputGName"> Guardian Name</label>
                                                <input class="form-control" id="inputGName" type="text" placeholder="Enter guardian name"/>
                                            </div>
                                            <!-- Form Group (location)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputLocation">Address</label>
                                                <input class="form-control" id="inputAddress" type="text" placeholder="Enter guardian address"/>
                                            </div>
                                            <!-- Form Row -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (district name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputDistrict">District</label>
                                                    <select name="district" id="district" class="form-control">
                                                        <optgroup label="Johor">
                                                            <option value="batu pahat">Batu Pahat</option>
                                                            <option value="johor bahru">Johor Bahru</option>
                                                            <option value="kluang">Kluang</option>
                                                            <option value="kota tinggi">Kota Tinggi</option>
                                                            <option value="kulai">Kulai</option>
                                                            <option value="mersing">Mersing</option>
                                                            <option value="muar">Muar</option>
                                                            <option value="pontian">Pontian</option>
                                                            <option value="segamat">Segamat</option>
                                                            <option value="tangkak">Tangkak</option>
                                                        </optgroup>
                                                        <optgroup label="Kedah">
                                                            <option value="baling">Baling</option>
                                                            <option value="bandar baharu">Bandar Baharu</option>
                                                            <option value="kota setar">Kota setar</option>
                                                            <option value="kuala muda">Kuala Muda</option>
                                                            <option value="kulim">Kulim</option>
                                                            <option value="langkawi">Langkawi</option>
                                                            <option value="padang terap">Padang Terap</option>
                                                            <option value="pendang">Pendang</option>
                                                            <option value="pokok sena">Pokok Sena</option>
                                                            <option value="sik">Sik</option>
                                                            <option value="yan">Yan</option>
                                                        </optgroup>
                                                        <optgroup label="Kelantan">
                                                            <option value="bachok">Bachok</option>
                                                            <option value="gua musang">Gua Musang</option>
                                                            <option value="jeli">Jeli</option>
                                                            <option value="kota bharu">Kota Bharu</option>
                                                            <option value="kuala krai">Kuala Krai</option>
                                                            <option value="machang">Machang</option>
                                                            <option value="pasir mas">Pasir Mas</option>
                                                            <option value="pasir puteh">Pasir Puteh</option>
                                                            <option value="tanah merah">Tanah Merah</option>
                                                            <option value="tumapt">Tumpat</option>
                                                            <option value="lojing">Lojing</option>
                                                        </optgroup>
                                                        <optgroup label="Melaka">
                                                            <option value="alor gajah">Alor Gajah</option>
                                                            <option value="melaka tengah">Melaka Tengah</option>
                                                            <option value="jasin">Jasin</option>
                                                        </optgroup>
                                                        <optgroup label="Negeri Sembilan">
                                                            <option value="jelebu">Jelebu</option>
                                                            <option value="jempol">Jempol</option>
                                                            <option value="kuala pilah">Kuala Pilah</option>
                                                            <option value="port dickson">Port Dickson</option>
                                                            <option value="rembau">Rembau</option>
                                                            <option value="seremban">Seremban</option>
                                                            <option value="tampin">Tampin</option>
                                                        </optgroup>
                                                        <optgroup label="Pahang">
                                                            <option value="bentong">Bentong</option>
                                                            <option value="bera">Bera</option>
                                                            <option value="cameron highlands">Cameron Highlands</option>
                                                            <option value="jerantut">Jerantut</option>
                                                            <option value="kuantan">Kuantan</option>
                                                            <option value="lipis">Lipis</option>
                                                            <option value="maran">Maran</option>
                                                            <option value="pekan">Pekan</option>
                                                            <option value="raub">Raub</option>
                                                            <option value="rompin">Rompin</option>
                                                            <option value="temerloh">Temerloh</option>
                                                        </optgroup>
                                                        <optgroup label="Pulau Pinang">
                                                            <option value="timur laut">Timur Laut</option>
                                                            <option value="barat daya">Barat Daya</option>
                                                            <option value="seberang perai utara">Seberang Perai Utara</option>
                                                            <option value="seberang perai tengah">Seberang Perai Tengah</option>
                                                            <option value="seberang perai Selatan">Seberang Perai Selatan</option>
                                                        </optgroup>
                                                        <optgroup label="Perak">
                                                            <option value="batang padang">Batang Padang</option>
                                                            <option value="hilir perak">Hilir Perak</option>
                                                            <option value="hulu perak">Hulu Perak</option>
                                                            <option value="kampar">Kampar</option>
                                                            <option value="kerian">Kerian</option>
                                                            <option value="kinta">Kinta</option>
                                                            <option value="kuala kangsar">Kuala Kangsar</option>
                                                            <option value="larut matang selama">Larut, Matang dan Selama</option>
                                                            <option value="manjung">Manjung</option>
                                                            <option value="muallim">Muallim</option>
                                                            <option value="perak tengah">Perak Tengah</option>
                                                            <option value="bagan datuk">Bagan Datuk</option>
                                                        </optgroup>
                                                        <optgroup label="Perlis">
                                                            <option value="perlis">Perlis</option>
                                                        </optgroup>
                                                        <optgroup label="Selangor">
                                                            <option value="gombak">Gombak</option>
                                                            <option value="hulu langat">Hulu Langat</option>
                                                            <option value="hulu selangor">Hulu Selangor</option>
                                                            <option value="klang">Klang</option>
                                                            <option value="kuala langat">Kuala Langat</option>
                                                            <option value="kuala selangor">Kuala Selangor</option>
                                                            <option value="petaling">Petaling</option>
                                                            <option value="sabak bernam">Sabak Bernam</option>
                                                            <option value="sepang">Sepang</option>
                                                        </optgroup>
                                                        <optgroup label="Terengganu">
                                                            <option value="besut">Besut</option>
                                                            <option value="dungun">Dungun</option>
                                                            <option value="hulu terengganu">Hulu Terengganu</option>
                                                            <option value="kemaman">Kemaman</option>
                                                            <option value="kuala terengganu">Kuala Terengganu</option>
                                                            <option value="marang">Marang</option>
                                                            <option value="setiu">Setiu</option>
                                                            <option value="kuala nerus">Kuala Nerus</option>
                                                        </optgroup>
                                                        <optgroup label="WP Kuala Lumpur">
                                                            <option value="kuala lumpur">Kuala Lumpur</option>
                                                        </optgroup>
                                                        <optgroup label="WP Putrajaya">
                                                            <option value="putrajaya">Putrajaya</option>
                                                        </optgroup>
                                                        <optgroup label="WP Labuan">
                                                            <option value="batu manikar">Batu Manikar</option>
                                                            <option value="pohon batu">Pohon Batu</option>
                                                            <option value="ganggarak merinding">Ganggarak/Merinding</option>
                                                            <option value="tanjung aru">Tanjung Aru</option>
                                                            <option value="lajau">Lajau</option>
                                                            <option value="lubok temiang">Lubok Temiang</option>
                                                            <option value="bukit kuda">Bukit Kuda</option>
                                                            <option value="layang-layangan">Layang-Layangan</option>
                                                            <option value="sungai labu">Sungai Labu</option>
                                                            <option value="Bukit Kalam">bukit kalam</option>
                                                            <option value="kilan kilan pulau akar">Kilan/Kilan Pulau Akar</option>
                                                            <option value="sungai bangat">Sungai Bangat</option>
                                                            <option value="sungai buton">Sungai Buton</option>
                                                            <option value="sungai bedaun sungai sembilang">Sungai Bedaun/Sungai Sembilang</option>
                                                            <option value="sungai miri pagar">Sungai Miri/Pagar</option>
                                                            <option value="belukut">Belukut</option>
                                                            <option value="bebuloh">Bebuloh</option>
                                                            <option value="sungai lada">Sungai Lada</option>
                                                            <option value="victoria">Victoria</option>
                                                            <option value="pantai">Pantai</option>
                                                            <option value="durian tunjung">Durian Tunjung</option>
                                                            <option value="Batu Arang">Batu Arang</option>
                                                            <option value="gersik saguking jawa parit">Gersik/Saguking/Jawa/Parit</option>
                                                            <option value="patau patau 1">Patau-Patau 1</option>
                                                            <option value="patau-patau 2">Patau-Patau 2</option>
                                                            <option value="sungai keling">Sungai Keling</option>
                                                            <option value="rancha-rancha">Rancha-Rancha</option>
                                                            <option value="nagalang kerupang">Nagalang/Kerupang</option>
                                                        </optgroup>
                                                        <optgroup label="Sabah">
                                                            <option value="kota marudu">Kota Marudu</option>
                                                            <option value="kudat">Kudat</option>
                                                            <option value="pitas">Pitas</option>
                                                            <option value="kota belud">Kota Belud</option>
                                                            <option value="kota kinabalu">Kota Kinabalu</option>
                                                            <option value="papar">Papar</option>
                                                            <option value="penampang">Penampang</option>
                                                            <option value="putatan">Putatan</option>
                                                            <option value="ranau">Ranau</option>
                                                            <option value="tuaran">Tuaran</option>
                                                            <option value="beaufort">Beaufort</option>
                                                            <option value="keningau">Keningau</option>
                                                            <option value="kuala penyu">Kuala Penyu</option>
                                                            <option value="nabawan">Nabawan</option>
                                                            <option value="sipitang">Sipitang</option>
                                                            <option value="tambunan">Tambunan</option>
                                                            <option value="tenom">Tenom</option>
                                                            <option value="beluran">Beluran</option>
                                                            <option value="kinabatangan">Kinabatangan</option>
                                                            <option value="sandakan">Sandakan</option>
                                                            <option value="telupid">Telupid</option>
                                                            <option value="tongod">Tongod</option>
                                                            <option value="kalabakan">Kalabakan</option>
                                                            <option value="kunak">Kunak</option>
                                                            <option value="lahad datu">Lahad Datu</option>
                                                            <option value="semporna">Semporna</option>
                                                            <option value="tawau">Tawau</option>
                                                        </optgroup>
                                                        <optgroup label="Sarawak">
                                                            <option value="betong">Betong</option>
                                                            <option value="saratok">Saratok</option>
                                                            <option value="kabong">Kabong</option>
                                                            <option value="pusa">Pusa</option>
                                                            <option value="bintulu">Bintulu</option>
                                                            <option value="tatau">Tatau</option>
                                                            <option value="belaga">Belaga</option>
                                                            <option value="kapit">Kapit</option>
                                                            <option value="song">Song</option>
                                                            <option value="bau">Bau</option>
                                                            <option value="kuching">Kuching</option>
                                                            <option value="lundu">Lundu</option>
                                                            <option value="lawas">Lawas</option>
                                                            <option value="limbang">Limbang</option>
                                                            <option value="marudi">Marudi</option>
                                                            <option value="miri">Miri</option>
                                                            <option value="dalat">Dalat</option>
                                                            <option value="daro">Daro</option>
                                                            <option value="matu">Matu</option>
                                                            <option value="mukah">Mukah</option>
                                                            <option value="asajaya">Asajaya</option>
                                                            <option value="samarahan">Samarahan</option>
                                                            <option value="simunjan">Simunjan</option>
                                                            <option value="julau">Julau</option>
                                                            <option value="meradong">Meradong</option>
                                                            <option value="sarikei">Sarikei</option>
                                                            <option value="pakan">Pakan</option>
                                                            <option value="serian">Serian</option>
                                                            <option value="tebedu">Tebedu</option>
                                                            <option value="kanowit">Kanowit</option>
                                                            <option value="selangau">Selangau</option>
                                                            <option value="sibu">Sibu</option>
                                                            <option value="lubok antu">Lubok Antu</option>
                                                            <option value="sri aman">Sri Aman</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <!-- Form Group (state)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputState">State</label>
                                                    <select name="state" id="state" class="form-control">
                                                            <option value="johor">Johor</option>
                                                            <option value="kedah">Kedah</option>
                                                            <option value="kelantan">Kelantan</option>
                                                            <option value="melaka">Melaka</option>
                                                            <option value="negeri sembilan">Negeri Sembilan</option>
                                                            <option value="pahang">Pahang</option>
                                                            <option value="perak">Perak</option>
                                                            <option value="perlis">Perlis</option>
                                                            <option value="pulau pinang">Pulau Pinang</option>
                                                            <option value="selangor">Selangor</option>
                                                            <option value="terengganu">Terengganu</option>
                                                            <option value="sabah">Sabah</option>
                                                            <option value="sarawak">Sarawak</option>
                                                            <option value="wp kuala lumpur">WP Kuala Lumpur</option>
                                                            <option value="wp labuan">WP Labuan</option>
                                                            <option value="wp putrajaya">WP Putrajaya</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <!-- Poscode Form -->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPoscode">Poscode</label>
                                                    <input class="form-control" id="inputPoscode" type="text" placeholder="Enter your poscode"/>
                                                </div>
                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                                    <input class="form-control" id="inputPhone" type="tel" placeholder="012-345678910"/>
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
