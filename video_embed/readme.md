# Video embed

Take a Youtube or Vimeo video ID and return the html embed code.

## Basic example

```php
include("video_embed.php");

$vid = new VideoEmbed();

echo $vid->get_embed("YE7VzlLtp-4");
```
Generates:

```html
<iframe src="http://www.youtube.com/embed/YE7VzlLtp-4?rel=0" width="420" height="315" frameborder="0" allowfullscreen></iframe>
```

## Options

Options can be passed to the constructor and/or the video_embed method, generating embeds for multiple videos in a page this flexibility allows options to be overridden on a per video basis.

### Passing options to the video_embed method

```php
include("video_embed.php");

$vid = new VideoEmbed();

$video_service = "vimeo"; // Defaults to "youtube"

$options = [
			"width" => 504,
			"height" => 378,
			"secure" => true
		];

echo $vid->get_embed("1084537", $video_service, $options);
```
Generates:

```html
<iframe src="https://player.vimeo.com/video/1084537" width="504" height="378" frameborder="0" allowFullScreen></iframe>
```

### Overriding options for a specific video

```php
include("video_embed.php");

// In the call to the constructor, set the default to secure

$vid = new VideoEmbed( [ "secure" => true ] );

// First video: Will be secure but otherwise use defaults

echo $vid->get_embed("YE7VzlLtp-4");

// Second video: Vimeo, change height, width and set to autoplay

$video_service = "vimeo";

$options = [
			"width" => 504,
			"height" => 378,
			"autoplay" => true
		];

echo $vid->get_embed("1084537", $video_service, $options);
```
Generates:

```html
<iframe src="https://www.youtube.com/embed/YE7VzlLtp-4?rel=0" width="420" height="315" frameborder="0" allowfullscreen></iframe>
<iframe src="https://player.vimeo.com/video/1084537?autoplay=1" width="504" height="378" frameborder="0" allowFullScreen></iframe>
```



