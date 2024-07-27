@extends('Template.template')
@section('title', 'Teacher')
@section('subtitle', 'Task')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">


        {{-- table subject --}}
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">{{ $title }}</h6>
                    <button class="btn btn-sm btn-success" type="button" data-bs-toggle="modal"
                        data-bs-target="#modalCenter">Add Task</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Subject Name</th>
                                    <th class="text-center">Teacher</th>
                                    <th class="text-center">Lesson Hours</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Subject Name</th>
                                    <th class="text-center">Teacher</th>
                                    <th class="text-center">Lesson Hours</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($task as $item)
                                    @if ($item->teacher == Auth::user()->username || Auth::user()->role_id == 1)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center"><small class="badge rounded-pill bg-primary">
                                                    {{ $item->codeTask }}</small>
                                            <td>{{ $item->taskName }}</td>
                                            <td>{{ $item->teacher }}</td>
                                            </td>
                                            <td class="text-center">{{ $item->deadline }}</td>
                                            <td class="text-center">
                                                @if ($item->status == 'active')
                                                    <i class='bx bx-check-circle text-success' style='font-size: 24px;'></i>
                                                @else
                                                    <i class='bx bx-x-circle text-danger' style='font-size: 24px;'></i>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas"
                                                    data-bs-target="#offCanvas{{ $item->id }}"
                                                    aria-controls="offcanvasEnd"><i class='bx bx-cog text-secondary'
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        title="<i class='bx bx-cog text-success' ></i> <span>Edit</span>"
                                                        style='font-size: 30px;'></i></button>
                                                <button class="btn" type="button" data-bs-toggle="offcanvas"
                                                    data-bs-target="#topCanvas{{ $item->id }}"
                                                    aria-controls="offcanvasTop"><i class='bx bx-trash text-danger'
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true"
                                                        title="<i class='bx bx-trash text-danger' ></i> <span>Delete</span>"
                                                        style='font-size: 30px;'></i></button>
                                            </td>
                                        </tr>

                                        {{-- offcanvas --}}
                                        <div class="offcanvas offcanvas-end" tabindex="-1"
                                            id="offCanvas{{ $item->id }}" aria-labelledby="offcanvasEndLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasEndLabel" class="offcanvas-title">{{ $item->name }}
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                <form action="edit_subject/{{ $item->slug }}" method="POST">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <label class="col-12 mb-1" for="basic-icon-default-fullname">Code
                                                            Subject
                                                        </label>
                                                        <div class="col-12">
                                                            <div class="input-group input-group-merge">
                                                                <span id="basic-icon-default-fullname2"
                                                                    class="input-group-text"><i
                                                                        class="bx bx-user"></i></span>
                                                                <input type="text" class="form-control"
                                                                    name="codeSubject" id="basic-icon-default-fullname"
                                                                    placeholder="Code Subject . . ."
                                                                    value="{{ $item->codeSubject }}"
                                                                    aria-label="Code Subject"
                                                                    aria-describedby="basic-icon-default-fullname2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-12 col-form-label"
                                                            for="basic-icon-default-email">Teacher</label>
                                                        <div class="col-12">
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><i
                                                                        class="bx bx-user"></i></span>
                                                                <select id="defaultSelect" class="form-select"
                                                                    name="teacher">
                                                                    {{-- @foreach ($teacher as $t)
                                                                    @if ($t->role_id == 2 && $t->status == 'active')
                                                                        <option value="{{ $t->slug }}"
                                                                            {{ $t->slug == old($t->slug, 'yogapramana') ? 'selected' : '' }}>
                                                                            {{ $t->slug }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach --}}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-12 mb-1" for="basic-icon-default-phone">Lesson
                                                            Hours</label>
                                                        <div class="col-12">
                                                            <div class="input-group input-group-merge">
                                                                <span id="basic-icon-default-phone2"
                                                                    class="input-group-text"><i
                                                                        class="bx bx-phone"></i></span>
                                                                <input type="text" id="basic-icon-default-phone"
                                                                    class="form-control phone-mask"
                                                                    placeholder="658 799 8941"
                                                                    aria-describedby="basic-icon-default-phone2"
                                                                    name="lessonHour" value="{{ $item->lessonHour }}" />
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
                                                    id="topCanvas{{ $item->id }}"
                                                    aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 id="offcanvasTopLabel" class="offcanvas-title">
                                                            {{ $item->id }}
                                                        </h5>
                                                        <button type="button" class="btn-close text-reset"
                                                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <h5 id="offcanvasTopLabel" class="offcanvas-title">Are you
                                                            sure
                                                            you
                                                            want to delete this item ?</h5>
                                                        <div class="text-end">
                                                            <a href="{{ route('delete', ['id' => $item->id]) }}"
                                                                type="button" class="btn btn-danger me-2">Yes</a>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="offcanvas">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

    <!-- add Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="add_task" method="POST">
                    @csrf
                    <input type="text" name="subject" value="{{ $title }}" hidden>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Task Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-task"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Task name" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="taskName" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Deadline</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="bx bx-time"></i></span>
                                    <input type="datetime-local" id="deadline" class="form-control phone-mask"
                                        aria-describedby="basic-icon-default-phone2" name="deadline" min="" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i
                                            class="bx bx-comment"></i></span>
                                    <textarea id="basic-icon-default-message" class="form-control" placeholder="Descript your task"
                                        aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                        name="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Content wrapper -->

    <script>
        // Function to get current date and time in the required format for datetime-local input
        function getCurrentDateTime() {
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');

            // Combine date and time in the format "YYYY-MM-DDTHH:MM"
            const datetime = `${year}-${month}-${day}T${hours}:${minutes}`;
            return datetime;
        }

        // Set the min attribute for the datetime-local input
        document.getElementById('deadline').min = getCurrentDateTime();
    </script>
@endsection
