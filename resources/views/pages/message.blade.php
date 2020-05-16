@extends('layout.app')

@section('css')
    <style>
        [data-sa-theme="1"] {
            background-image: url('/img/bg/1.jpg');
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>

        <header class="header">
            <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                <i class="zmdi zmdi-menu"></i>
            </div>

            <div class="logo hidden-sm-down">
                <h1><a href="index-2.html">Super Admin 2.0</a></h1>
            </div>

            <form class="search">
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                    <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                </div>
            </form>

            <ul class="top-nav">
                <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="dropdown-header">
                            Messages

                            <div class="actions">
                                <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                            </div>
                        </div>

                        <div class="listview listview--hover">
                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        David Belle
                                        <small>12:01 PM</small>
                                    </div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Jonathan Morris
                                        <small>02:45 PM</small>
                                    </div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Fredric Mitchell Jr.
                                        <small>08:21 PM</small>
                                    </div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue
                                        ultricies</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Glenn Jecobs
                                        <small>08:43 PM</small>
                                    </div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est
                                        consectetur neque</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Bill Phillips
                                        <small>11:32 PM</small>
                                    </div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante
                                        placerat</p>
                                </div>
                            </a>

                            <a href="#" class="view-more">View all messages</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown top-nav__notifications">
                    <a href="#" data-toggle="dropdown" class="top-nav__notify">
                        <i class="zmdi zmdi-notifications"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="dropdown-header">
                            Notifications

                            <div class="actions">
                                <a href="#" class="actions__item zmdi zmdi-check-all"
                                   data-sa-action="notifications-clear"></a>
                            </div>
                        </div>

                        <div class="listview listview--hover">
                            <div class="listview__scroll scrollbar-inner">
                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at
                                            augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Glenn Jecobs</div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui
                                            est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Bill Phillips</div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante
                                            placerat</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at
                                            augue ultricies</p>
                                    </div>
                                </a>
                            </div>

                            <div class="p-1"></div>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="dropdown-header">Tasks</div>

                        <div class="listview listview--hover">
                            <a href="#" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">HTML5 Validation Report</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Google Chrome Extension</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Social Intranet Projects</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Bootstrap Admin Template</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Youtube Client App</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="view-more">View all Tasks</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="row app-shortcuts">
                            <a class="col-4 app-shortcuts__item" href="#">
                                <i class="zmdi zmdi-calendar"></i>
                                <small class="">Calendar</small>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="#">
                                <i class="zmdi zmdi-file-text"></i>
                                <small class="">Files</small>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="#">
                                <i class="zmdi zmdi-email"></i>
                                <small class="">Email</small>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="#">
                                <i class="zmdi zmdi-trending-up"></i>
                                <small class="">Reports</small>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="#">
                                <i class="zmdi zmdi-view-headline"></i>
                                <small class="">News</small>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="#">
                                <i class="zmdi zmdi-image"></i>
                                <small class="">Gallery</small>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item theme-switch">
                            Theme Switch

                            <div class="btn-group btn-group--colors mt-2 d-block" data-toggle="buttons">
                                <label class="btn active border-0" style="background-color: #772036"><input type="radio"
                                                                                                            value="1"
                                                                                                            autocomplete="off"
                                                                                                            checked></label>
                                <label class="btn border-0" style="background-color: #273C5B"><input type="radio"
                                                                                                     value="2"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #174042"><input type="radio"
                                                                                                     value="3"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #383844"><input type="radio"
                                                                                                     value="4"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #49423F"><input type="radio"
                                                                                                     value="5"
                                                                                                     autocomplete="off"></label>

                                <br>

                                <label class="btn border-0" style="background-color: #5e3d22"><input type="radio"
                                                                                                     value="6"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #234d6d"><input type="radio"
                                                                                                     value="7"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #3b5e5e"><input type="radio"
                                                                                                     value="8"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #0a4c3e"><input type="radio"
                                                                                                     value="9"
                                                                                                     autocomplete="off"></label>
                                <label class="btn border-0" style="background-color: #7b3d54"><input type="radio"
                                                                                                     value="10"
                                                                                                     autocomplete="off"></label>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                        <a href="#" class="dropdown-item">Clear Local Storage</a>
                    </div>
                </li>
            </ul>

            <div class="clock hidden-md-down">
                <div class="time">
                    <span class="hours"></span>
                    <span class="min"></span>
                    <span class="sec"></span>
                </div>
            </div>
        </header>

        <aside class="sidebar">
            <div class="scrollbar-inner">

                <div class="user">
                    <div class="user__info" data-toggle="dropdown">
                        <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                        <div>
                            <div class="user__name">Malinda Hollaway</div>
                            <div class="user__email">malinda-h@gmail.com</div>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">View Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>

                <ul class="navigation">
                    <li class="@@indexactive"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>

                    <li class="navigation__sub @@variantsactive">
                        <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                        <ul>
                            <li class="@@sidebaractive"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                            <li class="@@boxedactive"><a href="boxed-layout.html">Boxed Layout</a></li>
                            <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed
                                    Layout with Hidden Sidebar</a></li>
                        </ul>
                    </li>

                    <li class="@@typeactive"><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i>
                            Typography</a></li>

                    <li class="@@widgetactive"><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                    <li class="navigation__sub @@tableactive">
                        <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                        <ul>
                            <li class="@@normaltableactive"><a href="html-table.html">HTML Table</a></li>
                            <li class="@@datatableactive"><a href="data-table.html">Data Table</a></li>
                        </ul>
                    </li>

                    <li class="navigation__sub @@formactive">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                        <ul>
                            <li class="@@formelementactive"><a href="form-elements.html">Basic Form Elements</a></li>
                            <li class="@@formcomponentactive"><a href="form-components.html">Form Components</a></li>
                            <li class="@@formvalidationactive"><a href="form-validation.html">Form Validation</a></li>
                        </ul>
                    </li>

                    <li class="navigation__sub @@uiactive">
                        <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                        <ul>
                            <li class="@@colorsactive"><a href="colors.html">Colors</a></li>
                            <li class="@@cssanimationsactive"><a href="css-animations.html">CSS Animations</a></li>
                            <li class="@@buttonsactive"><a href="buttons.html">Buttons</a></li>
                            <li class="@@iconsactive"><a href="icons.html">Icons</a></li>
                            <li class="@@listviewactive"><a href="listview.html">Listview</a></li>
                            <li class="@@toolbarsactive"><a href="toolbars.html">Toolbars</a></li>
                            <li class="@@cardsactive"><a href="cards.html">Cards</a></li>
                            <li class="@@alertactive"><a href="alerts.html">Alerts</a></li>
                            <li class="@@badgesactive"><a href="badges.html">Badges</a></li>
                            <li class="@@breadcrumbsactive"><a href="breadcrumbs.html">Bredcrumbs</a></li>
                            <li class="@@jumbotronactive"><a href="jumbotron.html">Jumbotron</a></li>
                            <li class="@@navsactive"><a href="navs.html">Navs</a></li>
                            <li class="@@paginationactive"><a href="pagination.html">Pagination</a></li>
                            <li class="@@progressactive"><a href="progress.html">Progress</a></li>
                        </ul>
                    </li>

                    <li class="navigation__sub @@componentsactive">
                        <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                        <ul class="navigation__sub">
                            <li class="@@carouselactive"><a href="carousel.html">Carousel</a></li>
                            <li class="@@collapseactive"><a href="collapse.html">Collapse</a></li>
                            <li class="@@dropdownsactive"><a href="dropdowns.html">Dropdowns</a></li>
                            <li class="@@modalsactive"><a href="modals.html">Modals</a></li>
                            <li class="@@popoveractive"><a href="popover.html">Popover</a></li>
                            <li class="@@tabsactive"><a href="tabs.html">Tabs</a></li>
                            <li class="@@tooltipsactive"><a href="tooltips.html">Tooltips</a></li>
                            <li class="@@notificationsactive"><a href="notifications-alerts.html">Notifications &
                                    Alerts</a></li>
                        </ul>
                    </li>

                    <li class="navigation__sub @@chartsactive">
                        <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                        <ul>
                            <li class="@@flotchartsactive"><a href="flot-charts.html">Flot</a></li>
                            <li class="@@otherchartsactive"><a href="other-charts.html">Other Charts</a></li>
                        </ul>
                    </li>

                    <li class="@@calendaractive"><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a>
                    </li>

                    <li class="@@photogalleryactive"><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo
                            Gallery</a></li>

                    <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                        <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                        <ul>
                            <li class="@@profileactive"><a href="profile-about.html">Profile</a></li>
                            <li class="navigation__active"><a href="messages.html">Messages</a></li>
                            <li class="@@contactsactive"><a href="contacts.html">Contacts</a></li>
                            <li class="@@groupsactive"><a href="groups.html">Groups</a></li>
                            <li class="@@pricingtablesactive"><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li class="@@invoiceactive"><a href="invoice.html">Invoice</a></li>
                            <li class="@@todoactive"><a href="todo-lists.html">Todo Lists</a></li>
                            <li class="@@notesactive"><a href="notes.html">Notes</a></li>
                            <li class="@@loginactive"><a href="login.html">Login & SignUp</a></li>
                            <li class="@@lockscreenactive"><a href="lockscreen.html">Lockscreen</a></li>
                            <li class="@@lockscreenactive"><a href="404.html">404</a></li>
                            <li class="@@emptyactive"><a href="empty.html">Empty Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>

        <section class="content">
            <div class="content__inner">
                <header class="content__title">
                    <h1>Messages</h1>

                    <div class="actions">
                        <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Refresh</a>
                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                <a href="#" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="messages">
                    <div class="messages__sidebar">
                        <div class="toolbar toolbar--inner mb-3">
                            <div class="toolbar__label">Malinda Hollaway</div>

                            <div class="actions toolbar__actions">
                                <a href="#" class="actions__item zmdi zmdi-plus"></a>
                            </div>
                        </div>

                        <div class="messages__search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="listview listview--hover">
                            <a class="listview__item" href="#">
                                <img src="demo/img/profile-pics/4.jpg" alt="" class="listview__img">

                                <div class="listview__content">
                                    <div class="listview__heading">Davil Parnell</div>
                                    <p>Fierent fastidii recteque ad pro</p>
                                </div>
                            </a>

                            <a class="listview__item listview__item--active" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/8.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Ann Watkinson</div>
                                    <p>Cum sociis natoque penatibus </p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/3.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Marse Walter</div>
                                    <p>Suspendisse sapien ligula</p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/2.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Jeremy Robbins</div>
                                    <p>Phasellus porttitor tellus nec</p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/4.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Reginald Horace</div>
                                    <p>Quisque consequat arcu eget</p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/5.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Shark Henry</div>
                                    <p>Nam lobortis odio et leo maximu</p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/2.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Paul Van Dack</div>
                                    <p>Nam posuere purus sed velit auctor sodales</p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/1.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">James Anderson</div>
                                    <p>Vivamus imperdiet sagittis quam</p>
                                </div>
                            </a>

                            <a class="listview__item" href="#">
                                <div class="pull-left">
                                    <img src="demo/img/profile-pics/3.jpg" alt="" class="listview__img">
                                </div>
                                <div class="listview__content">
                                    <div class="listview__heading">Kane Williams</div>
                                    <p>Suspendisse justo nulla luctus nec</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="messages__body">
                        <div class="messages__header">
                            <div class="toolbar toolbar--inner mb-0">
                                <div class="toolbar__label">Sharah Conor</div>

                                <div class="actions toolbar__actions">
                                    <i class="actions__item zmdi zmdi-search" data-sa-action="toolbar-search-open"></i>
                                    <a href="#" class="actions__item zmdi zmdi-time"></a>
                                    <a href="#" class="actions__item zmdi zmdi-info-outline"></a>
                                    <div class="dropdown actions__item">
                                        <i class="actions__item zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Refresh</a>
                                            <a href="#" class="dropdown-item">Delete all</a>
                                            <a href="#" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="toolbar__search">
                                    <input type="text" placeholder="Search...">
                                    <i class="toolbar__search__close zmdi zmdi-long-arrow-left"
                                       data-sa-action="toolbar-search-close"></i>
                                </div>
                            </div>
                        </div>

                        <div class="messages__content">
                            <div class="messages__item">
                                <img src="demo/img/profile-pics/1.jpg" class="messages__avatar" alt="">

                                <div class="messages__details">
                                    <p>Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex
                                        arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat,
                                        eget condimentum sapien viverra et. Mauris volutpat magna nibh, et condimentum
                                        est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.</p>
                                    <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:00</small>
                                </div>
                            </div>

                            <div class="messages__item messages__item--right">
                                <div class="messages__details">
                                    <p>Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In
                                        eu massa a sem pulvinar lobortis.</p>
                                    <p>Nunc sed turpis mi. In eu massa a sem pulvinar condimentum.</p>
                                    <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:10</small>
                                </div>
                            </div>

                            <div class="messages__item">
                                <img src="demo/img/profile-pics/1.jpg" class="messages__avatar" alt="">

                                <div class="messages__details">
                                    <p>Etiam ex arcumentum</p>
                                    <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:11</small>
                                </div>
                            </div>

                            <div class="messages__item messages__item--right">
                                <div class="messages__details">
                                    <p>Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu
                                        laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum
                                        sociis natoque penatibus et magnis dis parturient montes</p>
                                    <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:15</small>
                                </div>
                            </div>

                            <div class="messages__item">
                                <img src="demo/img/profile-pics/1.jpg" class="messages__avatar" alt="">

                                <div class="messages__details" >
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    <p>Nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum
                                        id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed,
                                        luctus vestibulum eros. Etiam finibus tristique ante, vitae rhoncus sapien
                                        volutpat eget</p>
                                    <p id="test_message"></p>
                                    <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:22</small>
                                </div>
                            </div>
                        </div>

                        <div class="messages__reply">
                            <form action="{{route('postMessage')}}" method="post">
                                @csrf
                                <input type="hidden" id="title" name="title" value="123">


                                <div class="col-sm-12 d-flex" data-name="mail-send" data-code="f194">
                                    <textarea class="messages__reply__text" placeholder="Type a message..."
                                              name="content"></textarea>
                                    <button type="submit" class="float-right" style="background: none;border: none;width: 80px;cursor: pointer;">
                                        <span><i class="zmdi zmdi-mail-send zmdi-hc-fw" style="font-size: 1.7rem;vertical-align: bottom;color: white;float: right;"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')

@endsection