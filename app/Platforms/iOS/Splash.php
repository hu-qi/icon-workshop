<?php
/**
 * Created by PhpStorm.
 * User: hans
 * Date: 2019/1/31
 * Time: 18:52
 */

namespace App\Platforms\iOS;


use App\Platforms\BaseSplash;

class Splash extends BaseSplash
{

    public function getSizes()
    {
        return [
            [
                'extent'                 => 'full-screen',
                'idiom'                  => 'iphone',
                'subtype'                => '2436h',
                'filename'               => 'Default-2436h.png',
                'minimum-system-version' => '11.0',
                'orientation'            => 'portrait',
                'scale'                  => '3x',
                'width'                  => 1125,
                'height'                 => 2436,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'extent'                 => 'full-screen',
                'idiom'                  => 'iphone',
                'subtype'                => '2436h',
                'filename'               => 'Default-Landscape-2436h.png',
                'minimum-system-version' => '11.0',
                'orientation'            => 'landscape',
                'scale'                  => '3x',
                'width'                  => 2436,
                'height'                 => 1125,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'extent'                 => 'full-screen',
                'idiom'                  => 'iphone',
                'subtype'                => '736h',
                'filename'               => 'Default-736h.png',
                'minimum-system-version' => '8.0',
                'orientation'            => 'portrait',
                'scale'                  => '3x',
                'width'                  => 1242,
                'height'                 => 2208,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'extent'                 => 'full-screen',
                'idiom'                  => 'iphone',
                'subtype'                => '736h',
                'filename'               => 'Default-Landscape-736h.png',
                'minimum-system-version' => '8.0',
                'orientation'            => 'landscape',
                'scale'                  => '3x',
                'width'                  => 2208,
                'height'                 => 1242,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'extent'                 => 'full-screen',
                'idiom'                  => 'iphone',
                'subtype'                => '667h',
                'filename'               => 'Default-667h.png',
                'minimum-system-version' => '8.0',
                'orientation'            => 'portrait',
                'scale'                  => '2x',
                'width'                  => 750,
                'height'                 => 1334,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'orientation'            => 'portrait',
                'idiom'                  => 'iphone',
                'filename'               => 'Default@2x~iphone.png',
                'extent'                 => 'full-screen',
                'minimum-system-version' => '7.0',
                'scale'                  => '2x',
                'width'                  => 640,
                'height'                 => 960,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'extent'                 => 'full-screen',
                'idiom'                  => 'iphone',
                'subtype'                => 'retina4',
                'filename'               => 'Default-568h@2x~iphone.png',
                'minimum-system-version' => '7.0',
                'orientation'            => 'portrait',
                'scale'                  => '2x',
                'width'                  => 640,
                'height'                 => 1136,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'orientation'            => 'portrait',
                'idiom'                  => 'ipad',
                'filename'               => 'Default-Portrait~ipad.png',
                'extent'                 => 'full-screen',
                'minimum-system-version' => '7.0',
                'scale'                  => '1x',
                'width'                  => 768,
                'height'                 => 1024,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'orientation'            => 'landscape',
                'idiom'                  => 'ipad',
                'filename'               => 'Default-Landscape~ipad.png',
                'extent'                 => 'full-screen',
                'minimum-system-version' => '7.0',
                'scale'                  => '1x',
                'width'                  => 1024,
                'height'                 => 768,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'orientation'            => 'portrait',
                'idiom'                  => 'ipad',
                'filename'               => 'Default-Portrait@2x~ipad.png',
                'extent'                 => 'full-screen',
                'minimum-system-version' => '7.0',
                'scale'                  => '2x',
                'width'                  => 1536,
                'height'                 => 2048,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'orientation'            => 'landscape',
                'idiom'                  => 'ipad',
                'filename'               => 'Default-Landscape@2x~ipad.png',
                'extent'                 => 'full-screen',
                'minimum-system-version' => '7.0',
                'scale'                  => '2x',
                'width'                  => 2048,
                'height'                 => 1536,
                'folder'                 => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'iphone',
                'filename'    => 'Default~iphone.png',
                'extent'      => 'full-screen',
                'scale'       => '1x',
                'width'       => 320,
                'height'      => 480,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'iphone',
                'filename'    => 'Default@2x~iphone.png',
                'extent'      => 'full-screen',
                'scale'       => '2x',
                'width'       => 640,
                'height'      => 960,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'iphone',
                'filename'    => 'Default-568h@2x~iphone.png',
                'extent'      => 'full-screen',
                'subtype'     => 'retina4',
                'scale'       => '2x',
                'width'       => 640,
                'height'      => 1136,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'ipad',
                'extent'      => 'to-status-bar',
                'scale'       => '1x',
                'width'       => 768,
                'height'      => 1004,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'ipad',
                'filename'    => 'Default-Portrait~ipad.png',
                'extent'      => 'full-screen',
                'scale'       => '1x',
                'width'       => 768,
                'height'      => 1024,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'landscape',
                'idiom'       => 'ipad',
                'extent'      => 'to-status-bar',
                'scale'       => '1x',
                'width'       => 1024,
                'height'      => 748,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'landscape',
                'idiom'       => 'ipad',
                'filename'    => 'Default-Landscape~ipad.png',
                'extent'      => 'full-screen',
                'scale'       => '1x',
                'width'       => 1024,
                'height'      => 768,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'ipad',
                'extent'      => 'to-status-bar',
                'scale'       => '2x',
                'width'       => 1536,
                'height'      => 2008,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'portrait',
                'idiom'       => 'ipad',
                'filename'    => 'Default-Portrait@2x~ipad.png',
                'extent'      => 'full-screen',
                'scale'       => '2x',
                'width'       => 1536,
                'height'      => 2048,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'landscape',
                'idiom'       => 'ipad',
                'extent'      => 'to-status-bar',
                'scale'       => '2x',
                'width'       => 2048,
                'height'      => 1496,
                'folder'      => 'LaunchImage.launchimage',
            ],
            [
                'orientation' => 'landscape',
                'idiom'       => 'ipad',
                'filename'    => 'Default-Landscape@2x~ipad.png',
                'extent'      => 'full-screen',
                'scale'       => '2x',
                'width'       => 2048,
                'height'      => 1536,
                'folder'      => 'LaunchImage.launchimage',
            ],
        ];
    }
}