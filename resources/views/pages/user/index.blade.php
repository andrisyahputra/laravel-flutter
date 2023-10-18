@extends('layouts.app')

@section('title', 'Posts')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User Management</h1>

            </div>
            <div class="section-body">
                <h2 class="section-title">All User</h2>
                <p class="section-lead">
                    You can manage all user, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            @if (isset($_GET['search']))
                                <div class="card-header">
                                    <h4>Mencari <b><u>{{ $_GET['search'] }}</u></b></h4>
                                    <div class="col-md-auto">

                                        <a href="{{ route('user.index') }}" class="btn btn-primary"><i
                                                class="fas fa-redo-alt"></i></a>
                                    </div>
                                </div>
                            @else
                                <div class="card-header">
                                    <h4>All users</h4>
                                </div>
                            @endif
                            <div class="card-body">



                                <div class="float-right">
                                    <form method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No HP</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                {{-- <td>Laravel 5 Tutorial: Introduction
                                                <div class="table-links">
                                                    <a href="#">View</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="text-danger">Trash</a>
                                                </div>
                                            </td> --}}
                                                <td>
                                                    {{ $loop->iteration + $users->perPage() * ($users->currentPage() - 1) }}
                                                </td>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->phone }}
                                                </td>
                                                <td>
                                                    @if ($user->email_verified_at != null)
                                                        <div class="badge badge-primary">Aktive</div>
                                                    @else
                                                        <div class="badge badge-warning">Pending</div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            {{ $users->withQueryString()->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
