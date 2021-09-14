@extends('templates.template')

@section('content')

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Cadastro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Permissão por Órgãos</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content bg-white border border-top-0">

    <div class="tab-pane container active" id="home" style="padding-top: 20px; padding-bottom: 1rem;">

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <center><strong>Atenção!</strong></center>
            <hr />
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(isset($dbException))
        <div class="alert alert-danger">

            <h5 class="text-center">Atenção!</h5>
            <hr />
            <ul>
                <li>{{ $dbException }}</li>
            </ul>
        </div>
        @endif

        @if(isset($messageSuccess))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $messageSuccess }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form method="post" action="{{url('usuarios')}}">
            <fieldset>
                @csrf

                <!-- ROW 1 -->

                <div class="row" id="row-1">

                    <div class="col-md-3">
                        <div class="form-group input-group-sm mb-3">
                            <label>
                                Nome <span id="asterisco" style="color:#F00">*</span>
                            </label>
                            <input type="text" name="nome" class="form-control" id="nome" value="{{old('nome')}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group input-group-sm mb-3">
                            <label>
                                Email<span id="asterisco" style="color:#F00">*</span>
                            </label>
                            <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group input-group-sm mb-3">
                            <label>
                                login<span id="asterisco" style="color:#F00">*</span>
                            </label>
                            <input type="text" name="login" id="login" class="form-control" value="{{old('login')}}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group input-group-sm mb-3">
                            <label>
                                Senha<span id="asterisco" style="color:#F00">*</span>
                            </label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group input-group-sm mb-3">
                            <label>
                                Confirmar Senha<span id="asterisco" style="color:#F00">*</span>
                            </label>
                            <input type="password" name="confirma_senha" id="conf_senha" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group input-group-sm mb-3">
                            <label>Tipo<span id="asterisco" style="color:#F00">*</span></label><br />
                            <select id="tipo" name="tipo" class="form-select">
                                <option value=""></option>
                                <option value='1'>Adm</option>
                                <option value='2'>Editor</option>
                                <option value='3'>Fical</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group input-group-sm mb-3">
                            <label>Ativo?<span id="asterisco" style="color:#F00">*</span></label><br />
                            <select id="ativo" name="ativo" class="form-select">
                                <option value=""></option>
                                <option value='1'>Sim</option>
                                <option value='0'>Nao</option>
                            </select>
                        </div>
                    </div>

                </div>
                <hr />
                <button type="submit" class="btn btn-success  btn-sm float-end">&emsp;<i class="fa fa-floppy-o"></i> Salvar&emsp;</button>
                <div class="float-end">&emsp;</div>
                <a href="/usuarios" class="btn btn-secondary  btn-sm float-end">&emsp;<i class="fa fa-undo"></i> Voltar&emsp;</a>
            </fieldset>
        </form>

    </div>

    <div class="tab-pane container fade" id="menu1" style="padding-top: 20px; padding-bottom: 1rem; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; ">

        <form id="form_insert_tab_2">
            <h5 class="text-muted">Órgãos</h5>
            <hr />
            <div class="row" id="permissao_por_orgaos">



            </div>
        </form>
        <hr>
        <div class="row">
            <div id="btn-upload" class="col-md-8">

            </div>

            <div class="col-md-2">
                <a href="/usuarios"><button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-undo"></i> Voltar</button></a>
            </div>

            <div class="col-md-2" id="botoes-foot">
                <button type="button" class="btn btn-success  btn-sm" id="btn-salvar-tab-2" onclick="insert('form_insert_tab_2','usuarios_orgaos','32')" style="display: block;">&emsp;&emsp;<i class="fa fa-floppy-o"></i> Salvar&emsp;&emsp;</button>
            </div>

        </div>

    </div>
</div>

@endsection