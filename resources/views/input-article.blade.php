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
                <th scope="col" width="30%">Tags</th>
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
            <div class="container">
                <ul>
                    <li class="page-item">Halaman {{$articles->currentPage()}}</li>
                    <li class="page-item">Jumlah Data {{$articles->total()}}</li>
                    <li class="page-item">Data perhalaman {{$articles->perPage()}}</li>
                </ul>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="{{$articles->previousPageUrl()}}" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="{{$articles->currentPage()}}">{{$articles->currentPage()}}</a></li>
                      <li class="page-item">
                        <a class="page-link" href="{{$articles->nextPageUrl()}}" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </table>
@endsection

