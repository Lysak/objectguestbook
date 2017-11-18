<?php include ROOT . '/views/layouts/header.php'; ?>
    <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/template/img/news/1.jpg" alt="IMG1">
        </div>

        <div class="item">
          <img src="/template/img/news/2.jpg" alt="IMG2">
        </div>

        <div class="item">
          <img src="/template/img/news/3.jpg" alt="IMG3">
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->
</header>

  <div class="jumbotron">
      <h1>GUEST BOOK</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consequatur voluptate delectus eveniet quo. Tempore!</p>
  </div>
  <div id="comments-form">
        <h3>Please add your comment</h3>
        <form method="POST">
            <div>
                <?php if (!isset($_SESSION['user_id'])) { ?>
                    <div class="form-group">
                        <label for="usr">Username</label>
                        <input type="text" class="form-control" id="usr" name="unknownUser">
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="pwd">Comment</label>
                    <textarea type="password" class="form-control" id="pwd" id="minmessage" name="comment"></textarea>
                </div>
            </div>
            <div>
                <button class="btn btn-default" id="submit" type="submit" name="submit" value="Save">Submit</button>
            </div>
        </form>
    </div>
    <div>
    <?php /** @var $comments */
    foreach ($comments as $newsItem):?>
      <div class="col-lg-12 six">
        <div class="thumbnail">
          <h4><?php echo mb_strimwidth($newsItem['user_name'], 0, 37, "...");?></h4>
          <!-- <div class="center"><img src="/template/img/news/<?php echo $newsItem['id'];?>.jpg"></div> -->
          <p><?php echo mb_strimwidth($newsItem['comment'], 0, 40, "...");?></p>
          <p align="center"><strong>Date: <?php echo $newsItem['created_at'];?></strong></p>
          <!-- <p align="center"><a href="/blog/<?php echo $newsItem['id'];?>" class="btn btn-primary" role="button">Читати</a></p> -->
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- <div class="paginate">
    <ul class="pagination justify-content-center">
    <?php if ($count_pages > 1) { ?>
        <?php if ($page == 1) { ?>
            <li class="page-item disabled">
                <a class="page-link" tabindex="">Prev</a>
            </li>
        <?php } else { ?>
            <?php if ($prev == 1) { ?>
                <li class="page-item">
                    <a class="page-link" href="" tabindex="">Prev</a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="/index/?page=<?php echo $prev; ?>" tabindex="">Prev</a>
                </li>
            <?php } ?>
        <?php } ?>
        <?php for ($i = 1; $i <= $count_pages; $i++) { ?>
            <?php if ($i == 1) { ?>
                <li class="page-item"><a class="page-link" href="/"><?php echo $i; ?></a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link" href="/index/?page=<?php echo $i; ?>"><?php echo $i ?></a></li>
            <?php } ?>
        <?php } ?>
        <?php if ($page == $count_pages) { ?>
            <li class="page-item disabled">
                <a class="page-link">Next</a>
            </li>
        <?php } ?>
        <?php if ($page != $count_pages) { ?>
            <li class="page-item">
              <a class="page-link" href="/index/?page=<?php echo $next; ?>">Next</a>
            </li>
        <?php } ?>
    <?php } ?>
    </ul>
  </div>  -->

<?php include ROOT . '/views/layouts/footer.php'; ?>