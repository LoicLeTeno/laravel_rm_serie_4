<div class="container d-flex justify-content-center align-items-center bg-primary py-5">
    <div class=" py-5">
        <div class=" py-5">
            <h1 class="text-light fw-bold text-center py-5">Veuilliez choisir une catégorie</h1>
            <h2 class="text-light fw-bold text-center py-5">(Fruits) <-------> (Légumes)</h2>
            <form action="/administration" method="GET">
                @csrf
                <label for="">Nom d'utilisateur</label>
                <input name="login" type="text" value="">
                <input type="submit" value="Connexion">
            </form>
        </div>
    </div>
</div>
