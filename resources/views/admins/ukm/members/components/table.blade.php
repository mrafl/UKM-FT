<?php $i = 0; ?>
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Anggota ukm {{ $ukm['name'] }}</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>photo</th>
                        <th>name</th>
                        <th>position</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>photo</th>
                        <th>name</th>
                        <th>position</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{ attachments($item['photo']) }}">
                                    </span>
                                </div>
                            </td>
                            <td>{{ $item['name'] }}</td>

                            @if($item["position"] == 1)
                                <td>Ketua</td>
                            @elseif($item["position"] == 2)
                                <td>Wakil Ketua</td>
                            @elseif($item["position"] == 3)
                                <td>Bendahara</td>
                            @elseif($item["position"] == 4)
                                <td>Wakil Bendahara</td>
                            @elseif($item["position"] == 5)
                                <td>Sekretaris</td>
                            @elseif($item["position"] == 6)
                                <td>Wakil Sekretaris</td>
                            @else
                                <td>Anggota</td>
                            @endif

                            <td>
                                <button class="btn btn-sm btn-warning" onclick="edit('{{ json_encode($item) }}')">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="remove({{ $item['id'] }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
