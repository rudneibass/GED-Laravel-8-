@extends('templates.template')

@section('content')
<div class="row bar-main">
    <div class="col-md-12">
        <span><i class="fa fa-users"></i> Usuários </span>
        <a href="{{ url('usuarios/create') }}" class="btn btn-sm  btn-success float-end"><i class="fa fa-plus"></i> Cadastrar</a>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><span class="text-muted">Pesquisa Por...</span></div>
            <div class="card-body">

                <form id="form-search" method="POST" action="{{ url('usuarios/search') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group  input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend1"> <i class="fa fa-file-text"> </i></span>
                                        </div>
                                        <input type="text" name="id" id="id" class="form-control" placeholder="Código">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group  input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend1"> <i class="fa fa-file-text"> </i></span>
                                        </div>
                                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group  input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend1"> <i class="fa fa-file-text"> </i></span>
                                        </div>
                                        <input type="text" name="login" id="login" class="form-control" placeholder="Login">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group  input-group-sm mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend1"> <i class="fa fa-file-text"> </i></span>
                                        </div>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .col-md-11 -->

                        <div class="col-md-1 p-0">
                            <div class="row">
                                <div class="col-md-12 p-0">
                                    <div class="input-group  input-group-sm mb-3">
                                        <button type="submit" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-search"></i> Pesquisar
                                        </button>
                                    </div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .col-md-2 -->

                    </div><!-- .row -->
                </form>
            </div>


        </div>

    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12 bg-white">
        <table class="table table-hover table-bordered table-striped table-sm table-main">
            <thead id="thead">
                <tr>
                    <th>Cod</th>
                    <th>Nome</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody">

                @foreach($todosUsuarios as $usuario)
                <tr  id="{{ $usuario->id }}">
                    <td class="td-id" >{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td class="td-action-edit"> <a href="{{ url('usuarios') }}/{{ $usuario->id }}/edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> </td>
                    <td class="td-action-destory"> <a id="btn-delete" onclick="confirmDestroy('{{$usuario->id}}', 'usuarios')" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fa fa-trash"></i></a> </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>

                </tr>
            </tfoot>
        </table>
    </div>
</div>




<div class="row">
    <div class="col-md-12">

        <div class="float-end">
            {{ $todosUsuarios->links() }}
        </div>
    </div>

</div>

@endsection