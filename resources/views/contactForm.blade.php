@extends('layouts/head')
@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="border-1 border rounded-3 border-dark">
                    <div class="card-header bg-dark">
                        <h3 class="text-white text-center">Nous contacter</h3>
                    </div>
                    <div class="card-body">

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        {!! Form::open(['route'=>'contact-form.store']) !!}

                        <div class="form-group mt-2 {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Nom / prénom:') !!}
                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Nom et prénom']) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group mt-2 {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Téléphone:') !!}
                            {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'0606060606']) !!}
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>

                        <div class="form-group mt-2 {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email@email.com']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group mt-2 {{ $errors->has('subject') ? 'has-error' : '' }}">
                            <div class="form-group">
                                <div class="mb-3"><label class="form-label required" for="contact_subject">Objet de la demande</label><select id="contact_subject" name="subject" class="form-select"><option value="Je souhaite poser une réclamation">Je souhaite poser une réclamation </option><option value="Je souhaite commander un service supplémentaire">Je souhaite commander un service supplémentaire</option><option value="Je souhaite en savoir plus sur une suite">Je souhaite en savoir plus sur une suite</option><option value="J&#039;ai un souci avec cette application">J&#039;ai un souci avec cette application</option></select>        </div>
                            </div>
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        </div>

                        <div class="form-group mt-2 {{ $errors->has('message') ? 'has-error' : '' }}">
                            {!! Form::label('Votre message:') !!}
                            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>

                        <div class="form-group mt-3 text-center">
                            <button class="btn btn-success">Envoyer le formulaire</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
    </html>

