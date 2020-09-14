@if (Session::has('flash_message'))
    <div class="message-sent">{{ Session::get('flash_message') }}</div>
@endif

{!! Form::open(['action' => 'ContactsController@storeContact', 'method' => 'POST']) !!}
    <div class="form-group">
        <span class="required">*</span>{{Form::label('name', 'Ime:')}}
        {{Form::text('name', '', ['class' => 'form-input', 'placeholder' => 'Ime'])}}
        @if ($errors->has('name'))
            <small>{{ $errors->first('name') }}</small>
        @endif
    </div>
    <div class="form-group">
        <span class="required">*</span>{{Form::label('email', 'E-Mail:')}}
        {{Form::text('email', '', ['class' => 'form-input', 'placeholder' => 'name@example.com'])}}
        @if ($errors->has('email'))
            <small>{{ $errors->first('email') }}</small>
        @endif
    </div>
    <div class="form-group">
        {{Form::label('phone-number', 'Telefon:')}}
        {{Form::text('phone-number', '', ['class' => 'form-input', 'placeholder' => ''])}}
    </div>
    <div class="form-group">
        <span class="required">*</span>{{Form::label('subject', 'Naslov Poruke:')}}
        {{Form::text('subject', '', ['class' => 'form-input', 'placeholder' => 'Naslov'])}}
        @if ($errors->has('subject'))
            <small>{{ $errors->first('subject') }}</small>
        @endif
    </div>
    <div class="form-group">
        <span class="required">*</span>{{Form::label('message', 'Tekst Poruke:')}}
        {{Form::textarea('message', '', ['class' => 'form-input', 'placeholder' => 'Poruka'])}}
        @if ($errors->has('message'))
            <small>{{ $errors->first('message') }}</small>
        @endif
    </div>
    {{Form::submit('Pošalji', ['class' => 'button'])}}
    <div class="notification">
        <small>Polja obeležena <span class="required">*</span> su obavezna!</small>
    </div>
{!! Form::close() !!}