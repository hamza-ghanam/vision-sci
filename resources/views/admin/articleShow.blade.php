@extends('layouts.admin')

@section('title')
    Article Details
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ URL::to('/admin/articles/index') }}">Articles</a></li>
    <li class="breadcrumb-item">Article Details</li>
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
        <div class="alert alert-dismissible alert-success">
            {{ session()->get('successMsg') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>{{ $article->title }}</h4>
                            <table class="table">
                                <tr>
                                    <th style="width: 30%;">Title</th>
                                    <td>{{ $article->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Type</th>
                                    <td>{{ $article->type }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Classification</th>
                                    <td>{{ $article->classification->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Language</th>
                                    <td>{{ $article->language }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Abstract</th>
                                    <td>
                                        <p style="text-align: justify">
                                            {{ $article->abstract }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Keywords</th>
                                    <td>{{ $article->keywords }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Submitted User</th>
                                    <td>{{ $article->submitter }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Submitted at</th>
                                    <td>{{ $article->created_at }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">File</th>
                                    <td>
                                        <a href="{{ route('profile.download', ['id' => $article->id]) }}">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Publish date</th>
                                    <td>{{ $article->publish_date !== null ? $article->publish_date : '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%;">Status</th>
                                    <td>
                                        @php
                                            $badge = $article->status === 'New' ? 'info' : ($article->status === 'Under Review' ? 'warning' : ($article->status === 'Resubmit' ? 'secondary' : ($article->status === 'Accepted' ? 'success' : 'danger')));
                                        @endphp
                                        <span class="badge bg-{{ $badge }} mb-3">
                                            {{$article->status}}
                                        </span>
                                        <form name="f1" method="POST" enctype="multipart/form-data"
                                              action="{{ route('admin.articles.update', ['id' => $article->id]) }}">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label for="new-status" class="form-label">Change status:</label>
                                                <select type="text" class="form-select mr-3 ml-2" id="new-status"
                                                        name="newStatus">
                                                    <option
                                                        value="New" {{ $article->status === 'New' ? 'selected' : '' }}>
                                                        New
                                                    </option>
                                                    <option
                                                        value="Under Review" {{ $article->status === 'Under Review' ? 'selected' : '' }}>
                                                        Under Review
                                                    </option>
                                                    <option
                                                        value="Resubmit" {{ $article->status === 'Resubmit' ? 'selected' : '' }}>
                                                        Resubmit
                                                    </option>
                                                    <option
                                                        value="Accepted" {{ $article->status === 'Accepted' ? 'selected' : '' }}>
                                                        Accepted
                                                    </option>
                                                    <option
                                                        value="Rejected" {{ $article->status === 'Rejected' ? 'selected' : '' }}>
                                                        Rejected
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="correction-file" class="form-label">Correction file:</label>
                                                <input class="form-control" type="file" id="articleFile"
                                                       name="articleFile" style="width: 50%;">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary mb-2">OK</button>
                                        </form>

                                    </td>
                                </tr>
                            </table>

                            @if (count($article->reviews) > 0)
                                <h3>Reviews</h3>
                                <img width="100" class="mr-3" alt="rating"
                                     src="{{ asset('../plugins/images/Global/rating'. $article->avgRate . '.png') }}">
                                <b>({{ count($article->reviews) }} reviews)</b>
                            <div class="mb-4"></div>
                                @foreach($article->reviews as $review)
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title mr-5">{{ $review->user->name }}</h3>
                                            <h6 class="card-subtitle mb-2 text-muted float-right">
                                                Reviewed: {{ $review->created_at }}</h6>
                                            <br/>
                                            <img width="100" alt="rating" class="mb-3"
                                                 src="{{ asset('../plugins/images/Global/rating'. $review->rate . '.png') }}"/>
                                            <p class="card-text mt-2">{{ $review->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        @endsection

        @section('script')

            <!-- PAGE SCRIPTS -->
            <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
            <!-- Select2 -->
            <script src="{{ asset('adminplugins/select2/js/select2.full.min.js') }}"></script>

            <script>
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
