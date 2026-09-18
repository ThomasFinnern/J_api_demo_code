<?php

/**
 * @package        Secondhand
 * @subpackage     com_secondhand
 * @author         steven_smith@dummy.com>
 * @copyright  (c) 2005-2026 Secondhand Team
 * @license        GNU General Public License version 2 or later
 */

namespace Bluebox\Component\Secondhand\Api\Controller;

use Joomla\CMS\Access\Exception\NotAllowed;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\ApiController;
use Joomla\String\Inflector;
use Bluebox\Component\Secondhand\Api\Model\VersionModel;
use Bluebox\Component\Secondhand\Api\View\Version\JsonapiView;
use Tobscure\JsonApi\Exception\InvalidParameterException;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * The version controller
 *
 * @since  5.0.10
 */
class VersionController extends ApiController
{
    /**
     * The content type of the item.
     *
     * @var    string
     * @since  5.0.10
     */
    protected $contentType = 'version';

    /**
     * The default view for the display method.
     *
     * @var    string
     * @since  5.0.10
     */
    protected $default_view = 'version';

	/**
	 *
	 * @return VersionController
	 *
	 * @throws InvalidParameterException
	 * @since version
	 */
	public function edit() : ApiController
	{
		// Access check.
		if (!$this->allowEdit())
		{
			throw new NotAllowed('JLIB_APPLICATION_ERROR_CREATE_RECORD_NOT_PERMITTED', 403);
		}

		// all variables
		$data = $this->input->json->getArray();

		if (empty($data))
		{
			throw new InvalidParameterException(Text::_('No parameter given for patch config'), 403);        //	Text::sprintf("Missing required parameter(s): %s", implode(' & ', $missingParameters));
		}

		//--- Create the model -----------------------------------------------------------------

		/** @var VersionModel $model */
		$model = $this->getModel('Version', '', ['ignore_request' => true, 'state' => $this->modelState]);

		$isSaved = $model->save($data);

		return parent::displayItem('0');
	}

}
