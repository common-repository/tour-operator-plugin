<?php 


include("video_embed.php");
$vid = new VideoEmbed([ "autoplay" => true ]);

echo $vid->get_embed("YE7VzlLtp-4");


$video_service = "vimeo"; // Defaults to "youtube"

$options = [
			"height" => 378,
			"width" => 420,
			"secure" => true
		];

echo $vid->get_embed("1084537", $video_service, $options);

	
?>