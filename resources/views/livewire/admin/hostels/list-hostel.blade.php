<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Hostels</h3>
                    <div class="col-md-1">
                        <a href="{{ route('admin.hostel.add') }}" class="btn btn-outline-primary">
                            <span class="fa fa-plus-square"></span> Add
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Hostel List</h6>
                        <div class="col-md-1">
                            <a href="#" wire:click="generatePdf" class="btn btn-outline-primary">
                                <span class="fa fa-download"></span> Download
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Name</th>
                                    <th>Room Master</th>
                                    <th>Block</th>
                                    <th>Room Type</th>
                                    <th>Room Number</th>
                                    <th>Number of Beds</th>
                                    <th>Number of Bathrooms</th>
                                    <th>Availability</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($count = 1)
                                @forelse($hostels as $hostel)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{{ $hostel->name }}</td>
                                        <td>{{ $hostel->room_master }}</td>
                                        <td>{{ $hostel->block }}</td>
                                        <td>
                                            @if ($hostel->room_type == 'normal')
                                                Normal
                                            @elseif ($hostel->room_type == 'ac')
                                                AC
                                            @elseif ($hostel->room_type == 'suite')
                                                Suite
                                            @else
                                                Unknown
                                            @endif
                                        </td>
                                        <td>{{ $hostel->room_number }}</td>
                                        <td>{{ $hostel->number_of_bed }}</td>
                                        <td>{{ $hostel->number_of_bath }}</td>
                                        <td>{{ $hostel->availability ? 'Available' : 'Not Available' }}</td>
                                        <td>
                                            <a href="{{ route('admin.hostel.edit', $hostel->id) }}" class="btn btn-sm btn-primary">
                                                <i class="icofont-edit text-success"></i>
                                            </a>

                                            <button wire:click="delete('{{ $hostel->id }}')" class="btn btn-sm btn-danger">
                                                <i class="icofont-ui-delete text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No hostels found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $hostels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
