{!! Form::open(array('method' => 'POST', 'action' => array('CatridgeController@getCatridgesFromMaster'))) !!}
    {!! Form::text('master', $master, ['hidden']) !!}
    {!! Form::checkbox('flag', $flag, true, ['hidden']) !!}
    <a href="">{!! Form::submit('В мастерскую') !!}</a>
{!! Form::close() !!}