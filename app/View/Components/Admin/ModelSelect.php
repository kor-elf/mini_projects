<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;
use App\Helpers\ConvertHelper;

class ModelSelect extends Component
{
    private string $title;
    private string $name;
    private string $requestName;
    private ?string $value = '';
    private array  $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $name, array $items, $value = null)
    {
        $this->title = $title;
        $this->name = $name;
        $this->items = $items;

        $this->value = $value;

        $requestName = ConvertHelper::formatAttributeNameToRequestName($name);
        $this->requestName = $requestName;
        $value = old($requestName);
        unset($requestName);
        if ($value !== null) {
            $this->value = $value;
        }
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('admin.components.model-select',[
            'title' => $this->title,
            'name'  => $this->name,
            'requestName'  => $this->requestName,
            'value' => $this->value,
            'items' => $this->items,
        ]);
    }
}
