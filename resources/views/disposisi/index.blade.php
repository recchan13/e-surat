<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Data Posts - SantriKoding.com</title> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <!-- <div>
                    <h3 class="text-center my-4">Tutorial Laravel 10 untuk Pemula</h3>
                    <h5 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h5>         
                    <hr>
                </div> -->
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
                                    <!-- <td class="text-center">
                                        <img src="{{ asset('/storage/surat/'.$surat->image) }}" class="rounded" style="width: 150px">
                                    </td> -->
                                    <!-- <td>{{ $surat->nomor }}</td> -->
                                    <!-- <td>{!! $surat->content !!}</td> -->
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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