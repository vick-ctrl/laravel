<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5e6c8;
            background-image: url('https://www.transparenttextures.com/patterns/leopard.png');
        }

        /* CARD */
        .card-custom {
            border-radius: 25px;
            overflow: hidden;
            border: 3px solid #3b2f2f;
            box-shadow: 0 0 25px rgba(0,0,0,0.3);
        }

        /* HEADER */
        .card-header {
            background: linear-gradient(45deg, #3b2f2f, #8b5e3c);
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            letter-spacing: 2px;
            position: relative;
        }

        /* detalhe animal print no header */
        .card-header::after {
            content: "🐆🐆🐆";
            position: absolute;
            right: 15px;
            top: 5px;
            font-size: 20px;
        }

        /* TABELA */
        .table {
            border-radius: 15px;
            overflow: hidden;
        }

        .table thead {
            background-color: #3b2f2f;
            color: white;
        }

        .table tbody tr {
            transition: 0.3s;
        }

        .table tbody tr:hover {
            background: linear-gradient(45deg, #f0d9b5, #e6c89c);
            transform: scale(1.01);
        }

        /* ZEBRADO ANIMAL PRINT */
        .table tbody tr:nth-child(odd) {
            background-color: #fff8e7;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f5e6c8;
        }

        /* BOTÕES */
        .btn-danger {
            background: linear-gradient(45deg, #8b0000, #b22222);
            border: none;
            border-radius: 20px;
            transition: 0.3s;
        }

        .btn-warning {
            background: linear-gradient(45deg, #d4a017, #ffcc00);
            border: none;
            border-radius: 20px;
            color: black;
            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(0,0,0,0.4);
        }

        /* TÍTULO */
        h4 {
            font-family: 'Georgia', serif;
        }

        /* BADGE DECORATIVO */
        .badge-onca {
            background-color: #3b2f2f;
            color: #f5e6c8;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 0.8rem;
        }

        /* RODAPÉ DECORATIVO */
        .footer-onca {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #3b2f2f;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card card-custom">

        <div class="card-header">
            🐆 Lista de Produtos 🐆
        </div>

        <div class="card-body bg-white">

            <div class="mb-3 text-end">
                <span class="badge-onca">Estilo Onça Fashion</span>
            </div>

            <div class="table-responsive">
                <table class="table text-center align-middle">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço (R$)</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td><strong>#{{ $produto['id'] }}</strong></td>
                            <td>{{ $produto['nome'] }}</td>
                            <td><span class="badge bg-dark">R$ {{ number_format($produto['preco'], 2, ',', '.') }}</span></td>
                            <td>
                                <button class="btn btn-danger btn-sm">🐾 Remover</button>
                                <button class="btn btn-warning btn-sm">✨ Editar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="footer-onca">
                🐆 Sistema estilizado com Animal Print 🐆
            </div>

        </div>
    </div>

</div>

</body>
</html>