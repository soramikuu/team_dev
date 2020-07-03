<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHPでお問い合わせフォームを作ろう！</title>
</head>

<body>
    <form class="mailForm" action="mail.php" method="post">
        <p>お気軽にお問い合わせください。</p>
        <dl>
            <dt>お名前</dt>
            <dd>
                <input name="name" type="text" required="required" id="name">
            </dd>
            <dt>メールアドレス</dt>
            <dd>
                <input name="email" type="email" required="required" id="email">
            </dd>
            <dt>お問い合わせ内容</dt>
            <dd>
                <textarea name="content" required="required" id="content"></textarea>
            </dd>
            <input type="hidden" id="token" name="token" value="1234567" />
        </dl>
        <p id="submit_button_cover">
            <input name="submit_buton" type="submit" id="submit_button" value="送信">
        </p>
    </form>
</body>

</html>
