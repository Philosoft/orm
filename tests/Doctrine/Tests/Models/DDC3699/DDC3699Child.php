<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\DDC3699;

/** @Entity @Table(name="ddc3699_child") */
class DDC3699Child extends DDC3699Parent
{
    /** @Id @Column(type="integer") */
    public $id;

    /**
     * @var string
     * @Column(type="string")
     */
    public $childField;

    /**
     * @var DDC3699RelationOne
     * @OneToOne(targetEntity="DDC3699RelationOne", inversedBy="child")
     */
    public $oneRelation;

    /** @OneToMany(targetEntity="DDC3699RelationMany", mappedBy="child") */
    public $relations;
}
