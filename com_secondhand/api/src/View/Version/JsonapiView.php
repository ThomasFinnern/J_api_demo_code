<?php

/**
 * @package        Secondhand
 * @subpackage     com_Secondhand
 * @author         steven_smith@dummy.com>
 * @copyright  (c) 2005-2026 Secondhand Team
 * @license        GNU General Public License version 2 or later
 */

namespace Bluebox\Component\Secondhand\Api\View\Version;

use Joomla\CMS\MVC\View\JsonApiView as BaseApiView;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * The version view
 *
 * @since  4.0.0
 */
class JsonapiView extends BaseApiView
{
    /**
     * The fields to render item in the documents
     *
     * @var    array
     * @since  4.1.0
     */
    protected $fieldsToRenderItem = [
        'version',
        'creationDate',
    ];

//    /**
//     * The fields to render items in the documents
//     *
//     * @var  array
//     * @since  4.0.0
//     */
//    protected $fieldsToRenderList = [
//        'version',
//        'creationDate',
//    ];

    /**
     * Prepare item before render.
     *
     * @param   object  $item  The model item
     *
     * @return  object
     *
     * @since   4.1.0
     */
    protected function prepareItem($item)
    {
        // Media resources have no id.
        $item->id = '0';

        return $item;
    }
}
