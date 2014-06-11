@extends('layout')

@section('content')
    <h1>掲示板</h1>
    @foreach($boards as $board)
        <pre><code>{{ $board->user_name }}　さん<br />{{ $board->comment }}
        </pre></code>
    @endforeach
    {{ Form::open(array('url' => 'boards/add')) }}
        <p>NAME{{Form::text('user_name', null, ['class' => 'form-control'])}}</p>
        <?php echo $errors->first('user_name'); ?>

        <p>COMMENT{{Form::textarea('comment', null, ['class' => 'form-control'])}}</p>
        <?php echo $errors->first('comment'); ?>

        <p>{{Form::submit("send", ['class' => 'btn btn-lg btn-primary btn-block'])}}</p>
    {{ Form::close() }}
@stop