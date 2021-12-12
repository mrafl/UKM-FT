@extends("admins.base")

@section("header")
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-5">
            <button onclick="add()" class="btn btn-sm btn-neutral">Add Admin</button>
        </div>
    </div>
@endsection

@section("content")
    @include("admins.users.components.table")
    @include("admins.users.components.modal")
@endsection

@section("script")
    <script>
        function add() {
            const modal = $("#modal");
            const form = $("#modal-form");
            const title = $("#modal-title");

            form.trigger('reset');
            title.html("Tambah Admin")
            form.attr("action", "{{ route('admin.users.store') }}")

            $("#photo").attr("required", true)
            $("#password").attr("required", true)

            $("label[for=photo]").html('Logo<sup class="text-danger">*</sup>')
            $("label[for=password]").html('Password<sup class="text-danger">*</sup>')

            modal.modal('show');
        }

        function edit(data) {
            data = JSON.parse(data.replaceAll("\r", ""))

            const modal = $("#modal");
            const form = $("#modal-form");
            const title = $("#modal-title");

            form.trigger('reset');
            title.html("Edit Admin")
            form.attr("action", "{{ route('admin.users.store') }}/" + data.id + "/edit")

            $("#name").val(data.name)
            $("#email").val(data.email)

            $("#photo").attr("required", false)
            $("#password").attr("required", false)

            $("label[for=photo]").html('Logo')
            $("label[for=password]").html('Password')

            modal.modal('show');
        }

        function remove(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonClass: 'btn btn-secondary'
            }).then((result) => {
                if (result.value) window.location.href = "{{ route('admin.users.store') }}/" + id + "/delete"
            });
        }
    </script>
@endsection
