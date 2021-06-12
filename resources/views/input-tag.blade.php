@extends('layouts.Admin')
@section('input')
          <!-- INPUT PAGE -->
          <div class="input border-bottom">
            <form method="post" action="/tag/input" data-parsley-validate novalidate>
                {{csrf_field()}}
                <div class="form-group">
                <label for="tag">TAG</label>
                <input type="text" class="form-control" id="tag" name="tag">
                </div>
                {{-- <div class="form-group" >
                <label for="article_id">ID ARTIKEL</label>
                <input class="form-control" id="article_id" name="article_id"></input>
                </div> --}}
                <div class="form-group">
                <label for="article_id">ID ARTIKEL</label>
                <select name="article_id" id="article_id">
                    @foreach ($articles as $a)
                        <option value="{{$a->id}}">{{$a->title}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-secondary waves-effect waves-light mr-1" type="submit" value="Simpan">
                        Submit
                      </button>
                </div>

            </form>
        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Judul</th>
                <th scope="col">Tags</th>
                <th scope="col">Jumlah Tag</th>
                <th scope="col"></th>
            </tr>
            </thead>
            @foreach ($tags as $t)
            <tbody>
            <tr>
                <th >{{$t->id}}</th>
                <th >{{$t->tag}}</th>
                <th >{{$t->article_id}}</th>
                <td>
                    <a class="btn btn-warning" href="/tag/edit/{{$t->id}}">Edit</a>
                    <a class="btn btn-danger" href="/tag/delete/{{$t->id}}">Hapus</a>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
@endsection

