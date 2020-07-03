<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <title>送信確認フォーム</title>
    <!-- PHP -->
    <?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    if (empty($_POST['address'])) {
        $_SESSION['address'] = "記入無し";
    } else {
        $_SESSION['address'] = $_POST['address'];
    }
    if (empty($_POST['phone'])) {
        $_SESSION['phone'] = "記入無し";
    } else {
        $_SESSION['phone'] = $_POST['phone'];
    }
    $value = $_POST['subjectR'];
    if ($value == "checkboxA") {
        $_SESSION['subject'] = "〇〇について";
    } elseif ($value == "checkboxB") {
        $_SESSION['subject'] = "△△について";
    } else {
        $_SESSION['subject'] = $_POST['subject'];
    }
    $_SESSION['main'] = $_POST['main'];
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="conrtainer left">
                <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                    お問い合わせありがとうございます。<br>
                    この内容で送信いたします。<br>
                    <table class="table" style="table-layout:fixed;">
                        <thead>
                            <th style="width:200px;"></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>[お名前]:</td>
                                <td>
                                    <?php echo $_SESSION['name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[メールアドレス]:</td>
                                <td>
                                    <?php echo $_SESSION['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[住所]:</td>
                                <td>
                                    <?php echo $_SESSION['address'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[電話番号]:</td>
                                <td>
                                    <?php echo $_SESSION['phone'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[件名]:</td>
                                <td>
                                    <?php echo $_SESSION['subject'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お問い合わせ内容]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['main']); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="sendMail.php" method="Post">
                        <button type="submit" class="btn btn-success btn-lg btn-block">送信</button>
                    </form>
                    <br>
                    <form action="edit.php" method="Post">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">編集</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
