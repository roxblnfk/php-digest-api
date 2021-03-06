<?php

declare(strict_types=1);

namespace App\Api\UI\Form;

use Yiisoft\Form\FormModel;
use Yiisoft\Validator\Rule\Required;

final class RegisterForm extends FormModel
{
    private string $login = '';
    private string $password = '';

    public function attributeLabels(): array
    {
        return [
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    public function formName(): string
    {
        return 'RegisterForm';
    }

    public function rules(): array
    {
        return [
            'login' => [new Required()],
            'password' => [new Required()],
        ];
    }
}
