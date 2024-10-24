<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1, .header h2 {
            margin: 0;
        }
        .header p {
            font-size: 12px;
            margin: 5px 0 0;
        }
        .section {
            margin-top: 20px;
        }
        .section h3 {
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            font-size: 16px;
            text-transform: uppercase;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .details-table th, .details-table td {
            padding: 10px;
            text-align: left;
        }
        .details-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .details-table td {
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gobierno de El Salvador</h1>
            <h2>{{ $institutionName }}</h2>
            <p>Fecha: {{ $date }}</p>
        </div>

        <div class="section">
            <h3>Detalles del Proyecto</h3>
            <table class="details-table">
                <tr>
                    <th>Id</th>
                    <td>{{ $projectData['id'] }}</td>
                </tr>
                <tr>
                    <th>Nombre del Proyecto</th>
                    <td>{{ $projectData['projectName'] }}</td>
                </tr>
                <tr>
                    <th>Fuente de Fondos</th>
                    <td>{{ $projectData['fundingSource'] }}</td>
                </tr>
                <tr>
                    <th>Monto Planificado</th>
                    <td>{{ $projectData['plannedAmount'] }}</td>
                </tr>
                <tr>
                    <th>Monto Patrocinado</th>
                    <td>{{ $projectData['sponsoredAmount'] }}</td>
                </tr>
                <tr>
                    <th>Monto Fondos Propios</th>
                    <td>{{ $projectData['ownFunds'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
