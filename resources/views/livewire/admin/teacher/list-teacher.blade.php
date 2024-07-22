<!-- list-student.blade.php -->
<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col mb-4">
                <div class="card border-0">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Students List</h3>
                        <div class="col-md-1">
                            <a href="{{ route('admin.teacher.add') }}" wire:navigate class="btn btn-outline-primary">
                                <span class="fa fa-plus-square"></span> Add
                            </a>
                        </div>
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
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Employee Id</th>
                                    <th>Phone Number</th>
                                    <th>Department</th>
                                    <th>Date of Employment</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($count = 1)
                                @forelse($teachers as $teacher)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->employee_id }}</td>
                                        <td>{{ $teacher->phoneNumber }}</td>
                                        <td>{{ $teacher->department }}</td>
                                        <td>{{ $teacher->date_of_employment }}</td>
                                        <td>{{ $teacher->address }}</td>
                                        <td>
                                            <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-sm btn-primary">
                                                <i class="icofont-edit text-success"></i>
                                            </a>
                                            <button wire:click="delete('{{ $teacher->employee_id }}')" class="btn btn-sm btn-danger">
                                                <i class="icofont-ui-delete text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No Teachers found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
{{--                        {{ $teachers->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
