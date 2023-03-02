<div class="container">
    <?php if (!empty($posts)):?>
        <?php foreach ($posts as $post):?>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"> <?= $post['title']?></h3>
                </div>
                <div class="panel-body">
                  <?= $post['text']?>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</div>