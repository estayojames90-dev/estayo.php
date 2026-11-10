<?php
require_once __DIR__ . "/data.php";
require_once __DIR__ . "/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estayo Product Catalog</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            margin: 0;
            padding: 40px 20px;
            color: #1e293b;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .header {
            text-align: center;
            margin-bottom: 35px;
            color: #fff;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 2.4rem;
            letter-spacing: 1px;
            color: #f8fafc;
        }

        .header .description {
            margin: 0;
            color: #cbd5e1;
            font-size: 1.05rem;
        }

        .summary-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .summary {
            background: linear-gradient(90deg, #f59e0b, #f97316);
            color: #111827;
            padding: 12px 28px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: 0 8px 20px rgba(249, 115, 22, 0.35);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 24px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.18);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 35px rgba(0, 0, 0, 0.25);
        }

        .card-image {
            background: #f1f5f9;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
        }

        .card-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 8px;
        }

        .no-image {
            color: #94a3b8;
            font-size: 14px;
        }

        .card-body {
            padding: 18px 18px 20px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .badge-id {
            display: inline-block;
            align-self: flex-start;
            background: #e2e8f0;
            color: #334155;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 999px;
            margin-bottom: 10px;
        }

        .card-title {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #0f172a;
            line-height: 1.3;
        }

        .card-category {
            margin: 0 0 16px;
            color: #64748b;
            font-size: 0.95rem;
        }

        .card-meta {
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .price {
            font-size: 1.2rem;
            font-weight: 700;
            color: #0f766e;
        }

        .stock {
            font-size: 0.85rem;
            font-weight: 600;
            padding: 6px 10px;
            border-radius: 8px;
        }

        .stock.high {
            background: #dcfce7;
            color: #166534;
        }

        .stock.medium {
            background: #fef3c7;
            color: #92400e;
        }

        .stock.low {
            background: #fee2e2;
            color: #991b1b;
        }

        .empty {
            grid-column: 1 / -1;
            text-align: center;
            color: #e2e8f0;
            padding: 40px;
            background: rgba(255,255,255,0.05);
            border-radius: 12px;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            color: #94a3b8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 12px;
            }

            .header h1 {
                font-size: 1.8rem;
            }

            .card-image {
                height: 180px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <header class="header">
        <h1>Estayo</h1>
        <p class="description">Product Information Catalog</p>
    </header>

    <div class="summary-bar">
        <div class="summary">Total Products: <?php echo countProducts($products); ?></div>
    </div>

    <main class="grid">
        <?php displayProducts($products); ?>
    </main>

    <div class="footer">
        Estayo Product Catalog | PHP Activity
    </div>

</div>

</body>
</html>
