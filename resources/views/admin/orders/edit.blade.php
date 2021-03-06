@extends('layouts/app')
@section('content')
<div class="container">
    <h2>Pedido #{{$order->id}} - R$ {{$order->total}}</h2>
    <h3>Cliente: {{$order->client->user->name}}</h3>
    <h4>Data: {{$order->created_at}}</h4>

    <p>Entregar em:<br>
        {{$order->client->address}} - {{$order->client->city}} - {{$order->client->state}}
    </p>

    {!! Form::model($order, ['route'=>['updateorders', $order->id], 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::select('status', $list_status, null, ['class'=> 'form-control', 'placeholder'=>'Selecione o Status do Pedido.']) !!}
        </div>
        <div class="form-group">
            {!! Form::select('user_deliveryman_id', $deliveryman, null, ['class'=> 'form-control', 'placeholder'=>'Selecione o Entregador.']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}




</div>
@endsection 
