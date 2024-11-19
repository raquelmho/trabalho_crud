
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Makes By Cris Martins</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Produto', 'Valor'],
                <?php echo $chartData; ?>
            ]);

            var options = {
                title: 'Distribuição de Produtos por Faixa de Preço',
                pieHole: 0.4,
                colors: ['#4CAF50', '#FF5722']
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>

</head>
<body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
</body>
</html>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="logomarca.jpg" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                Makes By Cris Martins
            </a>
        </div>
    </nav>
    <div class="container text-center col-md-8 offset-lg-3">
        <div class="row col-md-8">
            <p class="fs-1">Bem vindo(a)!</p>
        </div>
        <div class="row">
            <div class="col col-md-4">
                <a class="btn btn-outline-success d-grid gap-1 fs-2 fs-3" style="height: 160px;" href="cadprod.php"><i class="bi bi-plus-circle-fill" style="font-size: 3rem;"></i> <div style="margin-top: -2rem !important">
                    Cadastrar produtos
                </div> </a>
            </div>
            <div class="col col-md-4">
                <a class="btn btn-outline-danger d-grid gap-1 fs-2 " style="height: 160px;" href="venda.php"><i class="bi bi-bag-check-fill "style="font-size: 3rem;"></i><div style="margin-top: -2rem !important">
                    Estoque
                </div></a>
            </div>
        </div>
        
        <div class="row mt-5">
            <div id="chart_div" style="width: 100%; height: 500px;"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro"; // Nome do banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inicializar contadores
$below50 = 0;
$above50 = 0;

// Consulta ao banco de dados para buscar valores dos produtos
$sql = "SELECT valor FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $preco = $row['valor'];
        if ($preco <= 50) {
            $below50++;
        } else {
            $above50++;
        }
    }
} else {
    echo "Nenhum produto encontrado na tabela.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Produtos</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Carregar o Google Charts
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Categoria', 'Quantidade'],
                ['Abaixo de $50', <?php echo $below50; ?>],
                ['Acima de $50', <?php echo $above50; ?>]
            ]);

            var options = {
                title: 'Distribuição de Produtos por Faixa de Preço',
                pieHole: 0.4,
                colors: ['#4CAF50', '#FF5722']
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>
