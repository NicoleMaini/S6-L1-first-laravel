@include('partials.header')
@include('partials.nav')

<div class="container mt-5">
    <h2 class="my-5 text-center">Modifica il prodotto</h2>
    <form class="mb-5" action="" method="post">
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="image" value="">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="mb-3">
            <label for="fragrances" class="form-label">Fragranza</label>
            <input type="text" class="form-control" name="fragrances" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione </label>
            <textarea class="form-control" name="description" rows="3" value=""></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" value="">
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="submit" class="ms-2 btn btn-outline-danger">Elimina</button>
        </div>
    </form>
</div>

@include('partials.footer')