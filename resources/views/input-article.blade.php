@extends('layouts.Admin')
@section('input')



          <!-- INPUT PAGE -->
          <div class="input border-bottom">
            <form method="post" action="/article/input" data-parsley-validate novalidate>
                {{csrf_field()}}
                <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group" >
                <label for="content">Konten</label>
                <textarea class="form-control" id="content" name="content"></textarea>
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
            @foreach ($articles as $a)
            <tbody>
            <tr>
                <th >{{$a->id}}</th>
                <th >{{$a->title}}</th>
                <th >
                @foreach ($a->tags as $t)
                    {{$t->tag}},
                @endforeach
                </th>
                <th scope="row">{{$a->tags->count()}}</th>
                <td>
                    <a class="btn btn-warning" href="/article/edit/{{$a->id}}">Edit</a>
                    <a class="btn btn-danger" href="/article/delete/{{$a->id}}">Hapus</a>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
@endsection

