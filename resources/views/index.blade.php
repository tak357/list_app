@php($title = 'チームを探す')

@extends('layouts.app')

@section('content')
    <div class="container" id="search">
        <h1>{{ $title }}</h1>
        <section class="form-sec">
            <form action="{{ url('search') }}" method="GET">

                {{-- スポーツ --}}
                <div class="form-group">
                    <label for="sports" class="col-md-4 col-form-label text-md-left">スポーツ</label>
                    <div class="col-md-12">
                        <select name="sports" id="sports" class="form-control {{ $errors->has('sports') ? ' is-invalid' : '' }}">
                            <option value="">- 選択してください</option>
                            @foreach($sports_list as $s)
                                <option value="{{ $s->sport }}" @if($sports === $s->sport) selected @endif>{{ $s->sport }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sports'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sports') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                {{-- 登録ボタン --}}
                {{-- <div class="form-group row mb-0 pl-3 mt-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            チームを探す
                        </button>
                    </div>
                </div>
            </form>
            <form action="{{ url('search') }}" method="POST" class="reset-btn">
                @csrf
                <button type="submit" class="btn btn-danger">検索情報をリセット</button>
            </form>
        </section> --}}

        {{-- <section id="search">
            @if(count($teams) > 0)
                <h2>検索結果（{{ $teams->total() }}件）</h2>
                <h2>検索結果（{{ $sports_list->total() }}件）</h2>
                <div class="search-table">
                    <div class="search-table-header">
                        <ul class="search-list">
                            <li class="search-list-item">スポーツ</li>
                        </ul>
                    </div>
                    <div class="search-table-body">
                        @foreach($teams as $team)
                            <a href="{{url('teams/' . $team->id)}}">
                                <ul class="search-list">
                                    <li class="search-list-item">{{ $team->sports }}</li>
                                </ul>
                            </a>
                        @endforeach
                    </div>
                </div>
                {{ $teams->appends(request()->input())->links() }}
            @endif
        </section> --}}
    </div>
@endsection