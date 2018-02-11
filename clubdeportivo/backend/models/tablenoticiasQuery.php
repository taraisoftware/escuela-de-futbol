<?php

namespace backend\models;
/**
 * This is the ActiveQuery class for [[tablenoticias]].
 *
 * @see tablenoticias
 */
class tablenoticiasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return tablenoticias[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return tablenoticias|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
