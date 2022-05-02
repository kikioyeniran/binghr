@extends('layouts.app')

@section('content')
    <div class="flex-row d-flex justify-content-end mb-4">
        <div class="col-lg-4 d-flex justify-content-end">
            <button class="btn btn-lg btn-success modal-btn" data-toggle="modal" data-target="#createUserModal">Add User</button>
        </div>
    </div>

    <div class="row my-4">
        <div class="card-body">
            <h5>List Users</h5>
            <!--begin: Datatable-->
            <table id="example" class="table table-hover" style="width:100%">
                <thead class="pt-3 pb-3">
                    <tr>
                        <th>Name</th>
                        <th>Permissions</th>
                        <th>Create Date</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0">
                                    <img src="{{ asset('images/person.jpg') }}" alt="photo" class="tb-img">
                                </div>

                                <div class="ml-3">
                                    <span class="text-dark-75 font-weight-bold line-height-sm d-block user-name">{{ $user->full_name }}</span>
                                    <a href="#" class="text-muted text-hover-primary user-email text-muted">{{ $user->email }}</a>
                                </div>
                            </div>
                        </td>
                        <td><button class="btn btn-danger btn-sm">Super Admin</button></td>
                        <td>{{ \Carbon\Carbon::parse($user->created_at)->toFormattedDateString() }}</td>
                        <td>HR</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink">
                                    <a href="#" class="action-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="ml-4 symbol symbol-50 flex-shrink">
                                    <a href="#" class="action-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                          </svg>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>

    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="createUserModalLabel">Add User</h5>
                      <a href="#" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                            <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                          </svg>
                        </a>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="recipient-name" class="col-form-label">Employee ID*</label>
                                    <input type="text" class="form-control custom-control" name="employee_id" id="recipient-name" placeholder="Employee ID *">
                                  </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="recipient-name" class="col-form-label">Select Profile Picture</label>
                                    <input type="file" class="form-control custom-control" name="picture" id="recipient-name" placeholder="Profile Picture *">
                                  </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <input type="text" name="first_name" placeholder="First Name *" id="" class="form-control custom-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <input type="text" name="last_name" placeholder="Last Name *" id="" class="form-control custom-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <input type="email" name="email" placeholder="Email ID *" id="" class="form-control custom-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <input type="tel" name="phone" placeholder="Mobile No *" id="" class="form-control custom-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <select name="role" id="" class="form-select custom-control" required>
                                        <option value="">Select Role Type</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <input type="text" name="username" placeholder="Username *" id="" class="form-control custom-control" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <input type="password" name="password" placeholder="Password *" id="" class="form-control custom-control" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password *" id="" class="form-control custom-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-header">
                        <div class="row p-4 justify-content-between">
                            <div class="col-lg-5">
                                <h6 class="permission-header">Module Permission</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="permission-header">Read</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="permission-header">Write</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="permission-header">Delete</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row p-4 justify-content-between">
                            <input type="hidden" name="permission">
                            @foreach ($permissions as $permission)
                                <div class="col-lg-5">
                                    <h6 class="mb-4 permission-header">{{ $permission->name }}</h6>
                                </div>
                                <div class="col-lg-2">
                                    <h6 class="mb-4 permission-header ">
                                        <input class="form-check-input type{{ $permission->id }}" type="checkbox" value="{{ $permission->id }}" id="flexCheckChecked" {{ $permission->read == true ? 'checked' : '' }}>
                                    </h6>
                                </div>
                                <div class="col-lg-2">
                                    <h6 class="mb-4 permission-header">
                                        <input class="form-check-input type{{ $permission->id }}" type="checkbox" value="{{ $permission->id }}" id="flexCheckChecked" {{ $permission->write == true ? 'checked' : '' }}>
                                    </h6>
                                </div>
                                <div class="col-lg-2">
                                    <h6 class="mb-4 permission-header">
                                        <input class="form-check-input type{{ $permission->id }}" type="checkbox" value="{{ $permission->id }}" id="flexCheckChecked" {{ $permission->delete == true ? 'checked' : '' }}>
                                    </h6>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary mr-3">Add User</button>
                        <a href="#" class="modal-close" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('page_scripts')
    <script>
        // $(document).ready(function() {
        //     $('#example').DataTable( {
        //         "columnDefs": [
        //             {
        //                 // The `data` parameter refers to the data for the cell (defined by the
        //                 // `data` option, which defaults to the column being worked with, in
        //                 // this case `data: 0`.
        //                 "render": function ( data, type, row ) {
        //                     return data +' ('+ row[3]+')';
        //                 },
        //                 "targets": 0
        //             },
        //             { "visible": false,  "targets": [ 3 ] }
        //         ]
        //     } );
        // } );
        $(document).ready(function() {
            $('#example').DataTable();
        } );

        // var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
        // myModal.show();
    </script>
@endsection