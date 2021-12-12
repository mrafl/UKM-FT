@extends("admins.base")

@section("header")
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-5">
            <a href="#" class="btn btn-sm btn-neutral">Add Admin</a>
        </div>
    </div>
@endsection

@section("content")
    @include("admins.users.components.table")
@endsection
