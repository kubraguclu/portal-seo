<?php
namespace kouosl\portal-seo\models;

use Yii;

/**
 * Bu class Seo alanlarýnýn tanýmlamalarýný içermektedir.
 *
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 */
class Seo extends \yii\db\ActiveRecord
{
 
    public static function tableName()
    {
        return '{{%seo}}';
    }

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'keywords'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 522]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Seo Title',
            'keywords' => 'Seo Keywords',
            'description' => 'Seo Description',
        ];
    }
}