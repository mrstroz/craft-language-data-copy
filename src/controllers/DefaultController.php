<?php
/**
 * language-data-copy plugin for Craft CMS 3.x
 *
 * Copy data to other languages
 *
 * @link      inwave.pl
 * @copyright Copyright (c) 2018 Mariusz Stróż
 */

namespace mrstroz\languagedatacopy\controllers;

use mrstroz\languagedatacopy\Languagedatacopy;

use Craft;
use craft\web\Controller;

/**
 * Default Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Mariusz Stróż
 * @package   Languagedatacopy
 * @since     1.0.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = [];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/language-data-copy/default
     *
     * @return mixed
     */
    public function actionIndex()
    {

        return $this->renderTemplate('language-data-copy/index', []);
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/language-data-copy/default/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the DefaultController actionDoSomething() method';

        return $result;
    }
}
