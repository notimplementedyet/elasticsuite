<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCore
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\ElasticSuiteCore\Api\Search\Request\Container\RelevanceConfiguration;

/**
 * FuzzinessConfiguration object interface
 *
 * @category Smile
 * @package  Smile_ElasticSuiteCore
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
interface FuzzinessConfigurationInterface
{
    /**
     * Get Fuzziness value
     *
     * @return string|integer
     */
    public function getValue();

    /**
     * Get Prefix Length
     *
     * @return int
     */
    public function getPrefixLength();

    /**
     * Get Max. Expansion
     *
     * @return int
     */
    public function getMaxExpansion();
}
