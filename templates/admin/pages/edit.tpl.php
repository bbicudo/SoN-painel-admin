<h3 class="mb-5">Edição de Páginas</h3>

<form action="" method="POST">
    <div class="form-group mb-3">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Título da Página..." required value="<?php echo $data['page']['title']; ?>">
    </div>

    <div class="form-group mb-3">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL amigável, deixe em branco para informar a página inicial..." value="<?php echo $data['page']['url']; ?>">
        </div>
    </div>

    <div class="form-group mb-3">
        <input id="pagesBody" type="hidden" name="body" value="<?php echo htmlentities($data['page']['body']); ?>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<hr>
<a href="/admin/pages/<?php echo $data['page']['id']; ?>" class="btn btn-secondary">Voltar</a>