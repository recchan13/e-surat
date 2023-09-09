@include('include.head')

{{-- <body>

    
</body> --}}

<body style="background: lightgray">

    @include('include.navbar')
    @include('include.sidebar')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ url('/home') }}" class="btn btn-md btn-danger mb-3">KEMBALI</a>
                        <a href="{{ route('surats.create') }}" class="btn btn-md btn-success mb-3">TAMBAH NOMOR SURAT</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Judul Surat</th>
                                <th scope="col">Unit Pembuat Surat</th>
                                <th scope="col">Unit Tujuan Surat</th>
                                <th scope="col">Posisi Surat</th>
                                <th scope="col">Nomor Disposisi</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($surats as $surat)
                                <tr>
                                    
                                    <td>{{ $surat->nomor }}</td>
                                    <td>{{ $surat->judul }}</td>
                                    <td>{{ $surat->unit }}</td>
                                    <td>{{ $surat->tujuan }}</td>
                                    <td>{{ $surat->posisi }}</td>
                                    <td>{{ $surat->no_disposisi }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('surats.destroy', $surat->id) }}" method="POST">
                                            <a href="{{ route('surats.show', $surat->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('surats.edit', $surat->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Surat belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                        </table>  
                        {{ $surats->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>