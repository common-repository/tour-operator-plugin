<?php

class tourMapBox extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Tour Map', array('description' => 'Displays the starting point stored in TourCMS using Mapbox. Only visible on Tour/Hotel pages.'));	
	}
	
	function widget($args, $instance) {
		global $post;
		
		// Check that this is a "tour" and that it has a start location saved
		// at the time of writing all Tours in TourCMS must have a start location
		if(is_single() && get_query_var('post_type') == 'tour') {
			$start = get_post_meta($post->ID, 'tourcms_wp_geocode_start', true );
			if(strlen($start)>0) {
				$do_output = true;	
				$startBits = explode(",", $start);
				$start = implode(",", [$startBits[1], $startBits[0]]);
			}
			else
				$do_output = false;			
		} else {
			$do_output = false;
		}
		
		if($do_output) {
			extract($args);
			echo $before_widget;
			$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
			if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
			?>
			<div id="<?php echo $widget_id."-map"; ?>" class=""></div>
			<script type="text/javascript">
				jQuery(document).ready(function() {
					var mapwidth = jQuery('#<?php echo $widget_id."-map"; ?>').width();
					
					jQuery('#<?php echo $widget_id."-map"; ?>').append('<iframe />');
					var tcmsmapframe = jQuery('#<?php echo $widget_id."-map"; ?> iframe');
					
					tcmsmapframe.width(mapwidth);
					
					var tcmsmapurl = "<?php echo plugins_url( 'map.php', __FILE__ ); ?>?width=" + mapwidth + '&height=' + tcmsmapframe.height() + '&zoomlevel=' + "<?php echo $instance['zoomlevel']; ?>" + '&apikey=' + "<?php echo $instance['apikey']; ?>" + '&latlng=' + "<?php echo $start; ?>" + '&style=' + "<?php echo $instance['style']; ?>";
					tcmsmapframe.attr('src', tcmsmapurl); 
					tcmsmapframe.attr('frameBorder', 0); 
				});
				
				
			</script>
			<?php
			echo $after_widget;
		}
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['apikey'] = strip_tags($new_instance['apikey']);
		$instance['zoomlevel'] = strip_tags($new_instance['zoomlevel']);
		$instance['style'] = strip_tags($new_instance['style']);
		return $instance;
	}
	
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => 'Tour Location', 'apikey' => '', 'zoomlevel' => '5') );
		$title = strip_tags($instance['title']);
		$apikey = strip_tags($instance['apikey']);
		$style = strip_tags($instance['style']);
		$zoomlevel = strip_tags($instance['zoomlevel']);
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
		
		<p><label for="<?php echo $this->get_field_id('zoomlevel'); ?>">Zoom level: 
		<select class="widefat" id="<?php echo $this->get_field_id('zoomlevel'); ?>" name="<?php echo $this->get_field_name('zoomlevel'); ?>">
			<?php
				for($i=1; $i<=18; $i++) {
					echo '<option value="'.$i.'"';
					if($i==(int)$zoomlevel)
						echo ' selected="selected"';
					echo '>'.$i;
					if($i==7)
						echo ' (Default)';
					echo '</option>';
				}
			?>
		</select>
		</label></p>
		<p><label for="<?php echo $this->get_field_id('apikey'); ?>">Mapbox API Key: <input class="widefat" id="<?php echo $this->get_field_id('apikey'); ?>" name="<?php echo $this->get_field_name('apikey'); ?>" type="text" value="<?php echo esc_attr($apikey); ?>" /></label><a href="https://www.mapbox.com/" target="_blank">Get a key</a></p>
		<p><label for="<?php echo $this->get_field_id('style'); ?>">Mapbox style (optional, defaults to TourCMS style): <input class="widefat" id="<?php echo $this->get_field_id('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" type="text" value="<?php echo esc_attr($style); ?>" /></label></p>
		<?php
	}
}

add_action('widgets_init', function( $output ) { return register_widget("tourMapBox"); } );
?>