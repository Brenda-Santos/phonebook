@extends('layouts.app')

@section('content')

<style media="screen">
    .img-avatar-xs {
        width: 30px;
        height: 30px;
        border: 1px solid #c0c0c0;
        border-radius: 5px;
    }
    .a-line {
        line-height: 30px;
    }
</style>

@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Contatos
            <a href="{{ url('contact/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                <a href="{{ url('contacts/'.$contact->id) }}">
                                    <img src="{{ $contact->avatar_image }}" class="img-avatar-xs">
                                </a>
                            </td>
                            <td><a class='a-line' href="{{ url('contacts/'.$contact->id) }}">{{ $contact->name }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contacts/'.$contact->id) }}">{{ $contact->numer }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contacts/'.$contact->id) }}">{{ $contact->email }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection