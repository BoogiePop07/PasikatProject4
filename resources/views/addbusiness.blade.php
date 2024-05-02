<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>PASIKAT: Food Hub</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/heroes/hero-5/assets/css/hero-5.css" />
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

  
@include('auth.layouts')

  <div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Business Sign Up and Upload Files') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row pt-4">
                            <label for="business_first_name" class="col-md-4 col-form-label text-md-right">{{ __('Business First Name') }}</label>

                            <div class="col-md-6">
                                <input id="business_first_name" type="text" class="form-control @error('business_first_name') is-invalid @enderror" name="business_first_name" value="{{ old('business_first_name') }}" required autocomplete="business_first_name" autofocus>

                                @error('business_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-4">
                            <label for="business_last_name" class="col-md-4 col-form-label text-md-right">{{ __('Business Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="business_last_name" type="text" class="form-control @error('business_last_name') is-invalid @enderror" name="business_last_name" value="{{ old('business_last_name') }}" required autocomplete="business_last_name">

                                @error('business_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-4">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Business E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-4">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Business Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <form>
                            <h2 class ="pt-5">Upload Files</h2>
                            <p>Upload the Following Requirement Files.</p>
                            <!-- form fields here -->
                        </form>

                        <div class="mb-3 pt-2">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="file1">
                        </div>
                        <div class="mb-3 pt-2">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="file2">
                        </div>
                        <div class="mb-3 pt-2">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="file3">
                        </div>
                        <div class="mb-3 pt-2">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="file4">
                        </div>
                        <div class="mb-3 pt-2">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="file5">
                        </div>
                        <div class="form-group row mb-0">
                             <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                             {{ __('Submit') }}
                        </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

