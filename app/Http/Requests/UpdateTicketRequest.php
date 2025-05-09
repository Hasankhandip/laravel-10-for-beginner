<?php
namespace App\Http\Requests;

use App\Enums\TicketStatus;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class UpdateTicketRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'title'       => ['string', 'max:255'],
            'description' => ['string'],
            'status'      => ['string', ValidationRule::in(array_column(TicketStatus::cases(), 'value'))],
            'attachment'  => ['sometimes', 'file', 'mimes:png,jpg,jpeg,pdf'],
        ];
    }
}
