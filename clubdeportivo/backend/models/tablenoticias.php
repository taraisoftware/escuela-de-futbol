<?php

namespace backend\models;

use Yii;
use \backend\models\base\tablenoticias as Basetablenoticias;

/**
 * This is the model class for table "table_noticias".
 */
class tablenoticias extends Basetablenoticias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['titulo', 'imagen', 'detalles',], 'required'],
            [['detalles'], 'string'],
            [['created_by', 'updated_by', 'deleted_by'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['titulo', 'imagen'], 'string', 'max' => 200]
        ]);
    }
	
}
