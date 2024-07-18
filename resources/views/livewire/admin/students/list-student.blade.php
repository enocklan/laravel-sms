<!-- list-student.blade.php -->

<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col mb-4">
                <div class="card border-0">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Students List</h3>
                        <div class="col-md-1">
                            <a href="{{ route('admin.student.add') }}" wire:navigate class="btn btn-outline-primary">
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Student ID</th>
                                    <th>Course</th>
                                    <th>Year of Study</th>
                                    <th>Department</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phoneNumber }}</td>
                                        <td>{{ $student->student_id }}</td>
                                        <td>{{ $student->course }}</td>
                                        <td>{{ $student->year_of_study }}</td>
                                        <td>{{ $student->department }}</td>
                                        <td>{{ $student->date_of_birth }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>
                                            <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-sm btn-primary">
                                                <i class="icofont-edit text-success"></i>
                                            </a>
                                            <button wire:click="delete('{{ $student->student_id }}')" onclick="return confirm('Are you sure you want to delete this student?')" class="btn btn-sm btn-danger">
                                                <i class="icofont-ui-delete text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No students found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
