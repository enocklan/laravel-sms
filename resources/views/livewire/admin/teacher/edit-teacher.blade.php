<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Edit Teacher</h3>
                    <div class="col-md-1">
                        <a href="{{ route('admin.teacher.list') }}" wire:navigate class="btn btn-outline-primary">
                            <span class="fa fa-arrow-left"></span> Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Teacher's Information</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="updateTeacher">
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" wire:model="name" placeholder="Enter student name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" wire:model="email" placeholder="Enter student email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-xl-6">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneNumber" wire:model="phoneNumber" placeholder="Enter phone number">
                                    @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" wire:model="password" placeholder="Enter password">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-xl-6">
                                    <label for="employee_id">Employee ID</label>
                                    <input type="text" class="form-control" id="employee_id" wire:model="employee_id" placeholder="Enter student ID">
                                    @error('employee_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="department">Department</label>
                                    <input type="text" class="form-control" id="department" wire:model="department" placeholder="Enter department">
                                    @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-xl-6">
                                    <label for="date_of_employment" class="form-label">Date of Employment</label>
                                    <input type="date" class="form-control" id="date_of_employment" wire:model="date_of_employment">
                                    @error('date_of_employment') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" wire:model="address" placeholder="Enter address">
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <!-- Profile Picture Input -->
                                <div class="form-group col-xl-6">
                                    <label for="profile_picture" class="form-label">Profile Picture</label>
                                    <input type="file" class="form-control" id="profile_picture" wire:model="profile_picture">
                                    @error('profile_picture') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 float-end">Update Teacher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
