<?php
namespace Theme;

use App\WordPress\WordPress;

/**
 * @author Milad Alizadeh <hello@mili.london>
 * @version v1
 *
 * Render function
 */
class Render
{
    use WordPress;

    /**
     * Loads a view
     * @param  string $view
     * @param  object $data
     * @example $this->loadView('grid', $data);
     * @return string Compiled view
     */
    public static function view($view, $data = null)
    {
        ob_start();
        include $this->getTemplateDirectory() . "/App/View/" . $view . ".php";
        $view = ob_get_contents();
        ob_end_clean();
        return $view;
    }
}
