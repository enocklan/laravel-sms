<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Edit Hostel</h3>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Hostel Information</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="update" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" wire:model="name" placeholder="Enter Room name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="room_master" class="form-label">Room Master</label>
                                    <input type="text" class="form-control" id="room_master" wire:model="room_master" required>
                                    @error('room_master') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="block" class="form-label">Block</label>
                                    <input type="text" class="form-control" id="block" wire:model="block" required>
                                    @error('block') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="room_type" class="form-label">Room Type</label>
                                    <select class="form-control" id="room_type" wire:model="room_type" required>
                                        <option value="0">Select.....</option>
                                        <option value="normal">Normal</option>
                                        <option value="ac">AC</option>
                                        <option value="suite">Suite</option>
                                    </select>
                                    @error('room_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="room_number" class="form-label">Room Number</label>
                                    <input type="number" class="form-control" id="room_number" wire:model="room_number" required>
                                    @error('room_number') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="number_of_bed" class="form-label">Number of Beds</label>
                                    <input type="number" class="form-control" id="number_of_bed" wire:model="number_of_bed" required>
                                    @error('number_of_bed') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="number_of_bath" class="form-label">Number of Bathrooms</label>
                                    <input type="number" class="form-control" id="number_of_bath" wire:model="number_of_bath" required>
                                    @error('number_of_bath') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="availability" class="form-label">Availability</label>
                                    <select class="form-control" id="availability" wire:model="availability" required>
                                        <option value="1">Available</option>
                                        <option value="0">Not Available</option>
                                    </select>
                                    @error('availability') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mt-3">Update Hostel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
