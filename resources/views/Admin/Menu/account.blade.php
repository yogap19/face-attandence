@extends('Template.template')
@section('title', 'Management')
@section('subtitle', 'Account')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="sk-chase-dot"></div>

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Account</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($account as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td class="text-center"><small
                                                class="badge rounded-pill {{ $item->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $item->status }}</small>
                                        </td>
                                        <td class="text-center">
                                            @if ($item->role_id == 1)
                                                Administrator
                                            @elseif($item->role_id == 2)
                                                Guru
                                            @else
                                                Siswa
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button class="btn" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offCanvas{{ $item->id }}"
                                                aria-controls="offcanvasEnd"><i class='bx bx-cog text-success'
                                                    title="<i class='bx bx-cog text-success' ></i> <span>Edit</span>"
                                                    style='font-size: 30px;'></i></button>
                                            <button class="btn" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#topCanvas{{ $item->id }}"
                                                aria-controls="offcanvasTop"><i class='bx bx-trash text-danger'
                                                    data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                    data-bs-html="true"
                                                    title="<i class='bx bx-trash text-danger' ></i> <span>Delete</span>"
                                                    style='font-size: 30px;'></i></button>
                                        </td>
                                    </tr>

                                    {{-- offcanvas --}}
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvas{{ $item->id }}"
                                        aria-labelledby="offcanvasEndLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasEndLabel" class="offcanvas-title">{{ $item->username }}</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                            <form action="" method="POST">
                                                @csrf


                                                <div class="row mb-3">
                                                    <label class="col-12 mb-1" for="basic-icon-default-fullname">Username
                                                    </label>
                                                    <div class="col-12">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-fullname2"
                                                                class="input-group-text"><i class="bx bx-user"></i></span>
                                                            <input type="text" class="form-control" name="username"
                                                                id="basic-icon-default-fullname" placeholder="Username"
                                                                value="{{ $item->username }}" aria-label="Username"
                                                                aria-describedby="basic-icon-default-fullname2" readonly />
                                                            <input type="text" name="id"
                                                                value="{{ $item->id }}" hidden />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12 mb-1" for="basic-icon-default-email">Email</label>
                                                    <div class="col-12">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-envelope"></i></span>
                                                            <input type="text" id="basic-icon-default-email"
                                                                class="form-control" value="{{ $item->email }}"
                                                                aria-label="{{ $item->email }}"
                                                                aria-describedby="basic-icon-default-email2" />
                                                            <span id="basic-icon-default-email2"
                                                                class="input-group-text">@example.com</span>
                                                        </div>
                                                        <div class="form-text">You can use letters, numbers & periods</div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12 mb-1" for="basic-icon-default-phone">Phone
                                                        Number</label>
                                                    <div class="col-12">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-phone2"
                                                                class="input-group-text"><i
                                                                    class="bx bx-phone"></i></span>
                                                            <input type="text" id="basic-icon-default-phone"
                                                                class="form-control phone-mask" placeholder="658 799 8941"
                                                                aria-label="658 799 8941"
                                                                aria-describedby="basic-icon-default-phone2" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-12 mb-1"
                                                        for="basic-icon-default-message">Role</label>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <select id="defaultSelect" class="form-select"
                                                                name="role_id">
                                                                <option value="1"
                                                                    {{ $item->role_id == 1 ? 'selected' : '' }}>Admin
                                                                </option>
                                                                <option value="2"
                                                                    {{ $item->role_id == 2 ? 'selected' : '' }}>Guru
                                                                </option>
                                                                <option value="3"
                                                                    {{ $item->role_id == 3 ? 'selected' : '' }}>Siswa
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-" for="basic-icon-default-message">Status</label>

                                                <div class="form-check form-switch mb-2">
                                                    <input class="form-check-input" type="checkbox" name="status"
                                                        id="inputStatus"
                                                        {{ $item->status == 'active' ? 'checked' : '' }} />
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <!-- Top Offcanvas -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mt-3">
                                            <div class="offcanvas offcanvas-top" tabindex="-1"
                                                id="topCanvas{{ $item->id }}" aria-labelledby="offcanvasTopLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasTopLabel" class="offcanvas-title">
                                                        {{ $item->username }}
                                                    </h5>
                                                    <button type="button" class="btn-close text-reset"
                                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    <h5 id="offcanvasTopLabel" class="offcanvas-title">Are you sure you
                                                        want to delete this item ?</h5>
                                                    <div class="text-end">
                                                        <a href="delete/{{ $item->id }}" type="button"
                                                            class="btn btn-danger me-2">Yes</a>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="offcanvas">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>


@endsection
