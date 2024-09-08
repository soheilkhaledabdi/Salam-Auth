@extends("admin.layouts.master")
@section("title", "Salam Admin")

@section("content")
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">کاربران</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th>ایدی</th>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>نقش</th>
                                    <th>ایجاد شده در</th>
                                    <th>اپدیت شده در</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user["id"] }}</td>
                                        <td>{{ $user["name"] }}</td>
                                        <td>{{ $user["email"] }}</td>
                                        <td>@if($user["role_id"] === 1) ادمین @else کاربر @endif</td>
                                        <td>{{ $user["created_at"] }}</td>
                                        <td>{{ $user["updated_at"] }}</td>
                                        <td class="text-end">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">عملیات</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">حذف</a>
                                                <a class="dropdown-item" href="#">ادیت</a>
                                            </div>
                                        </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")

@endsection