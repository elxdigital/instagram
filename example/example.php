<?php

require __DIR__ . "/../vendor/autoload.php";

define('INSTAGRAM_TOKEN', '<YOUR_TOKEN help="manual.md"/>');

$instagram = new ElxDigital\Instagram\Services\Media(INSTAGRAM_TOKEN);
$medias = $instagram->getMedia();

if (!empty($medias)) {
    foreach ($medias as $media) {
        if ($media->media_type == 'IMAGE') {
            echo "<img src='{$media->media_url}' alt='{$media->caption}' width='200'>";
        }
    }
}
