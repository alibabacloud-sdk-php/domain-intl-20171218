<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords;

use AlibabaCloud\Tea\Model;

class matchedSensitiveWord extends Model
{
    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'word' => 'Word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchedSensitiveWord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
