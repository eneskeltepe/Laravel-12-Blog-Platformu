<div class="row">
    <div class="col-xxl-3">
        <div class="card mt-n5">
            <div class="card-body p-4">
                <div class="text-center">
                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                        <img src="{{ asset(Auth::user()->profile_image) }}"
                            class="rounded-circle avatar-xl img-thumbnail user-profile-image  shadow"
                            alt="user-profile-image">
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                <span class="avatar-title rounded-circle bg-light text-body shadow">
                                    <i class="ri-camera-fill"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                    <h5 class="fs-16 mb-1">{{ Auth::user()->name }}</h5>
                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card mt-xxl-n5">
            <div class="card-header">
                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                            <i class="fas fa-home"></i> Kullanıcı Bilgileri
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="firstnameInput" class="form-label">Kullanıcı Adı</label>
                                        <input type="text" name="username" class="form-control" id="firstnameInput"
                                            placeholder="Kullanıcı adınızı girin" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email Adresi</label>
                                        <input type="email" name="email" class="form-control" id="emailInput"
                                            placeholder="Email adresinizi girin" value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="passwordInput" class="form-label">Şifre (Şifrenizi değiştirmek
                                            istemiyorsanız bu alanı boş bırakın)</label>
                                        <input type="password" name="password" class="form-control" id="passwordInput"
                                            placeholder="Şifrenizi girin">
                                    </div>
                                </div>

                                @if($user->profile_image)
                                    <p><img src="{{ asset($user->profile_image) }}" alt="Profil Resmi"
                                            class="img-fluid rounded-circle" width="100"></p>
                                @endif

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="profileImageInput" class="form-label">Profil Resmi</label>
                                        <input type="file" name="profile_image" class="form-control"
                                            id="profileImageInput">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">Güncelle</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>