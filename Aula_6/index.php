<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>
            Adicionar produtos
        </h1>
        <form action="adicionar_produtos.php" method="post">
            <div>
                <label for='nome' >Nome do produto</label>
                <input tipe='text' name='nome' id='nome'>
            </div>
            <div>
                <label for='valor' >Valor do produto</label>
                <input tipe='number' name='valor' id='valor'>
            </div>
            <div>
                <label for='quantidade' >Quantidade do produto</label>
                <input tipe='number' name='quantidade' id='quantidade'>
            </div>
            <div>
                 <button tipe='submit'>Adicionar</button>
                 <button tipe='reset'>Limpar</button>
            </div>
        </form>
    </main>
</body>
</html>