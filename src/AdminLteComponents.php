<?php

namespace Luanardev\AdminLte;

class AdminLteComponents
{
    /**
     * Array with the available layout components.
     *
     * @var array
     */
    public static $layoutComponents = [
        Components\Layout\NavbarNotification::class,
        Components\Layout\Master::class,
        Components\Layout\App::class,
    ];

    /**
     * Array with the available form components.
     *
     * @var array
     */
    public static $formComponents = [
        Components\Form\Button::class,
        Components\Form\DateRange::class,
        Components\Form\Input::class,
        Components\Form\InputColor::class,
        Components\Form\InputDate::class,
        Components\Form\InputFile::class,
        Components\Form\InputSlider::class,
        Components\Form\InputSwitch::class,
        Components\Form\Options::class,
        Components\Form\Select::class,
        Components\Form\Select2::class,
        Components\Form\SelectBs::class,
        Components\Form\Textarea::class,
        Components\Form\TextEditor::class,
        Components\Form\Validation::class,
    ];

    /**
     * Array with the available tool components.
     *
     * @var array
     */
    public static $toolComponents = [
        Components\Tool\Datatable::class,
        Components\Tool\Modal::class,
    ];

    /**
     * Array with the available widget components.
     *
     * @var array
     */
    public static $widgetComponents = [
        Components\Widget\Alert::class,
        Components\Widget\Flash::class,
        Components\Widget\Callout::class,
        Components\Widget\Card::class,
        Components\Widget\InfoBox::class,
        Components\Widget\ProfileColItem::class,
        Components\Widget\ProfileRowItem::class,
        Components\Widget\ProfileWidget::class,
        Components\Widget\Progress::class,
        Components\Widget\SmallBox::class,
    ];

    public static function getComponents()
    {
        // Load all the blade-x components.

        $components = array_merge(
            static::$layoutComponents,
            static::$formComponents,
            static::$toolComponents,
            static::$widgetComponents
        );
        return $components;
    }

  

}