<?php

namespace Pim\Component\Catalog\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Variant product. An entity that belongs to a family variant and that contains flexible values,
 * completeness, categories, associations and much more...
 *
 * @author    Julien Janvier <j.janvier@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface VariantProductInterface extends ProductInterface, EntityWithFamilyVariantInterface
{
    /**
     * @param Collection $groups
     */
    public function setGroups(Collection $groups): void;

    /**
     * @param Collection $categories
     */
    public function setCategories(Collection $categories): void;

    /**
     * @param $data Collection
     */
    public function setUniqueData(Collection $data): void;
}
