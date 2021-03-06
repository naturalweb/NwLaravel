<?php

namespace NwLaravel\FileStorage;

use Intervention\Image\ImageManager;
use Intervention\Image\Image;

class ImagineFactory
{
    /**
     * @var ImageManager
     */
    protected $manager;

    /**
     * Construct
     *
     * @param ImageManager $manager
     */
    public function __construct(ImageManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Factory
     *
     * @param string $path
     *
     * @return Imagine
     */
    public function make($path)
    {
        if (extension_loaded('imagick') && class_exists('Imagick')) {
            return new ImagineImagick($path, $this->manager);
        }

        return new ImagineGd($path, $this->manager);
    }
}
