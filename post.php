<!-- Inclusão do cabeçalho -->
<?php
include_once ("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        
        if ($post['id'] == $postId) {
            $currentPost;
        }
    }
}
?>

<main id="post-container">
    <div class="container-container">
    <h1 id="main-title"><?= $currentPost['title']?></h1>
    <p id="post-description"><?= $currentPost['description']?></p>
    <div class="img-container">
        <img src="<?=$BASE_URL ?> /img/ <?=$currentPost['img']?>" alt="<?=$currentPost ['title']?>">
    </div>

    <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero deleniti, placeat nisi laborum minima aliquid. Explicabo, iusto beatae magni veritatis in atque cupiditate nobis ipsum, voluptatum mollitia sed ipsa modi.</p>
    <p class="post-container"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit fuga veritatis, molestiae rem delectus deserunt doloribus repellat perferendis fugit id corrupti sunt facere nemo suscipit excepturi qui totam nisi!</p>
    </div>

    <div class="nav-container"> 
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
         <?php foreach($currentPost['tags'] as $tag): ?>
         <li><a href="#"><?=$tag ?> </a></li>
         <?php endforeach; ?>   
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $Category ?></a></li>
        <?php endforeach; ?>   
        </ul>
        </div>
        </main>

        <!-- Inclusão do rodapé -->
        <?php 
        include_once("templates/footer.php");
        ?>