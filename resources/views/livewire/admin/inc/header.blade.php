<!-- Body: Header -->
<div class="header">
    <nav class="navbar py-4">
        <div class="container-xxl">

            <!-- header rightbar icon -->
            <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                <div class="d-flex">
                    <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                        <i class="icofont-info-square fs-5"></i>
                    </a>
                </div>
                <div class="dropdown zindex-popover">
                    <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="/assets/images/flag/GB.png" alt="">
                    </a>
                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                        <div class="card border-0">
                            <ul class="list-unstyled py-2 px-3">
                                <li>
                                    <a href="#" class=""><img src="/assets/images/flag/GB.png" alt=""> English</a>
                                </li>
                                <li>
                                    <a href="#" class=""><img src="/assets/images/flag/DE.png" alt=""> German</a>
                                </li>
                                <li>
                                    <a href="#" class=""><img src="/assets/images/flag/FR.png" alt=""> French</a>
                                </li>
                                <li>
                                    <a href="#" class=""><img src="/assets/images/flag/IT.png" alt=""> Italian</a>
                                </li>
                                <li>
                                    <a href="#" class=""><img src="/assets/images/flag/RU.png" alt=""> Russian</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dropdown notifications">
                    <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="icofont-alarm fs-5"></i>
                        <span class="pulse-ring"></span>
                    </a>
                    <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                        <div class="card border-0 w380">
                            <div class="card-header border-0 p-3">
                                <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                    <span>Notifications</span>
                                    <span class="badge text-white">06</span>
                                </h5>
                            </div>
                            <div class="tab-content card-body">
                                <div class="tab-pane fade show active">
                                    <ul class="list-unstyled list mb-0">
                                        <li class="py-2 mb-1 border-bottom">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.svg" alt="">
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                    <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-2 mb-1 border-bottom">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                    <span class="">Invoice generator </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-2 mb-1 border-bottom">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.svg" alt="">
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                    <span class="">Orader  Return RT-00004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-2 mb-1 border-bottom">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar5.svg" alt="">
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                    <span class="">Product Order to Toyseller</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-2 mb-1 border-bottom">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar6.svg" alt="">
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                    <span class="">Leave Apply</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-2">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar7.svg" alt="">
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                    <span class="">Product Stoke Entry Updated</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                    <div class="u-info me-2">
                        <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{$admin->name}}</span></p>
                        <small>Admin</small>
                    </div>
                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                        <img class="avatar lg rounded-circle img-thumbnail" src="{{asset('assets/images/profile_av.svg')}}" alt="profile">
                    </a>
                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                        <div class="card border-0 w280">
                            <div class="card-body pb-0">
                                <div class="d-flex py-1">
                                    <img class="avatar rounded-circle" src="{{asset('assets/images/profile_av.svg')}}" alt="profile">
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0"><span class="font-weight-bold">{{$admin->name}}</span></p>
                                        <small class="">{{$admin->email}}</small>
                                    </div>
                                </div>
                                <div><hr class="dropdown-divider border-dark"></div>
                            </div>
                            <div class="list-group m-2 ">
                                <a href="admin-profile.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu toggler -->
            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                <span class="fa fa-bars"></span>
            </button>
            <!-- main menu Search-->
            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                <div class="input-group flex-nowrap input-group-lg">
                    <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                    <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>
