<?php 
	class VideoEmbed {
	
		// Supported video services
		// More added later
		
		protected $services = array("vimeo", "youtube");
	
		// Video details
		
		public $video_service;
		public $video_id;
		public $video_url = "";
		
		// Settings
		
		public $secure = false;
		public $autoplay = false;
		public $width = 420;
		public $height = 315;
		
		// Constructor
		// Single array for options
		public function __construct($options = array()) {
		
			// Settings
			
			$this->secure = isset($options["secure"]) ? $options["secure"] : $this->secure;
			$this->autoplay = isset($options["autoplay"]) ? $options["autoplay"] : $this->autoplay;
			$this->width = isset($options["width"]) ? (int)$options["width"] : $this->width;
			$this->height = isset($options["height"]) ? (int)$options["height"] : $this->height;
		} 	
		
		// Generate embed code
		// Pass video_id
		// video_service (defaults to youtube)
		// options (or leave blank for defaults / constructor options
		public function get_embed($video_id, $video_service = "youtube", $options = array()) {
			
			// Video details
			
			$this->video_service = (string)$video_service;
			$this->video_id = (string)$video_id;
		
			// Settings
			
			$this->secure = isset($options["secure"]) ? $options["secure"] : $this->secure;
			$this->autoplay = isset($options["autoplay"]) ? $options["autoplay"] : $this->autoplay;
			$this->width = isset($options["width"]) ? (int)$options["width"] : $this->width;
			$this->height = isset($options["height"]) ? (int)$options["height"] : $this->height;
			
			// Generate the correct embed code
		
			if(in_array(strtolower($this->video_service), $this->services)) {
				$func_name = $this->video_service . "_embed";
				return $this->$func_name();
			}
		}
		
		// Generate YouTube embed code
		protected function youtube_embed() {
			return '<iframe src="http' . ($this->secure ? "s" : "") . '://www.youtube.com/embed/' . $this->video_id . '?rel=0'  . ($this->autoplay ? "&autoplay=1" : "") . '" width="' . $this->width . '" height="' . $this->height . '" frameborder="0" allowfullscreen></iframe>';
		}
		
		// Generate Vimeo embed code
		protected function vimeo_embed() {
			return '<iframe src="http' . ($this->secure ? "s" : "") . '://player.vimeo.com/video/' . $this->video_id . ($this->autoplay ? "?autoplay=1" : "") . '" width="' . $this->width . '" height="' . $this->height . '" frameborder="0" allowFullScreen></iframe>';
		}
	}
?>