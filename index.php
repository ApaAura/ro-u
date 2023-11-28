<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Exemplu CRUD PHP cu MySQL</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Sistem de gestionare a cartilor</h2>

        <!-- Formular pentru adăugarea unui cartilor -->
        <form action="adauga.php" method="POST" class="mb-3">
            <div class="mb-3">
                <input type="text" class="form-control" name="nume" placeholder="Nume" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="autor" placeholder="Autor" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="pagini" placeholder="Pagini" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Adăugare</button>
            </div>
        </form>

        <!-- Tabel pentru afișarea cartilor -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Autor</th>
                    <th>Pagini</th>
                    <th>Acțiuni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conexiune.php';
                    $sql = "SELECT * FROM carti";
                ?>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nume']?></td>
                        <td><?=$row['autor']?></td>
                        <td><?=$row['pagini']?></td>
                        <td>
                            <a href='editeaza.php?id=<?=$row['id']?>' class='btn btn-warning btn-sm mr-2'>Editează</a>
                            <a href='sterge.php?id=<?=$row['id']?>' class='btn btn-danger btn-sm'>Șterge</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>