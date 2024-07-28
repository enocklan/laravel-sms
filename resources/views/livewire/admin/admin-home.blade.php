<div>
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="card mb-0" style="background-color: rgba(171,171,171,0.43);">
                        <div class="d-flex align-items-center p-3">
                            <div class="avatar rounded no-thumbnail bg-black text-light">
                                <i class="icofont-student-alt fs-3"></i>
                            </div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0"><b>Students</b></div>
                                <span class="small">{{ $studentCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-0" style="background-color: rgba(171,171,171,0.43);">
                        <div class="d-flex align-items-center p-3">
                            <div class="avatar rounded no-thumbnail bg-black text-white">
                                <i class="icofont-teacher fs-3 "></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0"><b>Teachers</b></div>
                                <span class="small">{{ $teacherCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-0" style="background-color: rgba(171,171,171,0.43);">
                        <div class="d-flex align-items-center p-3">
                            <div class="avatar rounded no-thumbnail bg-black text-white">
                                <i class="fa fa-shield fa-lg"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0"><b>Admins</b></div>
                                <span class="small">{{$adminCount}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-0" style="background-color: rgba(171,171,171,0.43);">
                        <div class="d-flex align-items-center p-3">
                            <div class="avatar rounded no-thumbnail bg-black text-white">
                                <i class="icofont-layers fs-3 color-black"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0"><b>Departments</b></div>
                                <span class="small">{{$departmentCount}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row end  -->

            <div class="row g-3">
                <div class="col-lg-12 col-md-12">
                    <div class="tab-filter d-flex align-items-center justify-content-between mb-3 flex-wrap">
                        <ul class="nav nav-tabs tab-card tab-body-header rounded  d-inline-flex w-sm-100">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#summery-today" >Today</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" >Week</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" >Month</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" >Year</a></li>
                        </ul>
                        <div class="date-filter d-flex align-items-center mt-2 mt-sm-0 w-sm-100">
                            <div class="input-group">
                                <input type="date" class="form-control">
                                <button class="btn btn-primary" type="button"><i class="icofont-filter fs-5"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content mt-1">
                        <div class="tab-pane fade show active" id="summery-today">
                            <div class="row g-1 g-sm-3 mb-3 row-deck">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="left-info">
                                                <span class="text-muted">Students</span>
                                                <div><span class="fs-6 fw-bold me-2">{{ $studentCount }}</span></div>
                                            </div>
                                            <div class="right-icon">
                                                <i class="icofont-student-alt fs-3 color-light-black"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="left-info">
                                                <span class="text-muted">Teachers</span>
                                                <div><span class="fs-6 fw-bold me-2">{{ $teacherCount }}</span></div>
                                            </div>
                                            <div class="right-icon">
                                                <i class="icofont-teacher fs-3 color-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="left-info">
                                                <span class="text-muted">Departments</span>
                                                <div><span class="fs-6 fw-bold me-2">{{$departmentCount}}</span></div>
                                            </div>
                                            <div class="right-icon">
                                                <i class="icofont-layers fs-3 color-santa-fe"></i>
{{--                                                <i class="fas fa-layer-group"></i>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="left-info">
                                                <span class="text-muted"><b>Hostels</b></span>
                                                <div><span class="fs-6 fw-bold me-2">{{$hostelCount}}</span></div>
                                            </div>
                                            <div class="right-icon">
                                                <i class="icofont-ui-home fs-3 color-light-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="left-info">
                                                <span class="text-muted">Roles</span>
                                                <div><span class="fs-6 fw-bold me-2">$35000</span></div>
                                            </div>
                                            <div class="right-icon">
                                                <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="left-info">
                                                <span class="text-muted">Courses</span>
                                                <div><span class="fs-6 fw-bold me-2">11452</span></div>
                                            </div>
                                            <div class="right-icon">
                                                <i class="icofont-users-social fs-3 color-light-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- row end -->
                        </div>
                    </div>
                </div>
            </div><!-- Row end  -->

            <div class="row g-3 mb-3">
                <div class="col-xxl-8 col-xl-8">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Shopping Status</h6>
                        </div>
                        <div class="card-body">
                            <div class="ac-line-transparent" id="apex-shoppingstatus"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Active Users Status</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-4 active-user bg-lightblue rounded-2 mb-2">
                                <span class="fw-bold d-flex justify-content-center fs-3">{{$studentCount + $teacherCount + $adminCount}}</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Active pages</th>
                                        <th scope="col">Users</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">/dist/product.html</a></td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">/dist/product-cart.html</a></td>
                                        <td>455</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">/dist/admin-profile.html</a></td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">/dist/order-history.html</a></td>
                                        <td>545</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">/dist/product-detail.html</a></td>
                                        <td>55</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row end  -->
        </div>
    </div>
</div>
