@extends('adminlte::page')

@section('title','AdminLTE')

@section('content')
        <div class="box box-solid box-primary">
                <div class="box-header">
                        <h4 class="box-title">Paciente</h4>
                        <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" 
                                data-toggle="tooltip" title="" data-original-title="collapse">
                                <i class="fa fa-minus"></i>
                                </button>
                        </div>
                </div>
                <div class="box-body">
                        <div class="box-header">
                                <div class="form-inline">
                                        <div class="col-xs-6 col-sm-2">
                                                <a href="{{route('paciente.create-edit')}}" class="btn btn-block btn-primary">
                                                <i class="fa fa-fw fa-plus"></i> Cadastrar</a>
                                        </div>
                                </div>
                        </div>
                        <table class="table table-hover table-condensed text-center">
                                <thead>
                                
                                        <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Data Nascimento</th>
                                                <th>CPF</th>
                                                <th>Rua</th>
                                                <th>Nº</th>
                                                <th>Bairro</th>
                                                <th>Cidade</th>
                                        </tr>
                                </thead>
                     
                @if(isset($paciente))
                <tbody>
                        @foreach($paciente as $model)
                                <tr>
                                        <td>{{$model->id}}</td>
                                        <td>{{$model->nome}}</td>
                                        <td>{{$model->data_nacimento}}</td>
                                        <td>{{$model->cpf}}</td>
                                        <td>{{$model->rua}}</td>
                                        <td>{{$model->numero}}</td>
                                        <td>{{$model->bairro}}</td>
                                        <td>{{$model->cidade}}</td>
                                        
                                       <td class="td-actions text-left">
                                                <a href="{{route('paciente.create-edit')}}" class="btn btn-success" data-placement="top" title="Editar Paciente">
                                                        <i class="fas fa-pencil-alt"></i>
                                                 </a>

                                                 <a href="{{route('paciente.create-edit')}}" class="btn btn-danger" data-placement="top" title="Deletar Paciente">
                                                                <i class="fa fa-fw fa-minus-circle"></i>
                                                </a>

                                                 {{--  <a href="{{route('cliente.edit')}}" class="btn btn-danger" data-placement="top"
                                                        title="Editar Cliente">
                                                        <i class="fa fa-fw fa-minus-circle"></i>
                                                </a>  --}}
                                        </td>
                                </tr>
                       @endforeach
                                
                        </tbody>
                @endif
        </table>
        </div>         
                                                
@stop