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
                
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ url('/home') }}" class="btn btn-md btn-danger mb-3">KEMBALI</a>
                        <a href="{{ route('disposisi.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DISPOSISI</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nomor Disposisi</th>
                                <th scope="col">Unit Pembuat Surat</th>
                                <th scope="col">Unit Tujuan Surat</th>
                                <th scope="col">Posisi Surat</th>
                                <th scope="col">Surat Disposisi</th>
                                <th scope="col">Surat Balasan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($disposisi as $disposisi)
                                <tr>
                                    <!-- <td class="text-center">
                                        <img src="{{ asset('/storage/surat/'.$surat->image) }}" class="rounded" style="width: 150px">
                                    </td> -->
                                    <td>{{ $disposisi->nomor }}</td>
                                    <td>{{ $disposisi->unit }}</td>
                                    <td>{{ $disposisi->tujuan }}</td>
                                    <td>{{ $disposisi->posisi }}</td>
                                    <td>{{ $disposisi->id_surat_disposisi }}</td>
                                    <td>{{ $disposisi->id_surat_balasan }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('disposisi.destroy', $disposisi->id) }}" method="POST">
                                            <a href="{{ route('disposisi.show', $disposisi->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('disposisi.edit', $disposisi->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                        </table>  
                        {{ $disposisi->links() }}
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