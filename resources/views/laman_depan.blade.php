@extends('partials.master')

@section('up_container')
<div class="container-fluid">
    <div class="header-body">
      <div class="text-center">
        <img class="profile-user-img img-fluid img-circle mb-3" src="{{ asset('Picture1.png') }}" style="width:15%;" alt="User profile picture">
        <h3>Halo, {{ $ind->name }} ({{ $ind->email }})</h3>
        </div>
      <!-- Card stats -->

    </div>
  </div>
</div>
@endsection

@section('down_container')
<div class="row d-inline-flex bd-highlight justify-content-around pl-4" style="width:100%;">
    <div class="md-3 p-3 flex-fill bd-highlight">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body fixed">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Total Antrian Anda</h5>
              <a href="/miniproject/{{ $ind->id }}"><span class="h2 font-weight-bold mb-0">{{ count($list2) }}</span></a>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-cyan text-white rounded-circle shadow">
                <i class="ni ni-active-40"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ count($acc) }}</span>
            <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> {{ count($dec) }}</span>

            <span class="text-nowrap">Accepted/Rejected</span>
          </p>
        </div>
      </div>
    </div>
    <div class="md-3 p-3 flex-fill bd-highlight">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Waktu Tunggu Total</h5>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="h2 font-weight-bold mb-0">Click For Details</span></a>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <!-- Light table -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                            <th scope="col" class="sort" data-sort="name">Instansi</th>
                                            <th scope="col" class="sort" data-sort="budget">Jumlah Antrean</th>
                                            <th scope="col" class="sort" data-sort="completion">Waktu Tunggu</th>

                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>
                                                    <h4>Bank</h4>
                                                </td>
                                                <td>
                                                    {{ $count1 }}
                                                </td>
                                                <td>
                                                    {{ 7*$count1 }} menit
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Imigrasi</h4>
                                                </td>
                                                <td>
                                                    {{ $count2 }}
                                                </td>
                                                <td>
                                                    {{ 7*$count2 }} menit
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Kesehatan</h4>
                                                </td>
                                                <td>
                                                    {{ $count3 }}
                                                </td>
                                                <td>
                                                    {{ 7*$count3 }} menit
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Police Samsat</h4>
                                                </td>
                                                <td>
                                                    {{ $count4 }}
                                                </td>
                                                <td>
                                                    {{ 7*$count4 }} menit
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                <!--/modal-->
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-cyan text-white rounded-circle shadow">
                <i class="ni ni-chart-pie-35"></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
<div class="d-flex justify-content-center p-3">
    <div class="input-group input-group-alternative input-group-merge" style="width: 80%;">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input class="form-control" placeholder="Search" type="text">
    </div>
    <button type="button" class="btn btn-green">Cari</button>
</div>
<div class="row d-flex justify-content-center">
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Daftar Antrian Tersedia</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Instansi</th>
                <th scope="col" class="sort" data-sort="budget">Alamat</th>
                <th scope="col">Jam Operasional</th>
                <th scope="col" class="sort" data-sort="completion">Capacity</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">

              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="miniproject/details/{{ $list[0]->id }}"><img src="{{ asset('BNI.png') }}" alt="image-placeholder" style="height:150px;width:auto;"></a>
                  </div>
                </th>
                <td class="budget">
                    Jl. Jendral Ahmad Yani No.809, Padasuka, <br>
                    Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40125
                </td>

                <td>
                  <h3>09.00 - 15.00 WIB</h3>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">{{ 0.1*$count1 }}%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </td>

              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="/miniproject/details/{{ $list[1]->id }}"><img src="{{ asset('k_imigrasi.png') }}" alt="image-placeholder" style="height:120px;width:auto;"></a>
                  </div>
                </th>
                <td class="budget">
                    Jl. Surapati No.82, Cihaur Geulis, <br>
                    Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122
                </td>

                <td>
                    <h3>09.00 - 15.00 WIB</h3>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">{{ 0.1*$count2 }}%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>

              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="/miniproject/details/{{ $list[2]->id }}" name="bpjs"><img src="{{ asset('bpjs.jpg') }}" alt="image-placeholder" style="height:150px;width:auto;"></a>
                  </div>
                </th>
                <td class="budget">
                    Jl. PH.H. Mustofa No.81, Cikutra, <br>
                    Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124
                </td>

                <td>
                    <h3>09.00 - 15.00 WIB</h3>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">{{ 0.1*$count3 }}%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                      </div>
                    </div>
                  </div>
                </td>

              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="/miniproject/details/{{ $list[3]->id }}"><img src="{{ asset('samsat.png') }}" alt="image-placeholder" style="height:150px;width:auto;"></a>
                  </div>
                </th>
                <td class="budget">
                  Jl. Kiara Condong Jl. Terusan Jakarta No.A5 1, <br>
                  Babakan Surabaya, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40281
                </td>

                <td>
                    <h3>09.00 - 15.00 WIB</h3>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">{{ 0.1*$count4 }}%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </td>

              </tr>

            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">

          </nav>
        </div>
      </div>
@endsection
