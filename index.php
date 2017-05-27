<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?>
<div class="container">
    <div class="jumbotron">
        <div style="text-align: center;">
          <!-- Replace the <p>Server Logo Here</p> with <img src="ImageLink"/> -->
          <p>Server Logo Here</p>
          <br />
            <h2><?php echo $page->lang->index_welcome1 . $page->settings->name . $page->lang->index_welcome2; ?></h2>
        </div>

        <div style="text-align: center;"><p><?php echo $page->lang->index_allsins; ?></p></div>
    </div>
    <div class="jumbotron">
        <div style="text-align: center;">
          <p>In this block, you can replace the following text with more information about the rules of your server. This is free space to inform your players on how they should treat others and how to avoid being punished.
          </p>
</div>
</div>
<?php $page->print_footer(false); ?>
