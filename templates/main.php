<div class="container">
    <div class="text">
        <h1 align="center" style="font-size: 40px;">Добро пожаловать!!!</h1>
        <p style="font-size: 30px; margin-top: 50px;">Я приветствую вас в моем блоге, который был создан исключительно для практики на php. Так же я создавал интеренет магазин, так что можете посмотреть его в моем профиле на <a style="color: blue;" target="__blank" href="https://github.com/Regmorin?tab=repositories">GitHub</a></p>

        <h1 align="center">Популярные записи</h1>
        <div class="posts">
            <?php foreach ($posts as $post): ?>
            <div class="post-text">
                <img class="post-img" src="<?php echo $post['image']; ?>" alt="" width="220"><br>
                <h2 align="center"><?php echo $post['name']; ?></h2>
                <a href="index.php?page=biggest&id=<?php echo $post['id']; ?>" class="subm" style="margin-bottom: 20px;">Подробнее</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
