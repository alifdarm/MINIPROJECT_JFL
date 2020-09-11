@extends('partials.master')

@section('up_container')
<div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle mb-3" src="{{ asset('Picture1.png') }}" style="width:15%;" alt="User profile picture">
      <h3>Halo, {{ $ind->name }} ({{ $ind->email }})</h3>
    </div>



    <p class="text-muted text-center">Software Engineer</p>

  </div>
@endsection

@section('down_container')
<div class="row d-flex justify-content-center">
    <div class="card mt-3">
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
                <th scope="col" class="sort" data-sort="budget">Keterangan</th>
                <th scope="col">No. Antrean</th>
                <th scope="col" class="sort" data-sort="completion">Status (Accepted/Calcelled)</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
            @forelse($list as $num => $val)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    @if($val->instansi_id == 1)
                        <img src="{{ asset('BNI.png') }}" alt="image-placeholder" style="height:150px;width:auto;">
                    @elseif($val->instansi_id == 2)
                        <img src="{{ asset('k_imigrasi.png') }}" alt="image-placeholder" style="height:150px;width:auto;">
                    @elseif($val->instansi_id == 3)
                        <img src="{{ asset('bpjs.jpg') }}" alt="image-placeholder" style="height:150px;width:auto;">
                    @elseif($val->instansi_id == 4)
                        <img src="{{ asset('samsat.png') }}" alt="image-placeholder" style="height:150px;width:auto;">
                    @endif
                    </div>
                </th>
                <td class="budget">
                        <p>{{ $val->jenis_layanan }}</p>

                </td>

                <td>
                    <div class="alert alert-warning" role="alert">
                        <strong>{{ $val->no_antrian }}</strong>
                      </div>
                </td>
                <td>
                  <div class="justify-content-center">
                      @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == 'accepted')
                        <h2><span class="badge badge-pill badge-default">{{ DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') }}</span></h2>
                      @else
                        <h2><span class="badge badge-pill badge-danger">{{ DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') }}</span></h2>
                      @endif
                    <form action="/miniproject/{{ $val->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="col">
                            <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal-notification">Delete</button>
                        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                          <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                              <div class="modal-content bg-gradient-danger">

                                  <div class="modal-header">
                                      <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>

                                  <div class="modal-body">

                                      <div class="py-3 text-center">
                                          <i class="ni ni-bell-55 ni-3x"></i>
                                          <h4 class="heading mt-4">Anda Ingin Menghapus No. Antrean?</h4>
                                          <p>Ini bersifat irreversibel</p>
                                      </div>

                                  </div>

                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-white">Ya</button>
                                      <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tidak</button>
                                  </div>

                              </div>
                          </div>
                      </div>
                    </form>
                  </div>
                </td>
                @empty
                <td>
                    <h3>No Data</h3>
                </td>

              </tr>

                 @endforelse

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

