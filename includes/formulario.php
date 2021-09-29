<main>
    
    <h2 class="mt-3"><?=TITTLE?></h2>
    
    <form method="post">
        <div class="form-group">
            <label>Nome do contato</label></br>
            <input type="text" class="form" name="nome" size="52">
        </div>
        
        <div class="form-group">
            <label>Número</label></br>
            <input type="text" size="1" name="ddd">
            <input type="text" name="numero" class="form">
            <div class="form-check form-check-inline">
                    <input type="radio" name="tipo" value="m" checked>Móvel</input>
            </div>
            <div class="form-check form-check-inline">
                    <input type="radio" name="tipo" value="f">Fixo</input>
            </div>
        </div>
    </br>
    <section>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Adicionar</button>
            <a href="index.php">
                <button class="btn btn-success">Voltar</button>
            </a>
        </div>
        </section>
    </form>
</main>