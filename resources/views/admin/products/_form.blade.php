<div class="form-group">
    {!! Form::select('category_id', $categories, null, ['class'=> 'form-control', 'placeholder'=>'Entre com o Nome da Categoria.']) !!}
</div>
<div class="form-group">
    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Entre com o Nome da Categoria.']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('description', null, ['class'=> 'form-control', 'placeholder'=>'Entre com o Nome da Categoria.']) !!}
</div>
<div class="form-group">
    {!! Form::text('price', null, ['class'=> 'form-control', 'placeholder'=>'Entre com o Nome da Categoria.']) !!}
</div>