<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur incidunt dolor tempora ipsa dolore doloremque in laborum quod, doloribus voluptas dicta voluptates dignissimos vero est ducimus odio rerum eligendi eum.
        Rerum quasi doloremque itaque vero soluta magnam. Debitis dolore fugiat laudantium illo? Architecto quia ducimus, deserunt totam hic voluptates ipsum nostrum ratione quaerat, facere cum. Maiores maxime sit velit praesentium.
        Beatae aperiam obcaecati aliquam sit nihil recusandae est, accusamus doloribus quo provident incidunt repudiandae, molestias, cupiditate debitis enim ratione ad necessitatibus! Accusantium dolorum ut quis quidem aliquid eaque sed veniam.
        Eveniet saepe deleniti quisquam alias illum autem error mollitia amet iste laborum nemo maiores fugit reprehenderit earum aliquid, quibusdam at hic officiis laboriosam obcaecati. Ea optio mollitia voluptates qui soluta.
        Repellendus eaque cupiditate dolor rem reprehenderit velit commodi quidem assumenda adipisci nulla. Eligendi repudiandae repellat assumenda possimus dolores ducimus fugiat. Voluptas laboriosam aliquam culpa adipisci non officiis aperiam natus laudantium!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur incidunt dolor tempora ipsa dolore doloremque in laborum quod, doloribus voluptas dicta voluptates dignissimos vero est ducimus odio rerum eligendi eum.
        Rerum quasi doloremque itaque vero soluta magnam. Debitis dolore fugiat laudantium illo? Architecto quia ducimus, deserunt totam hic voluptates ipsum nostrum ratione quaerat, facere cum. Maiores maxime sit velit praesentium.
        Beatae aperiam obcaecati aliquam sit nihil recusandae est, accusamus doloribus quo provident incidunt repudiandae, molestias, cupiditate debitis enim ratione ad necessitatibus! Accusantium dolorum ut quis quidem aliquid eaque sed veniam.
        Eveniet saepe deleniti quisquam alias illum autem error mollitia amet iste laborum nemo maiores fugit reprehenderit earum aliquid, quibusdam at hic officiis laboriosam obcaecati. Ea optio mollitia voluptates qui soluta.
        Repellendus eaque cupiditate dolor rem reprehenderit velit commodi quidem assumenda adipisci nulla. Eligendi repudiandae repellat assumenda possimus dolores ducimus fugiat. Voluptas laboriosam aliquam culpa adipisci non officiis aperiam natus laudantium!</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php 
include_once("templates/footer.php");
?>