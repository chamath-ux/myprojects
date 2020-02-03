

<?php foreach ($posts as $news_item): ?>
				 <h3><?php echo $news_item['name']; ?></h3>
                <?php echo $news_item['description']; ?>

				
<?php endforeach; ?>
