@extends('layouts.Admin')
@section('input')
<div class="input border-bottom">
    <form method="post" action="/article/update/{{$articles -> id}}" data-parsley-validate novalidate>
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$articles->title}}">
        </div>
        <div class="form-group">
        <label for="content">Konten</label>
        <textarea class="form-control" id="content" name="content" value="">{{$articles->content}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-secondary waves-effect waves-light mr-1" type="submit" value="Simpan">
                Submit
              </button>
        </div>
    </form>
</div>
@endsection
