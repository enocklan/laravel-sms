<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Add Department</h3>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Information</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="submit" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Department Name</label>
                                    <input type="text" class="form-control" id="name" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="hod" class="form-label">Head of Department</label>
                                    <input type="text" class="form-control" id="hod" wire:model="HOD">
                                    @error('HOD') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="year_started" class="form-label">Year Started</label>
                                    <input type="date" class="form-control" id="year_started" wire:model="year_started">
                                    @error('year_started') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="student_count" class="form-label">Student Count</label>
                                    <input type="number" class="form-control" id="student_count" wire:model="student_count" min="0">
                                    @error('student_count') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="file" class="form-label">Upload File (Optional)</label>
                                    <input type="file" class="form-control" id="file" wire:model="file">
                                    @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mt-3">Add Department</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
