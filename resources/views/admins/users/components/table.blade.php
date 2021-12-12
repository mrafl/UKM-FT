<?php $i = 0; ?>
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Admins</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>photo</th>
                        <th>name</th>
                        <th>email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>photo</th>
                        <th>name</th>
                        <th>email</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{ argon("assets/img/theme/team-4.jpg") }}">
                                    </span>
                            </div>
                        </td>
                        <td>John Snow</td>
                        <td>john@gmail.com</td>
                        <td>
                            <a href="#">
                                <button class="btn btn-primary">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
