@extends('layouts.app')
<title>FORM</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('form.submit') }}">
                        @csrf

                        <div class="background">
                            <div class="container">
                                <div class="screen">
                                    <div class="screen-header">
                                        <div class="screen-header-left">
                                            <div class="screen-header-button close"></div>
                                            <div class="screen-header-button maximize"></div>
                                            <div class="screen-header-button minimize"></div>
                                        </div>
                                        <div class="screen-header-right">
                                            <div class="screen-header-ellipsis"></div>
                                            <div class="screen-header-ellipsis"></div>
                                            <div class="screen-header-ellipsis"></div>
                                        </div>
                                    </div>
                                    <div class="screen-body">
                                        <div class="screen-body-item left">
                                            <div class="app-title">
                                                <span>CONTACT</span>
                                                <span>US</span>
                                            </div>
                                            <div class="app-contact">CONTACT INFO : 01553058481</div>
                                        </div>
                                        <div class="screen-body-item">
                                            <div class="app-form">
                                                <div class="app-form-group">
                                                    <input class="app-form-control" placeholder="NAME" name="name" value="{{ old('name') }}" required />
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="app-form-group">
                                                    <input class="app-form-control" placeholder="EMAIL" name="email" value="{{ old('email') }}" required />
                                                    @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="app-form-group">
                                                    <input class="app-form-control" placeholder="CONTACT NO" name="phone" value="{{ old('phone') }}" required />
                                                    @error('phone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="app-form-group message">
                                                    <input class="app-form-control" placeholder="MESSAGE" name="message" value="{{ old('message') }}" required />
                                                    @error('message')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="app-form-group buttons">
                                                    <button class="app-form-button">CANCEL</button>
                                                    <button class="app-form-button" type="submit">SEND</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

