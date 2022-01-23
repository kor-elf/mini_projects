<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;
use App\Helpers\ConvertHelper;

class ModelInput extends Component
{
    private string $title;
    private string $name;
    private string $requestName;
    private ?string $value = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $name, $model = null, $setValue = null)
    {
        $this->title = $title;
        $this->name = $name;

        $requestName = ConvertHelper::formatAttributeNameToRequestName($name);
        $this->requestName = $requestName;
        $value = old($requestName);
        unset($requestName);
        if ($value !== null) {
            $this->value = $value;
        } else if (!empty($model)) {
            $this->value = $model->$name;
        } else if ($setValue) {
            $this->value = $setValue;
        }
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('admin.components.model-input',[
            'title' => $this->title,
            'name'  => $this->name,
            'requestName'  => $this->requestName,
            'value' => $this->value
        ]);
    }
}
