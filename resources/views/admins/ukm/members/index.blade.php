@extends("admins.base")

@section("header")
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-5">
            <a href="{{ route("admin.ukm", ['slug' => $ukm['type'] == TAB_ORMAWA ? 'ormawa' : 'opmawa']) }}">
                <button class="btn btn-sm btn-neutral">
                    <i class="fas fa-chevron-left"></i> Back
                </button>
            </a>
            <button onclick="add()" class="btn btn-sm btn-neutral">Tambah Member</button>
        </div>
    </div>
@endsection

@section("content")
    @include("admins.ukm.members.components.table")
    @include("admins.ukm.members.components.modal")
@endsection

@section("script")
    <script>
        function add() {
            const modal = $("#modal");
            const form = $("#modal-form");
            const title = $("#modal-title");

            form.trigger('reset');
            title.html("Tambah Anggota")
            form.attr("action", "{{ route('admin.ukm.member.store', ["id" => $ukm['id']]) }}")

            $("#photo").attr("required", true)
            $("label[for=photo]").html('Photo<sup class="text-danger">*</sup>')

            modal.modal('show');
        }

        function edit(data) {
            data = JSON.parse(data.replaceAll("\r", ""))

            const modal = $("#modal");
            const form = $("#modal-form");
            const title = $("#modal-title");

            form.trigger('reset');
            title.html("Edit Anggota")
            form.attr("action", "{{ route('admin.ukm.store') }}/member/" + data.id + "/edit")

            $("#name").val(data.name)
            $("#email").val(data.email)

            $("#photo").attr("required", false)
            $("label[for=photo]").html('Photo')

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
                if (result.value) window.location.href = "{{ route('admin.ukm.store') }}/member/" + id + "/delete"
            });
        }
    </script>
@endsection
