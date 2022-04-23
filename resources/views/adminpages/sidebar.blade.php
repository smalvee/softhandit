<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img style="height: 2.5rem; width: 11rem;" src="admin/images/logo.png" class="logo-icon" alt="Bangodash">
            {{-- <h5 class="logo-text"> Softhand IT</h5> --}}
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="index.html" class="waves-effect">
                <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ url('dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                {{-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                <li><a href="index3.html"><i class="fa fa-circle-o"></i> Dashboard v3</a></li> --}}
            </ul>
        </li>
        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-briefcase"></i>
                <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="ui-typography.html"><i class="fa fa-circle-o"></i> Typography</a></li>
                <li><a href="ui-buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                <li><a href="ui-checkbox-radio.html"><i class="fa fa-circle-o"></i> Checkboxes & Radios</a></li>
                <li><a href="ui-tabs-accordions.html"><i class="fa fa-circle-o"></i> Tabs & Accordions</a></li>
                <li><a href="ui-modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                <li><a href="ui-bootstrap-elements.html"><i class="fa fa-circle-o"></i> BS Elements</a></li>
                <li><a href="ui-pagination.html"><i class="fa fa-circle-o"></i> Pagination</a></li>
                <li><a href="ui-list-groups.html"><i class="fa fa-circle-o"></i> List Groups</a></li>
                <li><a href="ui-alerts.html"><i class="fa fa-circle-o"></i> Alerts</a></li>
                <li><a href="ui-progressbars.html"><i class="fa fa-circle-o"></i> Progress Bars</a></li>
                <li><a href="ui-notification.html"><i class="fa fa-circle-o"></i> Notifications</a></li>
                <li><a href="ui-sweet-alert.html"><i class="fa fa-circle-o"></i> Sweet Alerts</a></li>
                <li><a href="ui-color-palette.html"><i class="fa fa-circle-o"></i> Color Palette</a></li>
                <li><a href="ui-fancy-lightbox.html"><i class="fa fa-circle-o"></i> Fancy Lightbox</a></li>
            </ul>
        </li> --}}
        <li>
            <a href="{{ url('calender') }}" class="waves-effect">
                <i class="icon-calendar"></i> <span>Calendar</span>
                {{-- <small class="badge float-right badge-info">New</small> --}}
            </a>
        </li>

        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-envelope"></i>
                <span>Mailbox</span>
                {{-- <small class="badge float-right badge-warning">12</small> --}}
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ url('mail-inbox') }}"><i class="fa fa-circle-o"></i> Inbox</a></li>
                <li><a href="{{ url('mail-compose') }}"><i class="fa fa-circle-o"></i> Compose</a></li>
                <li><a href="{{ url('mail-read') }}"><i class="fa fa-circle-o"></i> Read Mail</a></li>
            </ul>
        </li>
        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-layers"></i>
                <span>Components</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="components-grid-layouts.html"><i class="fa fa-circle-o"></i> Grid Layouts</a></li>
                <li><a href="components-nestable.html"><i class="fa fa-circle-o"></i> Nesteble</a></li>
                <li><a href="components-tree-view-menu.html"><i class="fa fa-circle-o"></i> Tree View</a></li>
                <li><a href="components-switcher-buttons.html"><i class="fa fa-circle-o"></i> Switcher
                        Buttons</a></li>
                <li><a href="components-user-cards.html"><i class="fa fa-circle-o"></i> User Cards</a></li>
                <li><a href="components-range-slider.html"><i class="fa fa-circle-o"></i> Range Sliders</a></li>
                <li><a href="components-vertical-timeline.html"><i class="fa fa-circle-o"></i> Vertical
                        Timeline</a></li>
                <li><a href="components-horizontal-timeline.html"><i class="fa fa-circle-o"></i> Horizontal
                        Timeline</a></li>
                <li><a href="components-pricing-table.html"><i class="fa fa-circle-o"></i> Pricing Tables</a>
                </li>
                <li><a href="components-image-carousel.html"><i class="fa fa-circle-o"></i> Image Carousels</a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-note"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ url('add-member') }}"><i class="fa fa-circle-o"></i> Add Member</a></li>
                {{-- <li><a href="form-input-group.html"><i class="fa fa-circle-o"></i> Input Groups</a></li>
                <li><a href="form-basic-layouts.html"><i class="fa fa-circle-o"></i> Form Basic</a></li>
                <li><a href="form-bordered-layouts.html"><i class="fa fa-circle-o"></i> Form Bordered</a></li>
                <li><a href="form-horizontal-layouts.html"><i class="fa fa-circle-o"></i> Form Horizontal</a>
                </li>
                <li><a href="form-striped-layouts.html"><i class="fa fa-circle-o"></i> Form Striped</a></li>
                <li><a href="form-hidden-label-ayouts.html"><i class="fa fa-circle-o"></i> Form Hidden Label</a>
                </li>
                <li><a href="form-advanced.html"><i class="fa fa-circle-o"></i> Form Advanced</a></li>
                <li><a href="form-validation.html"><i class="fa fa-circle-o"></i> Form Validation</a></li>
                <li><a href="form-step-wizard.html"><i class="fa fa-circle-o"></i> Form Wizard</a></li>
                <li><a href="form-text-editor.html"><i class="fa fa-circle-o"></i> Form Editor</a></li>
                <li><a href="form-uploads.html"><i class="fa fa-circle-o"></i> Form Uploads</a></li> --}}
            </ul>
        </li>
        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-fire"></i> <span>UI Icons</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="icons-material-designs.html"><i class="fa fa-circle-o"></i> Material Design</a>
                </li>
                <li><a href="icons-font-awesome.html"><i class="fa fa-circle-o"></i> Font Awesome</a></li>
                <li><a href="icons-themify.html"><i class="fa fa-circle-o"></i> Themify Icons</a></li>
                <li><a href="icons-simple-line-icons.html"><i class="fa fa-circle-o"></i> Line Icons</a></li>
                <li><a href="icons-flags.html"><i class="fa fa-circle-o"></i> Flag Icons</a></li>
            </ul>
        </li> --}}

        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-event"></i> <span>Widgets</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="widgets-static-widgets.html"><i class="fa fa-circle-o"></i> Static Widgets</a></li>
                <li><a href="widgets-data-widgets.html"><i class="fa fa-circle-o"></i> Data Widgets</a></li>
                <li><a href="widgets-flat-widgets.html"><i class="fa fa-circle-o"></i> Flat Widgets</a></li>
            </ul>
        </li> --}}

        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-grid"></i> <span>Tables</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                {{-- <li><a href="table-simple-tables.html"><i class="fa fa-circle-o"></i> Simple Tables</a></li>
                <li><a href="table-header-tables.html"><i class="fa fa-circle-o"></i> Header Tables</a></li>
                <li><a href="table-color-tables.html"><i class="fa fa-circle-o"></i> Color Tables</a></li>
                <li><a href="table-striped-color-tables.html"><i class="fa fa-circle-o"></i> Striped Color
                        Tables</a></li> --}}
                <li><a href="{{ url('team-member-list') }}"><i class="fa fa-circle-o"></i> Team Members</a></li>
            </ul>
        </li>

        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-chart"></i> <span>Charts</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="charts-morris.html"><i class="fa fa-circle-o"></i> Morris Charts</a></li>
                <li><a href="charts-chartjs.html"><i class="fa fa-circle-o"></i> Chart JS</a></li>
                <li><a href="charts-flot.html"><i class="fa fa-circle-o"></i> Flot Chart</a></li>
                <li><a href="charts-peity.html"><i class="fa fa-circle-o"></i> Peity Charts</a></li>
                <li><a href="charts-sparkline.html"><i class="fa fa-circle-o"></i> Sparkline Charts</a></li>
                <li><a href="charts-other.html"><i class="fa fa-circle-o"></i> Other Charts</a></li>
            </ul>
        </li> --}}

        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-map"></i> <span>Maps</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="maps-google.html"><i class="fa fa-circle-o"></i> Google Maps</a></li>
                <li><a href="maps-vector.html"><i class="fa fa-circle-o"></i> Vector Maps</a></li>
            </ul>
        </li> --}}

        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-lock"></i> <span>Authentication</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="authentication-signin.html"><i class="fa fa-circle-o"></i> SignIn 1</a></li>
                <li><a href="authentication-signin2.html"><i class="fa fa-circle-o"></i> SignIn 2</a></li>
                <li><a href="authentication-signup.html"><i class="fa fa-circle-o"></i> SignUp 1</a></li>
                <li><a href="authentication-signup2.html"><i class="fa fa-circle-o"></i> SignUp 2</a></li>
                <li><a href="authentication-reset-password.html"><i class="fa fa-circle-o"></i> Reset Password
                        1</a></li>
                <li><a href="authentication-reset-password2.html"><i class="fa fa-circle-o"></i> Reset Password
                        2</a></li>
            </ul>
        </li> --}}

        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-folder-alt"></i> <span>Sample Pages</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                {{-- <li><a href="pages-invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li> --}}
                {{-- <li><a href="pages-user-profile.html"><i class="fa fa-circle-o"></i> User Profile</a></li> --}}
                {{-- <li><a href="pages-lock-screen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages-blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li><a href="pages-coming-soon.html"><i class="fa fa-circle-o"></i> Coming Soon</a></li>
                <li><a href="pages-403.html"><i class="fa fa-circle-o"></i> 403 Error</a></li>
                <li><a href="pages-404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages-500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li> --}}
            </ul>
        </li>

        {{-- <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                    <a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level One <i
                            class="fa fa-angle-left pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Two</a></li>
                        <li>
                            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Two <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Three</a>
                                </li>
                                <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Three</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o"></i> Level
                        One</a></li>
            </ul>
        </li> --}}
        {{-- <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o text-red"></i>
                <span>Important</span></a></li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o text-yellow"></i>
                <span>Warning</span></a></li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o text-aqua"></i>
                <span>Information</span></a></li> --}}
    </ul>

</div>
<!--End sidebar-wrapper-->
