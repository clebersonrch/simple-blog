<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
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
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, totam! Eum et recusandae culpa perspiciatis laborum aliquam architecto repudiandae.
            Consequuntur nisi repellendus libero maiores explicabo quas qui architecto expedita deleniti. Repellat exercitationem nobis reiciendis labore. 
            Consequatur a consequuntur sunt libero. Esse saepe ipsum perferendis debitis ea. Molestiae ratione tempora aspernatur iusto, beatae facere sunt quibusdam iste fugit odio 
            quis eligendi? Dolores consectetur quibusdam eligendi odit quisquam aut a harum praesentium, vero ad atque sint quasi nesciunt porro nam corrupti, quis eaque necessitatibus?
            Libero, magni vitae. Blanditiis nobis pariatur quibusdam ratione. Commodi dolorem est ut corporis minima animi, molestiae non! Culpa eaque voluptatem repudiandae dolorem 
            laudantium, distinctio error quam, minima aperiam magnam iste cupiditate impedit iusto alias repellat vel, eveniet suscipit! Explicabo quae id dignissimos non nesciunt 
            itaque numquam aliquid deserunt sapiente cumque, reprehenderit incidunt nemo, tempore repellendus vitae delectus nostrum deleniti libero provident voluptatem animi rerum voluptatibus. Deleniti, architecto distinctio.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, totam! Eum et recusandae culpa perspiciatis laborum aliquam architecto repudiandae.
            Consequuntur nisi repellendus libero maiores explicabo quas qui architecto expedita deleniti. Repellat exercitationem nobis reiciendis labore. 
            Consequatur a consequuntur sunt libero. Esse saepe ipsum perferendis debitis ea. Molestiae ratione tempora aspernatur iusto, beatae facere sunt quibusdam iste fugit odio 
            quis eligendi? Dolores consectetur quibusdam eligendi odit quisquam aut a harum praesentium, vero ad atque sint quasi nesciunt porro nam corrupti, quis eaque necessitatibus?
            Libero, magni vitae. Blanditiis nobis pariatur quibusdam ratione. Commodi dolorem est ut corporis minima animi, molestiae non! Culpa eaque voluptatem repudiandae dolorem 
            laudantium, distinctio error quam, minima aperiam magnam iste cupiditate impedit iusto alias repellat vel, eveniet suscipit! Explicabo quae id dignissimos non nesciunt 
            itaque numquam aliquid deserunt sapiente cumque, reprehenderit incidunt nemo, tempore repellendus vitae delectus nostrum deleniti libero provident voluptatem animi rerum voluptatibus. Deleniti, architecto distinctio.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categories</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>