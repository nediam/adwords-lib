<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\Common\Lib;
use Exception;

/**
 * Exception class for any client library validation error.
 * @package GoogleApiAdsCommon
 * @subpackage Lib
 */
class ValidationException extends Exception
{
    const EXCEPTION_FORMAT = 'Validation failed for [%s] with value [%s]: %s';
    /**
     * The trigger for the validation exception.
     * @var $trigger
     */
    protected $trigger;
    /**
     * Constructor for ValidationException where the exception will appear
     * as "Validation failed for [$trigger] with value [$value]: $message".
     * @param string $trigger the trigger for the validation error
     * @param string $value the value for the trigger
     * @param string $message the message representing the error in validation
     */
    public function __construct($trigger, $value, $message)
    {
        $this->trigger = $trigger;
        parent::__construct(sprintf(self::EXCEPTION_FORMAT, $trigger, $value, $message));
    }
    /**
     * Get the trigger for the validation error.
     * @return string the trigger for the validation error.
     */
    public function GetTrigger()
    {
        return $this->trigger;
    }
}
