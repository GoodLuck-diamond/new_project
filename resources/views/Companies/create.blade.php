
            @extends('layouts.app')
            @section('content')
            <h1 class="text-center p-3">Tashkilot qo'shish</h1>
            <div class="row">
                <div class="col-md-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <form  method="post" action="{{ route('companies.store') }}" >
                @csrf
                @include('companies.form')
                   </form>
                </div>
            </div>
            @endsection
