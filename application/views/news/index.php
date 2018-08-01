<h2><?php echo $title?></h2>
<?php foreach ($news_item as $item): ?>
        <h3><?php echo $item['title'];?></h3>
        <div class="main">
                 <?php echo $item['text'];?>
        </div>
        <p><a href="<?php echo site_url('news/'.$item['slug']);?>">View article</a></p>
<?php endforeach;?>