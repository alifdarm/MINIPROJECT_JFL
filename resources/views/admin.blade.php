@extends('partials.master')

@section('up_container')
<div class="container-fluid">
    <div class="header-body">
      <div class="text-center">
          <img class="profile-user-img img-fluid img-circle pb-3" src="{{ asset('logo.png') }}" alt="User profile picture" style="width:40%;height:auto;">
        <h2 class="pb-3">Administrator Only</h2>
        <p>Disini Anda dapat melakukan 'check' suatu antrean, apakah seseorang mendatangi antrean tersebut atau tidak</p>
       </div>
      <!-- Card stats -->

    </div>
  </div>
</div>

@endsection


@section('down_container')
<div class="container-fluid mt--6">


    <div class="row">
        <div class="col-xl-6">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="{{ asset('BNI.png') }}" alt="Card image cap">

                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Username</th>
                              <th scope="col">Email</th>
                              <th scope="col">No. Antrean</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($list_bank as $police => $val)
                            <form action="/admin/miniproject/{{ $val->id }}/{{ $val->instansi_id }}" method="GET">
                                @csrf
                            <tr>
                                <td>
                                    {{ DB::table('users')->where('id',$val->user_id )->value('name') }}
                                </td>
                                <td>
                                    {{ DB::table('users')->where('id',$val->user_id )->value('email') }}
                                </td>
                                <td>
                                   <p> {{$val->no_antrian }}</p>
                                </td>
                                <td name="annotate1">
                                    @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == null)
                                        <button type="submit" name="annotate1" value="Accept" class="btn btn-info">Accept</button>
                                        <button type="submit" name="annotate1" value="Decline" class="btn btn-warning">Decline</button>
                                    @else
                                        @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == 'declined')
                                            <span class="badge badge-pill badge-warning">Declined</span>
                                        @else
                                            <span class="badge badge-pill badge-default">Accepted</span>
                                        @endif
                                    @endif

                                </td>
                            </tr>
                            </form>
                            @empty
                            <tr>
                                <td>
                                No Data
                                </td>
                            </tr>
                          @endforelse
                          </tbody>
                        </table>
                      </div>
                <form action="/admin/miniproject/1" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-primary mt-2">Reset Data</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="{{ asset('k_imigrasi.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. Antrean</th>
                                <th scope="col">Action</th>
                            </tr>
                          </thead>
                         <tbody>
                            @forelse($list_imigrasi as $guest => $val)
                            <form action="/admin/miniproject/{{ $val->id }}/{{ $val->instansi_id }}" method="GET">
                                @csrf
                            <tr>
                                <td>
                                    {{ DB::table('users')->where('id',$val->user_id )->value('name') }}
                                </td>
                                <td>
                                    {{ DB::table('users')->where('id',$val->user_id )->value('email') }}
                                </td>
                                <td>
                                   <p> {{$val->no_antrian }}</p>
                                </td>
                                <td name="annotate1">
                                    @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == null)
                                        <button type="submit" name="annotate1" value="Accept" class="btn btn-info">Accept</button>
                                        <button type="submit" name="annotate1" value="Decline" class="btn btn-warning">Decline</button>
                                    @else
                                        @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == 'declined')
                                            <span class="badge badge-pill badge-warning">Declined</span>
                                        @else
                                            <span class="badge badge-pill badge-default">Accepted</span>
                                        @endif
                                    @endif

                                </td>
                            </tr>
                            </form>
                            @empty
                            <tr>
                                <td>
                                    No Data
                                    </td>
                            </tr>
                          @endforelse
                         </tbody>
                        </table>
                      </div>
                      <form action="/admin/miniproject/2" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-primary mt-2">Reset Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-xl-6">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{ asset('bpjs.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Antrean</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($list_sehat as $medic => $val)
                        <form action="/admin/miniproject/{{ $val->id }}/{{ $val->instansi_id }}" method="GET">
                            @csrf
                        <tr>
                            <td>
                                {{ DB::table('users')->where('id',$val->user_id )->value('name') }}
                            </td>
                            <td>
                                {{ DB::table('users')->where('id',$val->user_id )->value('email') }}
                            </td>
                            <td>
                               <p> {{$val->no_antrian }}</p>
                            </td>
                            <td name="annotate1">
                                @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == null)
                                    <button type="submit" name="annotate1" value="Accept" class="btn btn-info">Accept</button>
                                    <button type="submit" name="annotate1" value="Decline" class="btn btn-warning">Decline</button>
                                @else
                                    @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == 'declined')
                                        <span class="badge badge-pill badge-warning">Declined</span>
                                    @else
                                        <span class="badge badge-pill badge-default">Accepted</span>
                                    @endif
                                @endif

                            </td>
                        </tr>
                        </form>
                        @empty
                        <tr>
                            <td>
                                No Data
                                </td>
                        </tr>
                      @endforelse
                      </tbody>
                    </table>
                  </div>
                  <form action="/admin/miniproject/3" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-primary mt-2">Reset Data</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{ asset('samsat.png') }}" alt="Card image cap">
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Antrean</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @forelse($list_samsat as $police => $val)
                          <form action="/admin/miniproject/{{ $val->id }}/{{ $val->instansi_id }}" method="GET">
                            @csrf
                        <tr>
                            <td>
                                {{ DB::table('users')->where('id',$val->user_id )->value('name') }}
                            </td>
                            <td>
                                {{ DB::table('users')->where('id',$val->user_id )->value('email') }}
                            </td>
                            <td>
                               <p> {{$val->no_antrian }}</p>
                            </td>
                            <td name="annotate1">
                                @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == null)
                                    <button type="submit" name="annotate1" value="Accept" class="btn btn-info">Accept</button>
                                    <button type="submit" name="annotate1" value="Decline" class="btn btn-warning">Decline</button>
                                @else
                                    @if(DB::table('annotate')->where('antrian_id',$val->id)->value('annotate') == 'declined')
                                        <span class="badge badge-pill badge-warning">Declined</span>
                                    @else
                                        <span class="badge badge-pill badge-default">Accepted</span>
                                    @endif
                                @endif

                            </td>
                        </tr>
                        </form>
                            @empty
                            <tr>
                                <td>
                                    No Data
                                    </td>
                            </tr>
                          @endforelse
                      </tbody>
                    </table>
                  </div>
                  <form action="/admin/miniproject/4" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-primary mt-2">Reset Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<form action="/admin/miniproject" method="POST">
    @csrf
    @method('DELETE')

        <button type="button" class="btn btn-block btn-lg btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Reset Semua Data Antrean</button>
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
                      <h4 class="heading mt-4">Perhatian!</h4>
                      <p>Anda akan menghilangkan semua nomor antrean pelanggan Anda?</p>
                  </div>

              </div>

              <div class="modal-footer">
                  <button type="submit" class="btn btn-white">Ya, lanjutkan</button>
                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
              </div>

          </div>
      </div>
    </div>
</form>

</div>


@endsection
