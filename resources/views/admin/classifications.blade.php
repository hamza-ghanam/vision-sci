@extends('layouts.admin')

@section('title')
    Classifications list
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="breadcrumb-item">Classifications list</li>
@endsection

@section('content')
    <!-- Info boxes -->
    <div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    </div>
    <!-- /.row -->

    @if ($errors->any())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if(session()->has('successMsg'))
        <div class="alert" style="background-color: #6ad373; border-radius: 4px; padding: 5px;">
            {{ session()->get('successMsg') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                            data-target="#exampleModalCenter">
                        Add new classification
                    </button>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($classifications as $key => $classification)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $classification['title'] }}</td>
                                <td>
                                    @php
                                        $badge = $classification->deleted_at === null ? 'success' : 'danger';
                                    @endphp
                                    <span class="badge bg-{{ $badge }}">
                                        {{ $classification->deleted_at === null ? 'Available' : 'Deleted' }}
                                    </span>
                                </td>
                                <td>{{ $classification['updated_at'] }}</td>
                                <td>
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item dropdown" style="line-height: 1;">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                                Actions <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" tabindex="-1"
                                                   href="#"
                                                   onclick="editClass({{ $classification->id }}, '{{ $classification->title }}')">
                                                    <i class="fas fa-edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>

                                                @if($classification->deleted_at === null)
                                                <a class="dropdown-item text-danger" tabindex="-1"
                                                   href="#" onclick="deleteClass({{$classification->id}})"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                                @else
                                                    <a class="dropdown-item text-success" tabindex="-1"
                                                       href="#" onclick="restoreClass({{$classification->id}})">
                                                        <i class="fas fa-trash-restore"></i> Restore</a>
                                                @endif

                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add a new classification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="" method="POST" action="{{ route('admin.classifications.store') }}">
                    @csrf
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Enter title"
                                           name="title">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit a classification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="" method="POST"
                      action="{{ route('admin.classifications.update', ['id' => $classification->id]) }}">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title-edit" placeholder="Enter title"
                                           name="title">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <!-- PAGE SCRIPTS -->
    <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminplugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        function editClass(id, value) {
            $('#exampleModalCenter2').modal('show');
            document.getElementById("title-edit").value = value;
        }

        var modal = document.getElementById("modal-lg");

        document.querySelector('button').addEventListener("click", function (e) {
            modal.classList.remove("hidden");
        });

        async function deleteClass(id) {
            if (confirm('Are you sure?')) {
                const token = '{{ csrf_token() }}';
                try {
                    let response = await fetch('/admin/classifications/delete/' + id, {
                        method: 'DELETE',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-Token': token,
                        },
                    });

                    response = await response.json();

                    if (response.error) {
                        alert(response.error);
                        console.log(response);
                    } else if (response.OK) {
                        location.reload();
                    }
                } catch (e) {
                    console.log(e);
                }
            }
        }

        async function restoreClass(id) {
            if (confirm('Are you sure?')) {
                const token = '{{ csrf_token() }}';
                try {
                    let response = await fetch('/admin/classifications/restore/' + id, {
                        method: 'PUT',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-Token': token,
                        },
                    });

                    response = await response.json();

                    if (response.error) {
                        alert(response.error);
                        console.log(response);
                    } else if (response.OK) {
                        location.reload();
                    }
                } catch (e) {
                    console.log(e);
                }
            }
        }

        function getParams(url, formId) {
            console.log(formId);
            const form = document.getElementById(formId);
            const formData = new FormData(form);

            let i = 0;
            for (var pair of formData.entries()) {
                if (pair[0] === '_token') {
                    continue;
                }

                if (pair[1] !== '') {
                    if (i == 0) {
                        url += '?' + pair[0] + '=' + pair[1];
                    } else {
                        url += '&' + pair[0] + '=' + pair[1];
                    }
                    i++;
                }
            }

            return url;
        }

        $(function () {
            $("#ok-id").on('click', () => {
                const url = getParams('/tickets/all/', 'form-id');
                location.href = url;
            });

            $("#ok-filter").on('click', () => {
                const url = getParams('/tickets/all/', 'filter-form');
                location.href = url;
            });

            $("#flip").click(function () {
                $("#filter-form").slideToggle("slow");
                const element = document.getElementById('angle1');
                const style = element.getAttribute('class');
                const attr = style === 'fas fa-angle-down' ? 'fas fa-angle-up' : 'fas fa-angle-down';
                element.setAttribute('class', attr);
            });

            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 15,
                "order": [
                    [0, "desc"]
                ]
            });
        });

        async function deleteTicket(id) {
            if (confirm('Are you sure?')) {
                const token = '{{ csrf_token() }}';
                try {
                    let response = await fetch('/tickets/delete/' + id, {
                        method: 'DELETE',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-Token': token,
                        },
                    });

                    response = await response.json();

                    if (response.error) {
                        alert(response.error);
                        console.log(response);
                    } else if (response.OK) {
                        location.reload();
                    }
                } catch (e) {
                    console.log(e);
                }
            }
        }
    </script>
@endsection
