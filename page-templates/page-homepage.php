<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage MAW
 * @since MAW 1.0
 */

get_header(); ?>

<?php $fields = get_field_objects(); ?>
<div id="content">
	<div id="controls">
		<a href="javascript:void(0);" class="control next">Next</a>
		<a href="javascript:void(0);" class="control prev">Prev</a>
	</div>
	<div class="content-blocks">
		<?php foreach($fields as $key => $val) : ?>
				<?php
				if (!$val['value']) { continue; }
					switch ($val['type']) {
						case "text":
								$content = $val['value'];
							if ($val['name'] == 'maw-tours') {
								$content = '<h2>'.$val['value'].'</h2>';
								$content .= '<div class="widget">';
								$content .= '<a class="bit-widget-initializer" data-artist-name="Marcus Alan Ward" data-display-local-dates="false" data-display-past-dates="true" data-auto-style="false" data-text-color="#000000" data-link-color="#2F95DE" data-popup-background-color="#FFFFFF" data-background-color="#FFFFFF" data-display-limit="15" data-link-text-color="#FFFFFF"></a>';
								$content .= '</div>';
							}
							break;
						case "image":
							$content = '<img src="'.$val['value'].'" />';
							break;
						case "textarea":
							$content = '<div class="contact">'.$val['value'].'</div>';
							break;
						case "file":
							$content = '<video autoplay loop>';
							$content .= '<source src="'.$val['value'].'" type="video/mp4" />';
							$content .= '</video>';
							break;
						case "wysiwyg":
							$content = htmlentities($val['value']);
							break;
					}
					echo '<div class="blocks">'.$content.'</div>';
				?>
		<?php endforeach; ?>
	</div>
</div>


<?php
get_footer();
