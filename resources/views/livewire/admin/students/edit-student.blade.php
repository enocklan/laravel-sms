<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Edit Students</h3>

                    <div class="col-md-1">
                        <a href="{{ route('admin.student.list') }}" wire:navigate class="btn btn-outline-primary">
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
                        <h6 class="mb-0 fw-bold">Student Information</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="updateStudent">
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
                                    <label for="student_id">Student ID</label>
                                    <input type="text" class="form-control" id="student_id" wire:model="student_id" placeholder="Enter student ID">
                                    @error('student_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="course">Course</label>
                                    <input type="text" class="form-control" id="course" wire:model="course" placeholder="Enter course">
                                    @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-xl-6">
                                    <label for="year_of_study">Year of Study</label>
                                    <input type="number" class="form-control" id="year_of_study" wire:model="year_of_study" placeholder="Enter year of study">
                                    @error('year_of_study') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="department">Department</label>
                                    <input type="text" class="form-control" id="department" wire:model="department" placeholder="Enter department">
                                    @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-xl-6">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" wire:model="date_of_birth">
                                    @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" wire:model="address" placeholder="Enter address">
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 float-end">Update Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
