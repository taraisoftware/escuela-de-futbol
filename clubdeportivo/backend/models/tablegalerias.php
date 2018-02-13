<?php

namespace backend\models;

use Yii;
use \backend\models\base\tablegalerias as Basetablegalerias;

/**
 * This is the model class for table "table_galerias".
 */
class tablegalerias extends Basetablegalerias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['imagen', ], 'required'],
            [['created_by', 'updated_by', 'deleted_by'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['imagen'], 'string', 'max' => 200]
        ]);
    }
	
}
