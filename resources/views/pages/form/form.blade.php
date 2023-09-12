@extends('layouts.template')
@section('content')
    <!-- validations start -->
    {{ Session::has('error') }}
    <section id="input-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $data['type'] }}</h4>
                    </div>
                    <div class="card-body">
                        @if ($data['method'] == 'add')
                            <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @else
                                <form action="{{ route('form.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="input-form">Input Form</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="invalid-state" placeholder="Input Form" name="name" />
                                @error('name')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="input-form">Input File</label>
                                <input type="file" name="file"
                                    class="image-preview-filepond @error('file') is-invalid @enderror"
                                    data-max-file-size="1MB" data-max-files="1" />
                                @error('file')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="input-form">Input Select with seacrh
                                </label>
                                <div class="form-group  @error('select') is-invalid @enderror">
                                    <select class="choices form-select " name="select">
                                        <option value="">Choose</option>
                                        <option value="square">Square</option>
                                        <option value="rectangle">Rectangle</option>
                                        <option value="rombo">Rombo</option>
                                        <option value="romboid">Romboid</option>
                                        <option value="trapeze">Trapeze</option>
                                        <option value="traible">Triangle</option>
                                        <option value="polygon">Polygon</option>
                                    </select>
                                    @error('select')
                                        <span class="invalid-feedback" style="display: block!important">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @error('name')
                            <div class="invalid-feedback">
                                <i class="bx bx-radio-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                        @include('components.button-form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- validations end -->
@endsection
