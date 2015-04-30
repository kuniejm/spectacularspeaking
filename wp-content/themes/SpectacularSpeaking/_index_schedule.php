<?php 
// NOTE
// Required variables:
// $day_number [integer]

$posts = get_posts(Array(
	'posts_per_page' => -1,
	'post_type' => 'agenda_entry',
	'meta_key' => 'day_number',
	'meta_value' => $day_number
));	

// Sort posts by their start_time in ascending order.
usort($posts, function($aPost, $bPost) {
	$aTime = get_field("start_time", $aPost->ID) ?: "24:00";
	$bTime = get_field("start_time", $bPost->ID) ?: "24:00";

	list($aHours, $aMinutes) = explode(":", $aTime);
	list($bHours, $bMinutes) = explode(":", $bTime);
	$aTime = $aHours * 60 + $aMinutes;
	$bTime = $bHours * 60 + $bMinutes;

	if ($aTime == $bTime) {
		return 0;
	}

	return ($aTime < $bTime) ? -1 : 1;
});

if (empty($posts)) {
	return;
}
?>

<div class="schedule-overview">
	<div class="schedule-overview-title">
		<?php 
		switch ($day_number) {
			case 1:
				echo "Day One - Friday, 13 March 2015";
				break;
			
			case 2:
				echo "Day Two - Saturday, 14 March 2015";
				break;
		}
		?>
	</div>
	<ul class="schedule-list">
		<?php foreach ($posts as $post): setup_postdata($post); ?>
			<li>
				<a <?= (get_field("speaker") ? ("href='" . esc_attr(get_field("speaker")) . "'") : "") ?> >
					<div class="schedule-title">
						<span class="time"><?php echo implode(" - ", array_filter([the_field("start_time"), the_field("end_time")])); ?></span>
						<span class="title"><?php the_title(); ?></span>
					</div>
					
					<?php if (get_field("short_description")): ?>
						<div class="schedule-text">
							<?php the_field("short_description"); ?>
						</div>
					<?php endif ?>
					
					<div class="marker-pin">
						<div class="top"></div>
						<div class="middle"></div>
						<div class="bottom"></div>
					</div>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>