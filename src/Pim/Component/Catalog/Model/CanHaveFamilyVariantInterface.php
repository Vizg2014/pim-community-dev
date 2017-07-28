<?php

namespace Pim\Component\Catalog\Model;

/**
 * All entities who can have a family variant must implement this interface,
 * eg. a product model or a variant product
 *
 * @author    Adrien Pétremann <adrien.petremann@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface CanHaveFamilyVariantInterface extends EntityWithValuesInterface
{
    /**
     * @return FamilyVariantInterface|null
     */
    public function getFamilyVariant(): ?FamilyVariantInterface;

    /**
     * Get the variation level of this entity, on a zero-based value.
     * For example, if this entity has 2 parents, it's on level 2.
     * If it has 0 parent, it's on level 0.
     *
     * @return int
     */
    public function getVariationLevel(): int;

    /**
     * @return bool
     */
    public function isRootVariation(): bool;
}