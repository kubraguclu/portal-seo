<?php
namespace kouosl\portal-seo\behaviors;

/**
 * @author Kubra Guclu <kubraguclu.1994@gmail.com>
 */

class KouSeoBehavior extends CBehavior
{
    /**
     * @property Sayfa basligi
     */
    public $title;
    /**
     * @property Sayfa icerigi
     */
    public $description;
    /**
     * @property Sayfanin anahtar kelimeleri
     */
    public $keywords;
}