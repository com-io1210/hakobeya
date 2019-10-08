@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/admin/room">部屋一覧</a><br>
                    <a href="/admin/roommodel">部屋モデル一覧</a><br>
                    <a href="/admin/furnituremodel">家具モデル一覧</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
