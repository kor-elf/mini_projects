<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\Status;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $productId = (optional($this->product)->id ?: 'NULL');
        if ($productId != 'NULL') {
            $productId = intval($productId);
        }

        $statuses = new Status();
        $statuses = $statuses->getList();
        $statuses = implode(',', $statuses);

        return [
            'name' => 'required|min:10|max:255',
            'status' => 'required|in:' . $statuses,
            'art' => 'required|min:1|max:255|regex:/^[a-z0-9]+$/i|unique:products,art,' . $productId,
            'data.brand' => 'nullable|max:255',
            'data.color' => 'nullable|max:255',
            'data.size' => 'nullable|int',
        ];
    }
}
