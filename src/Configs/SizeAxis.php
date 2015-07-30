<?php

namespace Khill\Lavacharts\Configs;

use \Khill\Lavacharts\Exceptions\InvalidConfigValue;

/**
 * SizeAxis Object
 *
 * An object containing all the values for the sizeAxis which can be
 * passed into the chart's options.
 *
 *
 * @package    Lavacharts
 * @subpackage Configs
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2015, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */
class SizeAxis extends ConfigObject
{
    /**
     * Maximum radius of the largest possible bubble, in pixels.
     *
     * @var int
     */
    public $maxSize;

    /**
     * The size value to be mapped to $this->maxSize.
     *
     * @var int
     */
    public $maxValue;

    /**
     * Minimum radius of the smallest possible bubble, in pixels.
     *
     * @var int
     */
    public $minSize;

    /**
     * The size value to be mapped to $this->minSize.
     *
     * @var int
     */
    public $minValue;


    /**
     * Builds the configuration when passed an array of options.
     *
     * All options can be set by either passing an array with associative
     * values for option => value, or by chaining together the functions once
     * an object has been created.
     *
     * @param  array $config An array containing configuration options.
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigProperty
     * @return self
     */
    public function __construct($config = [])
    {
        parent::__construct($this, $config);
    }

    /**
     * Sets maximum radius of the largest possible bubble, in pixels.
     *
     * @param  int|float $maxSize
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @return self
     */
    public function maxSize($maxSize)
    {
        if (is_numeric($maxSize)) {
            $this->maxSize = $maxSize;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | float'
            );
        }

        return $this;
    }

    /**
     * Set the size value (as appears in the chart data) to be mapped to
     * $this->maxSize. Larger values will be cropped to this value.
     *
     * @param  int|float $maxValue
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @return self
     */
    public function maxValue($maxValue)
    {
        if (is_numeric($maxValue)) {
            $this->maxValue = $maxValue;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | float'
            );
        }

        return $this;
    }

    /**
     * Sets minimum radius of the smallest possible bubble, in pixels
     *
     * @param  int|float $minSize
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @return self
     */
    public function minSize($minSize)
    {
        if (is_numeric($minSize)) {
            $this->minSize = $minSize;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | float'
            );
        }

        return $this;
    }

    /**
     * Set the size value (as appears in the chart data) to be mapped to
     * $this->minSize. Larger values will be cropped to this value.
     *
     * @param  int|float $minValue
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @return self
     */
    public function minValue($minValue)
    {
        if (is_numeric($minValue)) {
            $this->minValue = $minValue;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | float'
            );
        }

        return $this;
    }
}
