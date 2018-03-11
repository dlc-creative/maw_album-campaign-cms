<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage MAW
 * @since MAW 1.0
 */

get_header(); ?>

<?php $fields = get_field_objects();
$end = end($fields);
if ($end['type'] == 'link_picker') {
	array_unshift($fields, $end);
}

?>
<div id="content">
	<div id="controls">
		<a href="javascript:void(0);" class="control next">Next</a>
		<a href="javascript:void(0);" class="control prev">Prev</a>
	</div>
	<div class="content-blocks">
		<?php foreach($fields as $key => $val) : ?>
				<?php
				if (!$val['value']) { continue; }
				$disableScroll = ($val['type'] == 'image' || $val['type'] == 'link_picker' || $val['type'] == 'file') ? 'disable-scroll' : '';
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
							$cta = ($val['name'] == 'maw-image') ? '<div id="cast"><a href="/shop/">Purchase</a></div>' : '';
							$content = $cta.'<img src="'.$val['value'].'" />';
							break;
						case "textarea":
							$content = '<h2>'.ucwords($val['name']).'</h2>';
							$content .= '<div class="contact">'.$val['value'].'</div>';
							break;
						case "link_picker":
							$content = '<iframe width="560" height="315" src="'.trim($val['value']['url']).'?showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
							break;
						case "file":
							$content = '<video autoplay loop controls>';
							$content .= '<source src="'.$val['value'].'" type="video/mp4" />';
							$content .= '</video>';
							break;
						case "wysiwyg":
							$content = htmlentities($val['value']);
							break;
					}
					echo '<div class="blocks '.$disableScroll.'">'.$content.'</div>';
				?>
		<?php endforeach; ?>
		<div class="blocks social">
			<h2>connect</h2>
			<div class="social-row">
				<a href="https://facebook.com/MarcusAlanWard" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/MarcusAlanWard/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/MarcusAlanWard" target="_blank"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="social-row">
				<a href="https://soundcloud.com/marcusalanward" target="_blank"><i class="fa fa-soundcloud"></i></a>
				<a href="https://open.spotify.com/artist/7vaVHucaokI1K9NDZUqcB2" target="_blank"><i class="fa fa-spotify"></i></a>
				<a href="https://itunes.apple.com/us/artist/marcus-alan-ward/id897911212" target="_blank"><i class="fa fa-apple"></i></a>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
