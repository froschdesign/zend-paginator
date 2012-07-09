<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @package   Zend_Paginator
 */

namespace Zend\Paginator\ScrollingStyle;

use Zend\Paginator\Paginator;

/**
 * @category   Zend
 * @package    Zend_Paginator
 */
interface ScrollingStyleInterface
{
    /**
     * Returns an array of "local" pages given a page number and range.
     *
     * @param  Paginator $paginator
     * @param  integer $pageRange (Optional) Page range
     * @return array
     */
    public function getPages(Paginator $paginator, $pageRange = null);
}
