@extends('layouts.app')

@section('content')
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
            {{ print_r $errors }}
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
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection
