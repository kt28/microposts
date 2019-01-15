<?php
    if (array_key_exists('company', $_POST)) {
        $company = $_POST['company'];
    }
    if (array_key_exists('name', $_POST)) {
        $name = $_POST['name'];
    }
    if (array_key_exists('mail', $_POST)) {
        $mail = $_POST['mail'];
    }
    if (array_key_exists('tel', $_POST)) {
        $tel = $_POST['tel'];
    }
    if (array_key_exists('content', $_POST)) {
        $content = $_POST['content'];
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>送信完了 | サンプル株式会社</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a href="#" class="navbar-brand">サンプル株式会社</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">会社情報</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">ニュース</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">採用情報</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link">お問い合わせ</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        </header>
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
            <p>ありがとうございました。送信を受け付けました。</p>
            <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
            
            <div>
                <h3>送信内容</h3>
                <table class="table">
                    <tr>
                        <th>会社名</th>
                        <td><?php print htmlspecialchars($company, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td><?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>メール</th>
                        <td><?php print htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><?php print htmlspecialchars($tel, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>内容</th>
                        <td><?php echo nl2br(htmlspecialchars($content, ENT_QUOTES, "UTF-8")); ?></td>
                    </tr>
                </table>
            </div>
                
            <div class="text-center mb-4">
                <a href="contact.php" class="btn btn-success">戻る</a>
            </div>
        </div>
        <footer class="text-center pt-3 border-top">
            &copy; 2018 SAMPLE Inc.
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    </body>
</html>