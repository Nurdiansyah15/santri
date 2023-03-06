@extends('template.master-dashboard')
@section('content')
    {{-- content --}}
    <div class="row content">
        <div class="col-md-3 user-information">
            <div class="card my-shape">
                <div class="photo m-auto mt-5" style="background-image: url({{ asset('/img/me.png') }})">
                    <div class="button-photo m-auto">
                        <button type="button" class="btn btn-circle"><i class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                </div>
                <div class="name text-center mt-3">
                    Nurdiansyah
                </div>
                <div class="col-9 m-auto">
                    <hr style="height:2px;border-width:0;color:rgb(23, 23, 23);background-color:rgb(33, 33, 33)" />
                </div>
                <div class=" col-9 m-auto mb-2">
                    <div class="identity">
                        <h5 class="card-title">NIS</h5>
                        <p class="card-text">1000120001</p>
                    </div>
                    <div class="identity">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">nurdiansyah15@gmail.com</p>
                    </div>
                    <div class="identity">
                        <h5 class="card-title">No. Telp</h5>
                        <p class="card-text">083113867425</p>
                    </div>
                    <div class="identity">
                        <h5 class="card-title">Status</h5>
                        <div class="status-card">
                            <p>Santri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 dashboard-content">
            <div class="row content-title">
                Dashboard Santri
            </div>
            <div class="row card-green my-shape">
                <div class="row card-green-title">
                    <div class="col-md-6 title">
                        Madrasah Diniyyah
                    </div>
                    <div class="col-md-6 action-button">
                        <button type="button" class="btn btn-burger"><i class="fa-solid fa-bars"></i></button>
                    </div>
                </div>
                <div class="row card-green-content">
                    <div class="row item-card-green-content">
                        <div class="col-md-8 title">
                            Khotimin Qur'an Bil Ghoib
                        </div>
                        <div class="col-md-4 more-button">
                            <button type="button" class="btn btn-santri">Detail</button>
                        </div>
                    </div>
                    <div class="row item-card-green-content">
                        <div class="col-md-8 title">
                            Khotimin Qur'an Bil Ghoib
                        </div>
                        <div class="col-md-4 more-button">
                            <button type="button" class="btn btn-santri">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="row madin-raport-button mt-5 mb-2">
                    <button type="button" class="btn btn-santri">Lihat Raport</button>
                </div>
            </div>
            <div class="row card-white my-shape">
                <div class="row card-white-title">
                    <div class="col-md-6 title">
                        Kegiatan
                    </div>
                    <div class="col-md-6 action-button">
                        <button type="button" class="btn btn-burger btn-burger-white"><i
                                class="fa-solid fa-bars"></i></button>
                    </div>
                </div>
                <div class="row card-white-content">
                    <div class="row accordion accordion-flush  item-card-white-content" id="accordionFlushExample">
                        <div class="col-md-4 title">
                            Madrasah Diniyyah
                        </div>
                        <div class="col-md-4 title">
                            <div class="percentence">
                                25%
                            </div>
                            <div class="progress-bar">
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 more-button">
                            <button type="button" class="btn btn-santri" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">Detail</button>
                        </div>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>12 November 2023</td>
                                            <td>19.30 WIB</td>
                                            <td>
                                                <div class="label-presence">
                                                    Hadir
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>12 November 2023</td>
                                            <td>19.30 WIB</td>
                                            <td>
                                                <div class="label-presence permi">
                                                    Izin
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>12 November 2023</td>
                                            <td>19.30 WIB</td>
                                            <td>
                                                <div class="label-presence alfa">
                                                    Alfa
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row finance-card my-shape"></div>
        </div>
    </div>
    {{-- end of content --}}
@endsection
