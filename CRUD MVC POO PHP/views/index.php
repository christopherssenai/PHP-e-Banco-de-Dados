<!-- Listagem de registros -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleints</title>
</head>
<body>
    <h1>Client list</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>ID</tr>
                <tr>Name</tr>
                <tr>Email</tr>
                <tr>Phone</tr>
            </thead>
            <tbody>
                <?php foreach($resultData as $data):?>
                    <tr>
                        <td><?= $data['id']?></td>
                        <td><?= $data['name']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['phone']?></td>
                    </tr>      
                <?php endforeach; ?>       
            </tbody>
            
        </table>
    </div>
</body>
</html>