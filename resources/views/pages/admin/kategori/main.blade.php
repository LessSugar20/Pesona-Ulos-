@extends('theme.admin.main')
@section('content')

@section('title')
Ulos Berdasarkan Kategori
@endsection

<div class="app-content content ">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                {{-- <div class="card"> --}}
                   
                    <div class="card-header">
                        <h1 class="card-title">Kategori Ulos Toba</h1>
                        {{-- <a class="btn btn-info" href="{{ route('ulos.create') }}" ><i data-feather='plus'></i> Tambah</a> --}}
                    </div>
                    <div class="table-responsive row  justify-content-center m-2">
                    <div class="col-12">
                        {{-- <table class="table text-center">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Nama Ulos</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Pembuatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                 use Illuminate\Support\Str;   
                                @endphp
                                @foreach($ulo as $index => $item)
                                    <tr>
                                        <td>{{ $index + $ulo ->firstItem() }}</td>
                                        <td>{{ $item->nama_ulos }}</td>
                                        <td><img src="{{asset('images/'.$item ->gambar_ulos)}}" alt="" style="width: 30%"/></td>
                                        <td>{!! $item->deskripsi_ulos !!}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle><circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item delete-record" href="{{ route('ulos.show',$item->id) }}"><i data-feather='eye'></i> Lihat</a>
                                                    <a href="{{ route('ulos.edit',$item->id) }}" class="dropdown-item delete-record">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                        </svg>Edit
                                                    </a>
                                                    <form action="{{ route('ulos.destroy',$item->id) }}" method="post">
                                                      @csrf
                                                      @method("DELETE")
                                                      <button type="submit" class="dropdown-item delete-record">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 me-50">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>Hapus
                                                    </button>
                                                    </form>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                        
                        {{-- <div class="row justify-content-center my-10">
                            <div>
                                {{$data->links()}}
                            </div>
                        </div> --}}

                        <section id="card-demo-example">
                            <div class="row match-height">
                                @foreach($data as $item)
                              <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <img class="img-fluid" src="{{asset('images/'.$item ->cover_kategori)}}" alt="" style="width:400px; height:300px;">
                                  <div class="card-body">
                                    <h4 class="card-title text-center">{{$item->nama_kategori}}</h4>
                                    
                                  </div>
                                  
                                    <style>
                                        .text12 {
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 4; /* number of lines to show */
                                                line-clamp: 2; 
                                        -webkit-box-orient: vertical;
                                        }
                                    </style>
                                  <div class="card-body">
                                    <div class="card-text text12">{!! $item->deskripsi_kategori!!}</div>
                                    <a href="{{ route('kategori.show',$item->id) }}" class="card-link">Lihat Detail</a>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                        </section>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection