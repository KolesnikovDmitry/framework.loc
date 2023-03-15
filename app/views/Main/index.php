<div class="container">
    <ul class="nav nav-pills">
    <?php foreach ($menu as $item): ?>
        <li><a href="category/<?=$item['id']?>"><?= $item['title']?></a></li>
    <?php endforeach; ?>
    </ul>
    <?php if (!empty
            ($posts)):?> 
        <?php foreach ($posts as $post):?>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"> <?= $post['title']?></h3>
                </div>
                <div class="panel-body">
                  <?= $post['excerpt']?>
                    <div class="panel-body">
                        <?= $post['text']?>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</div>