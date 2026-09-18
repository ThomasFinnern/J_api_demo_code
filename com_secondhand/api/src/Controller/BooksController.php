<?php

/**
 * @package        Secondhand
 * @subpackage     com_secondhand
 * @author         steven_smith@dummy.com>
 * @copyright  (c) 2005-2026 Secondhand Team
 * @license        GNU General Public License version 2 or later
 */

namespace Bluebox\Component\Secondhand\Api\Controller;

use Joomla\CMS\MVC\Controller\ApiController;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * The books controller
 *
 * @since  4.0.0
 */
class BooksController extends ApiController
{
    /**
     * The content type of the item.
     *
     * @var    string
     * @since  4.0.0
     */
    protected $contentType = 'books';

    /**
     * The default view for the display method.
     *
     * @var    string
     * @since  3.0
     */
    protected $default_view = 'books';
}
