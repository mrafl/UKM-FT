@extends("admins.base")

@section("header")
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-5">
            <button class="btn btn-sm btn-neutral" onclick="add()">Tambah {{ $title }}</button>
        </div>
    </div>
@endsection

@section("content")
    @include("admins.ukm.components.table")
    @include("admins.ukm.components.modal")
@endsection

@section("script")
    <script>
        function add() {
            const modal = $("#ukm-modal");
            const form = $("#modal-form");
            const title = $("#modal-title");
            const ukmType = $("#ukm-type");

            form.trigger('reset');
            title.html("Tambah {{ $title }}")
            ukmType.attr("value", {{ $type }});
            form.attr("action", "{{ route('admin.ukm.store') }}")

            $("#logo").attr("required", false)
            $("label[for=logo]").html('Logo<sup class="text-danger">*</sup>')

            modal.modal('show');
        }

        function edit(data) {
            data = JSON.parse(data.replaceAll("\r", ""))

            const modal = $("#ukm-modal");
            const form = $("#modal-form");
            const title = $("#modal-title");
            const ukmType = $("#ukm-type");

            form.trigger('reset');
            title.html("Edit {{ $title }}")
            ukmType.attr("value", );
            form.attr("action", "{{ route('admin.ukm.store') }}/" + data.id + "/edit")

            $("#name").val(data.name)
            $("#slug").val(data.slug)
            $("#description").html(data.description)
            $("#visi").html(data.visi)
            $("#misi").html(data.misi)

            $("#logo").attr("required", false)
            $("label[for=logo]").html('Logo')

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
                if (result.value) window.location.href = "{{ route('admin.ukm.store') }}/" + id + "/delete"
            });
        }
    </script>
@endsection
