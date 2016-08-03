<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paper".
 *
 * @property integer $id
 * @property string $number
 * @property string $title
 * @property string $author
 * @property string $abstract
 * @property string $publishdate
 * @property string $magazine
 * @property string $url
 */
class Paper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['publishdate'], 'safe'],
            [['number'], 'string', 'max' => 20],
            [['title', 'magazine', 'url'], 'string', 'max' => 100],
            [['author'], 'string', 'max' => 50],
            [['abstract'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'title' => 'Title',
            'author' => 'Author',
            'abstract' => 'Abstract',
            'publishdate' => 'Publishdate',
            'magazine' => 'Magazine',
            'url' => 'Url',
        ];
    }
}
