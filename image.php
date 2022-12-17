<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('123.jpg');

$img->resize(200, null, function (\Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$img->text('HORUS - Ragnarok and period', 150, 25, function (\Intervention\Image\AbstractFont $font) {
    $font->size(30);
    $font->color([107, 3, 4]);
    $font->align('right');
    $font->valign('bottom');
});

$img->save('test.jpg');

echo $img->response('jpg');