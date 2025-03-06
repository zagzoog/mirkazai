<?php
	$splitted_text = '';

	$words = explode(' ', $text);
	$transition_delay = '';

	$i = 0;
	foreach ( $words as $key => $word ) {
		$space = $key > 0 ? '&nbsp;' : '';
		if ( $transitionDelayStart > 0 || $transitionDelayStep > 0 ) {
			$transition_delay = 'transition-delay:' . $transitionDelayStart + ($i * $transitionDelayStep) . 's';
		}
		$splitted_text .= sprintf( '%2$s<span class="inline-flex lqd-split-text-words [background:inherit]" style="%3$s">%1$s</span>', $word, $space, $transition_delay );
		$i++;
	}
?>

<?php echo $splitted_text; ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/split-words.blade.php ENDPATH**/ ?>