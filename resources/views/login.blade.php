<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-SURAT</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h1>Login</h1>
                        <div class="form-group">
                            <label class="font-weight-bold">USERNAME</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="username">
                        
                            <!-- error message untuk judul -->
                            @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">PASSWORD</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="unit" value="{{ old('unit') }}" placeholder="password">
                        
                            <!-- error message untuk judul -->
                            @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <a href="{{ url('/home') }}" class="btn btn-md btn-success mb-3">Login</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>