<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookAuthors;

/**
 * BookAuthorsSearch represents the model behind the search form of `frontend\models\BookAuthors`.
 */
class BookAuthorsSearch extends BookAuthors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['baId', 'authorId', 'bookId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BookAuthors::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'baId' => $this->baId,
            'authorId' => $this->authorId,
            'bookId' => $this->bookId,
        ]);

        return $dataProvider;
    }
}
