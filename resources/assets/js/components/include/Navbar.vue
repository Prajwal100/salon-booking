<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a href="#" class="d-lg-none app-color-text">
                <i class="la la-navicon la-2x"></i>
            </a>
            <a href="#" class="d-lg-none app-color-text">
                <i class="la la-close la-2x"></i>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hide-dropdown-icon"
                       href="#"
                       id="navbar-notification-dropdown"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false" >
                        <i class="la la-bell la-2x"></i>
                        <span class="badge badge-danger badge-notify" >2</span>
                    </a>
                    <div class="navbar-notification-container dropdown-menu dropdown-menu-right animated bounceInDown">
                        <div class="ticker"></div>
                        <p class="text-left p-2 mb-0">Your notifications}</p>
                        <div class="notification">
                            <a  href="#"

                               class="list-group-item justify-content-between align-items-center list-group-item-primary notification-list">
                                <div class="d-flex">
                                    <div class="image-notification mr-3">
                                        <img
                                             class="img-fluid rounded-circle"
                                             alt="quixote"
                                             width="40">
                                    </div>
                                    <p class="m-0">
                                        Hello
                                        <br>
                                        <small class="small">2020</small>
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="dropdown-divider m-0"></div>

                        <div class="text-center p-2"
                            >
                           No Nofi
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <div class="text-center py-2">
                            <a href="#"  class="text-center">
                                You have no notifications
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hide-dropdown-icon"
                       href="#"
                       id="navbar-profile-dropdown"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false"
                      >
                        <img  alt class="rounded-circle avatar"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated bounceInDown profile-dropdown border-0 p-0"
                         aria-labelledby="navbar-profile-dropdown">
                        <div class="ticker"></div>
                        <img  alt class="rounded-circle avatar-large"/>
                        <div class="user-name">
                            <div>Prajwal Rai</div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a
                           class="dropdown-item d-flex align-items-center p-2">
                            <i class="la la-user la-2x pr-3"></i>
                           Prajwal
                        </a>
                        <a
                           class="dropdown-item d-flex align-items-center p-2">
                            <i class="la la-sign-out la-2x pr-3"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <div class="side-nav"
                >
                <ul>
                    <li>
                        <a class="app-color-text">
                            <i class="la la-desktop la-2x"></i>

                        </a>
                    </li>

                </ul>
            </div>
            <div class="side-nav-close"

                >
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "Navbar"
    }
</script>

<style scoped>

</style>
