@extends('layouts.app')

@section('content')
<form action="{{ route('home') }}" method="POST">
    @csrf
    @method('POST')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="input-group">
                        <div class="form-outline">
                          <input type="text" name="search" id="form1" class="form-control" />
                        </div>
                          <input class="btn btn-primary" type="submit" value="Search">
                      </div>
                </div>
            </div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Data Criada</th>
                      </tr>
                    </thead>
                    <tbody>
                            @foreach ( $search as $key)
                                <tr>
                                    <th scope="row">{{ $key->id }}</th>
                                    <td>{{ $key->nome }}</td>
                                    <td>{{ $key->email }}</td>
                                    <td>{{ $key->categoria }}</td>
                                    <td>{{ $key->created_at }}</td>
                                </tr>
                             @endforeach
                    </tbody>
                  </table>
        </div>
    </div>
</div>
</form>

@endsection
