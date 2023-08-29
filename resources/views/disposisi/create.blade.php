<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Disposisi </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('disposisi.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NOMOR DISPOSISI</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Contoh: 5243">
                            
                                <!-- error message untuk title -->
                                @error('nomor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">UNIT PEMBUAT DISPOSISI</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="unit" value="{{ old('unit') }}" placeholder="Unit Pembuat Disposisi">
                            
                                <!-- error message untuk judul -->
                                @error('nomor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TUJUAN DISPOSISI</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="tujuan" value="{{ old('tujuan') }}" placeholder="Unit Tujuan Disposisi">
                            
                                <!-- error message untuk judul -->
                                @error('nomor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">POSISI DISPOSISI</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}" placeholder="Posisi Disposisi Saat Ini">
                            
                                <!-- error message untuk judul -->
                                @error('nomor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NOMOR SURAT DISPOSISI</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="id_surat_diposisi" value="{{ old('id_surat_diposisi') }}" placeholder="B-..../Un.16/...">
                            
                                <!-- error message untuk judul -->
                                @error('nomor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NOMOR SURAT BALASAN</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="id_surat_balasan" value="{{ old('id_surat_balasan') }}" placeholder="B-..../Un.16/... (Kosongkan jika tidak ada)">
                            
                                <!-- error message untuk judul -->
                                @error('nomor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    // CKEDITOR.replace( 'content' );
</script>
</body>
</html>