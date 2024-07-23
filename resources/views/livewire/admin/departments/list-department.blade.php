<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Departments</h3>
                    <div class="col-md-1">
                        <a href="{{ route('admin.department.add') }}" wire:navigate class="btn btn-outline-primary">
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
                        <h6 class="mb-0 fw-bold">List of Departments</h6>
                        <div class="col-md-1">
                            <a href="#" wire:navigate class="btn btn-outline-primary">
                                <span class="fa fa-download"> Download</span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Name</th>
                                <th>HOD</th>
                                <th>Year Started</th>
                                <th>Student Count</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($count = 1)
                            @forelse($departments as $department)
                                <tr>
                                    <th scope="row">{{ $count++ }}</th>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->HOD }}</td>
                                    <td>{{ $department->year_started }}</td>
                                    <td>{{ $department->student_count }}</td>
                                    <td>
                                        <a href="{{ route('admin.department.edit', $department->id) }}" class="btn btn-sm btn-primary">
                                            <i class="icofont-edit text-success"></i>
                                        </a>
                                        <button wire:click="delete('{{ $department->id }}')" class="btn btn-sm btn-danger">
                                            <i class="icofont-ui-delete text-danger"></i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No Department found</td>
                                    </tr>
                            @endforelse
                            </tbody>
                        </table>

                        {{ $departments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
