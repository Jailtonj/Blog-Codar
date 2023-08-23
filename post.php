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
      <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quisquam nihil eaque distinctio corporis quos, officiis possimus, ut impedit rem molestias veniam facere maiores pariatur aliquid necessitatibus deleniti tempore nulla.
      Officia minima ad voluptatibus est cupiditate molestias culpa, debitis, sapiente deserunt harum sint laboriosam voluptas autem sed non eum libero recusandae quam voluptatem? Aspernatur ratione quasi sapiente saepe est voluptatibus!
      Sequi porro ratione nesciunt aspernatur, ad esse perspiciatis aliquam cum iusto ut magni quisquam, adipisci, neque ipsa. Rerum voluptatum laboriosam adipisci! Nostrum nobis nisi quod? Eaque iure saepe excepturi adipisci!
      Dolor quis accusamus eaque doloremque iusto. Qui perspiciatis nemo aut sunt dolorum ut dolorem ipsum, sapiente odio fugiat vitae facilis quo culpa iure, architecto hic. Facilis reiciendis quam nesciunt quod!
      Voluptatem, maxime quae neque voluptatibus perferendis, quaerat necessitatibus porro eligendi voluptatum ipsa alias exercitationem omnis saepe illum dignissimos harum delectus, possimus repellendus similique enim iste quisquam molestias excepturi veritatis! Voluptatum!</p>
      <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quisquam nihil eaque distinctio corporis quos, officiis possimus, ut impedit rem molestias veniam facere maiores pariatur aliquid necessitatibus deleniti tempore nulla.
      Officia minima ad voluptatibus est cupiditate molestias culpa, debitis, sapiente deserunt harum sint laboriosam voluptas autem sed non eum libero recusandae quam voluptatem? Aspernatur ratione quasi sapiente saepe est voluptatibus!
      Sequi porro ratione nesciunt aspernatur, ad esse perspiciatis aliquam cum iusto ut magni quisquam, adipisci, neque ipsa. Rerum voluptatum laboriosam adipisci! Nostrum nobis nisi quod? Eaque iure saepe excepturi adipisci!
      Dolor quis accusamus eaque doloremque iusto. Qui perspiciatis nemo aut sunt dolorum ut dolorem ipsum, sapiente odio fugiat vitae facilis quo culpa iure, architecto hic. Facilis reiciendis quam nesciunt quod!
      Voluptatem, maxime quae neque voluptatibus perferendis, quaerat necessitatibus porro eligendi voluptatum ipsa alias exercitationem omnis saepe illum dignissimos harum delectus, possimus repellendus similique enim iste quisquam molestias excepturi veritatis! Voluptatum!</p>
    </div>
      <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
          <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
          <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
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
