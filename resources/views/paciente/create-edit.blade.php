@extends('adminlte::page')

@section('content')

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> Cadastro de Paciente</h4>
        <div class="box-tools pull-rigt">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
             title="" data-original-title="Collapse">
             <i class="fa fa-minus"></i>
        </button>
    </div>
</div>
<div class="box-body">
        <div class="row">
            <div class="form-group col-sm3 col-md-4">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" value="" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group col-sm3 col-md-4">
                
                <label class="form-label">Data de Nacimento:</label>
                <input type="date" name="date" value="" class="form-control">
            </div>
            <div class="form-group col-sm3 col-md-4">
                <label class="form-label">CPF:</label>
                <input type="text" name="cpf" value="" class="form-control" placeholder="CPF">
            </div>
        </div>

        <div class="row">
             <div class="form-group col-sm3 col-md-4">
                <label class="form-label">Rua:</label>
                <input type="text" name="rua" value="" class="form-control" placeholder="Rua">
             </div>
            <div class="form-group col-sm3 col-md-2 ">
                <label class="form-label">Nº</label>
                <input type="text" name="numero" value="" class="form-control">
            </div>
            <div class="form-group col-sm3 col-md-5">
                <label class="form-label">Bairro:</label>
                <input type="text" name="bairro" value="" class="form-control" placeholder="Bairro">
            </div>
        
        </div>
        <div class="row">
            <div class="form-group col-sm3 col-md-4">
                   <label class="form-label">Cidade::</label>
                    <input type="text" name="cidade" value="" class="form-control" placeholder="Cidade">
            </div>
        </div>

        <br></br>
        <div class="box-footer">
            <div id="actions" cidade="text-right">
                <div class="col-md-12">
                    <button type="submit" class="btn-success" id="btn">Salvar</button>
                    <a href="{{route('paciente.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </div>
    

</div>

@stop