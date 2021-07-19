<!DOCTYPE html>
<html>
    <head>
        <title>Telefone Jumia</title>

        <!-- Importing from CDN just for test purpose -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid">
            <h1>Números de telefone</h1>
            
            <form method="GET" action="/">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Selecionar o país</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="country">
                                    <option value="">Selecionar país</option>
                                    <option value="Morocco">Morrocos</option>
                                    <option value="Mozambique">Moçambique</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ethiopia">Etiópia</option>
                                    <option value="Cameroon">Camarões</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Status Telefone</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="state">
                                    <option value="">Selecionar Status</option>
                                    <option value="true">Válido</option>
                                    <option value="false">Inválido</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <button type="submit" class="btn btn-primary">Filtro</button>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">País</th>
                            <th scope="col">Status</th>
                            <th scope="col">Código país</th>
                            <th scope="col">Número telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($phones as $tel) : ?>
                        <tr>
                            <td><?= $tel['country'] ?></td>
                            <td><?= $tel['state'] == "true" ? 'OK' : 'NOK' ?></td>
                            <td><?= $tel['code'] ?></td>
                            <td><?= $tel['number'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>

        <!-- Importing from CDN just for test purpose -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>