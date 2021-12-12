@extends('/layouts.main')
@section('container')

    <div class="card">
        <div class="card-header pb-2">
            <h2 class="text-uppercase font-weight-900">
                Daftar Unit Kegiatan Mahasiswa di Fakultas Teknik UNJ
            </h2>
        </div>
        <div class="card-body">
            <h2>{{ $subTitle }}</h2>
            <div class="row">
                @foreach($data as $item)
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <a href="#" class="avatar avatar-xl rounded-circle bg-transparent">
                                            <img alt="Image placeholder"
                                                 src="{{ attachments($item['logo']) }}">
                                        </a>
                                    </div>
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!">{{ $item['name'] }}</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">Lembaga Eksekutif Mahasiswa</p>
                                        <span class="text-success">●</span>
                                        <small>Active</small>
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-lg btn-primary">Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
