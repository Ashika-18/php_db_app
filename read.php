<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">商品管理アプリ</a>
        </nav>
    </header>
    <manin>
        <article class="products">
            <h1>商品一覧</h1>
            <div>
                <div>
                <!-- ここに並び替えボタンと検索ボックスを設置する -->
                </div>
                <a href="#" class="btn">商品登録</a>
            </div>
            <table class="products-table">
                <tr>
                    <th>商品コード</th>
                    <th>商品名</th>
                    <th>単価</th>
                    <th>在庫数</th>
                    <th>仕入れ先コード</th>
                </tr>
                <?php
                foreach ($products as $product) {
                    $table_row = " 
                        <tr>
                        <td>{$product['procuct_code']}</td>
                        <td>{$product['product_name']}</td>
                        <td>{$product['price']}</td>
                        <td>{$product['stock_quantity']}</td>
                        <td>{$product['vendor_code']}</td>
                        </tr>
                    ";
                    echo $table_row;
                }
                ?>
            </table>
        </article>
    </main>
</body>
<footer>
    <p class="copyright">©︎商品管理アプリ ALL rights reserved.</p>
</footer>
</html>