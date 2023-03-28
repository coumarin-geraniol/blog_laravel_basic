<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|exists:tags,id',
            'image' => 'nullable|file',
        ];
    }



    public function messages()
    {
        return [
            'title.required' => 'Please enter a title for your post.',
            'title.string' => 'Title should be in text format.',
            'title.unique' => 'A post with the same title already exists. Please choose a different title.',

            'content.required' => 'Please enter some content for your post.',
            'content.string' => 'Content should be in text format.',
            'content.unique' => 'A post with the same content already exists. Please choose a different content.',

            'category_id.required' => 'Please select a category for your post.',
            'category_id.exists' => 'Please select a valid category for your post.',

            'tag_ids.required' => 'Please select at least one tag for your post.',
            'tag_ids.array' => 'Tags should be selected in an array format.',

            'tag_ids.*.required' => 'Please select a valid tag for your post.',
            'tag_ids.*.exists' => 'Please select a valid tag for your post.',

            'image.required' => 'Please upload an image for your post.',
            'image.file' => 'The file should be an image.',
        ];
    }
}
