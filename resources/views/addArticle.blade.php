@extends('layout')

@section('content')
    <div class="container bg-dark">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <form action="{{ route('addArticle') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Tytuł</label>
                            <input required type="text" class="form-control" id="title" name="title" placeholder="Tytuł">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Artykuł</label>
                            <textarea class="form-control" id="editor" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Wyślij</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            tinyMCE.init({
                selector: 'textarea#editor',
                plugins: [
                  'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                    'media', 'table', 'emoticons', 'help'
                ],
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullscreen | forecolor backcolor emoticons | help',
                menu: {
                  favs: {
                      title: "My Favorities",
                      items: 'code visualid | searchreplace | emoticons'
                  }
                },
                menubar: 'favs file edit view insert format tools table help',
                skin: false,
                content_css: false
            })

        });
    </script>
@endsection
