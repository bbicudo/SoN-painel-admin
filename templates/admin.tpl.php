<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/resources/trix/trix.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" crossorigin="anonymous">

    <title>Painel Administrativo</title>
  </head>
  <body class="d-flex flex-column">
 
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="" class="navbar-brand">ADMIN</a>
            <span class="navbar-text">
                Painel administrativo do site
            </span>
        </nav>
    </div>

    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2 ">
                    <li class="nav-item">
                        <span class="nav-link text-white-50"><small>MENU</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link active">Páginas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link">Usuários</a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content; ?>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/resources/trix/trix.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        document.addEventListener('trix-attachment-add', function(){
            const attachment = event.attachment;

            if(!attachment.file){
                return;
            }

            const form = new FormData();

            form.append('file', attachment.file);

            $.ajax({
                url: '/admin/upload/image',
                method: 'POST',
                data:form,
                contentType: false,
                processData: false,
                xhr: function(){
                    const xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(e){
                        let progress = e.loaded / e.total * 100;
                        attachment.setUploadProgress(progress);
                    });

                    return xhr;

                }
            }).done(function(response){
                attachment.setAttributes({
                    url: response,
                    href: response
                });
            }).fail(function(){
                console.log('errado');
            });
        });

        <?php flash(); ?>

        confirmEl = document.querySelector('.confirm');

        if(confirmEl){
            confirmEl.addEventListener('click', function(e){
                e.preventDefault();
                if(confirm('Tem certeza que quer fazer isso?')){
                    window.location = e.target.getAttribute('href');
                }
            });
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>