<?php

namespace Wizardry\MainBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Wizardry\MainBundle\Document\Set;

    /**
     * @ODM\Document(collection="Block")
     */

class Card {

    /**
     * @ODM\Id
     * @ODM\ReferenceOne(targetDocument="Set", inversedBy="cardContain")
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     */
    private $name;

    /**
     * @ODM\Field(type="string")
     */
    private $manaCost;

    /**
     * @ODM\Field(type="int")
     */
    private $convertedManaCost;

    /**
     * @ODM\Field(type="file")
     */
    private $image;

    /**
     * @ODM\Field(type="string")
     */
    private $type;

    /**
     * @ODM\Field(type="string")
     */
    private $subType;

    /**
     * @ODM\Field(type="string")
     */
    private $rarity;

    /**
     * @ODM\Field(type="float")
     */
    private $power;

    /**
     * @ODM\Field(type="float")
     */
    private $toughness;

    /**
     * @ODM\Field(type="string")
     */
    private $description;

    /**
     * @ODM\Field(type="string")
     */
    private $artDescription;

    /**
     * @ODM\Field(type="string")
     */
    private $artist;
}
