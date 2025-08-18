<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Admin Listesi</h5>
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th data-ordering="false">ID</th>
                            <th data-ordering="false">Profil Resmi</th>
                            <th data-ordering="false">Ad</th>
                            <th data-ordering="false">Email</th>
                            <th data-ordering="false">Kayıt Olma Tarihi</th>
                            <th data-ordering="false">Güncellenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><img src="{{ asset('profile_images/68a19f084067d.gif') }}" alt=""
                                    class="avatar-xs rounded-circle"></td>
                            <td>Enes Keltepe</td>
                            <td>eneskeltepe@gmail.com</td>
                            <td>01 Jan, 2021</td>
                            <td>03 Oct, 2021</td>
                            <td>
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item edit-item-btn"><i
                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i> Düzenle</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item remove-item-btn">
                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Sil
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>