<main>
    
    <h2 class="mt-3">Excluir contato</h2>
    
    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir o contato <strong><?=$obContat->nome?></strong>?</p>
        </div>    
    <section>
        <div class="form-group">
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
        </div>
        </section>
    </form>
</main>