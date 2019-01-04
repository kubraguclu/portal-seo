# KOUOSL-SEO

Bu modul, KOU Portal'in SEO optimizasyonu icin olusturulmustur. Bu modul ile birlikte, portal uygulamasinin Google gibi arama motorlari tarafindan daha iyi bir sekilde indexlenmesi amaclanmistir.

Modul olusturulmasinda, ilk olarak [Portal-Gii ile Modül Oluşturma](https://medium.com/kouosl/gii-kullanarak-mod%C3%BCl-olu%C5%9Fturma-a60dca546182) baslikli makale takip edilmistir.

Modul olusturulduktan sonra, `Yii framework` tarafindan sunulan
* [Behaviours](https://www.yiiframework.com/doc/guide/2.0/en/concept-behaviors)
* [Widgets](https://www.yiiframework.com/doc/guide/2.0/en/structure-widgets)
* [ActiveRecord](https://www.yiiframework.com/doc/guide/2.0/en/db-active-record)

gibi API'lar kullanilmistir.


## Yukleme

Portal dizinindeki `composer.json` dosyasına gidilerek modül projemize kaydedilir.

```
....

"repositories": [  
    {

        ....

        {  
            "type": "vcs",  
            "url": "https://github.com/kubraguclu/portal-seo.git"
        }  
],

"require": {  
       
    ....   

    "kouosl/portal-seo": "dev-master"
},

....
```
ve daha sonra 

```composer update```

## Kullanimi

Layout icerisinde,

```
    <?php Yii::app()->controller->widget(
        'vendor.kouosl.portal-seo.widgets.SeoWidget',
        array()
    ); ?>
```

daha sonra kendi controllerinizin icerisinde(mesela anasayfa, ogrenci sayfasi, modul sayfasi vb.)

```
    public function behaviors()
    {
        return array(
            'seo' => array('class' => 'vendor.kouosl.portal-seo.behaviors.SeoBehavior'),
        );
    }
```

ve view dosyasinda

```
$this->title = ["KOUOSL Portal - Anasayfa"];
$this->description = "Arama sayfasi optimizasyonlu aciklama buraya gelecek";
$this->keywords = "kouosl, portal, anasayfa, kocaeli, github, ogrenci";
```

sonucun asagidaki gibi olmasi beklenmektedir.

![sonuc](https://raw.githubusercontent.com/kubraguclu/portal-seo/master/doc.jpg)

```
