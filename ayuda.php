<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .search {
            display: flex;
            margin-bottom: 20px;
        }
        .search input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .search button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #ccc;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #444;
        }
        .card {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
            cursor: pointer;
        }
        .card:hover {
            background-color: #f0f0f0;
        }
        .card-icon {
            margin-right: 10px;
            font-size: 18px;
            color: #ffcc00;
        }
        .card-title {
            font-weight: bold;
            color: #333;
        }
        .card-description {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¿Con qué podemos ayudarte?</h1>
        <div class="search">
            <input type="text" placeholder="Buscar en Ayuda">
            <button>Buscar</button>
        </div>
        <div class="section">
            <h2>Compras</h2>
            <div class="card">
                <span class="card-icon">🔒</span>
                <div>
                    <div class="card-title">Administrar y cancelar compras</div>
                    <div class="card-description">Pagar, seguir envíos, modificar, reclamar o cancelar compras.</div>
                </div>
            </div>
            <div class="card">
                <span class="card-icon">↩️</span>
                <div>
                    <div class="card-title">Devoluciones y reembolsos</div>
                    <div class="card-description">Devolver un producto o consultar por reintegros de dinero de una compra.</div>
                </div>
            </div>
            <div class="card">
                <span class="card-icon">❓</span>
                <div>
                    <div class="card-title">Preguntas frecuentes sobre compras</div>
                </div>
            </div>
        </div>
        <div class="section">
            <h2>Ventas</h2>
            <div class="card">
                <span class="card-icon">📊</span>
                <div>
                    <div class="card-title">Reputación, ventas y envíos</div>
                    <div class="card-description">Reclamar por tu reputación, consultar por un envío, pago o devolución.</div>
                </div>
            </div>
            <div class="card">
                <span class="card-icon">📦</span>
                <div>
                    <div class="card-title">Administrar publicaciones</div>
                    <div class="card-description">Mejorar la calidad, modificar, eliminar o resolver problemas.</div>
                </div>
            </div>
            <div class="card">
                <span class="card-icon">❓</span>
                <div>
                    <div class="card-title">Preguntas frecuentes sobre ventas</div>
                </div>
            </div>
        </div>
        <div class="section">
            <h2>Ayuda sobre tu cuenta</h2>
            <div class="card">
                <span class="card-icon">⚙️</span>
                <div>
                    <div class="card-title">Configuración de mi cuenta</div>
                </div>
            </div>
            <div class="card">
                <span class="card-icon">🔒</span>
                <div>
                    <div class="card-title">Seguridad y acceso a la cuenta</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
