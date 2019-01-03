<?php
namespace kouosl\portal-seo\models;

use Yii;

/**
 * Bu class Seo alanlarinin tanimlarini icerir
 *
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 *
 * @author Kubra Guclu <kubraguclu.1994@gmail.com>
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
